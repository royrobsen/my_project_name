<?php

namespace Acme\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Acme\BlogBundle\Form\Type\ContactType;

class DefaultController extends Controller
{
    public function indexAction()
    {
        
        $events = $this->getDoctrine()
                ->getRepository('AcmeBlogBundle:Events');
                
        $queryEvents = $events->createQueryBuilder('e')
                ->where('e.startdate >= :startdate')
                ->setParameter('startdate', date('Y-m-d'))
                ->orderBy('e.startdate  ', 'ASC')
                ->setMaxResults(4)
                ->getQuery();
        
        $events = $queryEvents->getResult();
        
        // last game we played with scores       
        $lastgame = $this->getDoctrine()
                ->getRepository('AcmeBlogBundle:Events');
                
        $queryLastGame = $lastgame->createQueryBuilder('e')
                ->where('e.startdate <= :startdate AND e.eventcatId = 2 OR e.startdate <= :startdate AND e.eventcatId = 3')
                ->setParameter('startdate', date('Y-m-d'))
                ->orderBy('e.startdate', 'DESC')
                ->setMaxResults(1)
                ->getQuery();
        
        $lastgame = $queryLastGame->getResult();

        $articles = $this->getDoctrine()
                ->getRepository('AcmeBlogBundle:Articles');
        
        $queryArticles = $articles->createQueryBuilder('a')
                ->where('a.createdDate <= :date AND a.status != :status AND a.status != :status2')
                ->setParameter('date', date('Y-m-d'))
                ->setParameter('status', "2")
                ->setParameter('status2', "3")
                ->orderBy('a.createdDate', 'DESC')
                ->setMaxResults(6)
                ->getQuery();
        
        $articles = $queryArticles->getResult();
        
        $announce = $this->getDoctrine()
                ->getRepository('AcmeBlogBundle:Articles');
        
        $queryAnnouncements = $announce->createQueryBuilder('a')
                ->where('a.status = :status')
                ->setParameter('status', "3")
                ->orderBy('a.createdDate', 'DESC')
                ->setMaxResults(4)
                ->getQuery();
        
        $announce = $queryAnnouncements->getResult();
        
        function get_fcontent( $url,  $javascript_loop = 0, $timeout = 5 ) {
            $url = str_replace( "&amp;", "&", urldecode(trim($url)) );

            $cookie = tempnam ("/tmp", "CURLCOOKIE");
            $ch = curl_init();
            curl_setopt( $ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows; U; Windows NT 5.1; rv:1.7.3) Gecko/20041001 Firefox/0.10.1" );
            curl_setopt( $ch, CURLOPT_URL, $url );
            curl_setopt( $ch, CURLOPT_COOKIEJAR, $cookie );
            //curl_setopt( $ch, CURLOPT_FOLLOWLOCATION, true );
            curl_setopt( $ch, CURLOPT_ENCODING, "" );
            curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );
            curl_setopt( $ch, CURLOPT_AUTOREFERER, true );
            curl_setopt( $ch, CURLOPT_SSL_VERIFYPEER, false );    # required for https urls
            curl_setopt( $ch, CURLOPT_CONNECTTIMEOUT, $timeout );
            curl_setopt( $ch, CURLOPT_TIMEOUT, $timeout );
            curl_setopt( $ch, CURLOPT_MAXREDIRS, 10 );
            $content = curl_exec( $ch );
            $response = curl_getinfo( $ch );
            curl_close ( $ch );

            if ($response['http_code'] == 301 || $response['http_code'] == 302) {
                ini_set("user_agent", "Mozilla/5.0 (Windows; U; Windows NT 5.1; rv:1.7.3) Gecko/20041001 Firefox/0.10.1");

                if ( $headers = get_headers($response['url']) ) {
                    foreach( $headers as $value ) {
                        if ( substr( strtolower($value), 0, 9 ) == "location:" )
                            return get_url( trim( substr( $value, 9, strlen($value) ) ) );
            }
        }
    }

    if (    ( preg_match("/>[[:space:]]+window\.location\.replace\('(.*)'\)/i", $content, $value) || preg_match("/>[[:space:]]+window\.location\=\"(.*)\"/i", $content, $value) ) && $javascript_loop < 5) {
        return get_url( $value[1], $javascript_loop+1 );
    } else {
        return array( $content, $response );
    }

}

        $tab = get_fcontent("http://www.fussball.de/spieltag/kreisklasse-8-kreisebene-hamburg-kreisklasse-herren-saison1516-hamburg/-/staffel/01OKS9I1D4000004VV0AG812VSHGDHQC-G#!/section/stage");
        $test = explode("<td class=\"column-rank\">",$tab[0]);
        $table = "";
        $i = 1;
    while ($i != 17) {

    $test2 = explode(" break ",strip_tags(str_replace("</td>"," break ",str_replace("</span></div>","</span>",$test[$i]))));

    $table .= "<tr><td  class='aligncenter'>".$test2[0]."</td>
        <td class='alignleft'>".$test2[1]."</td>
        <td class='aligncenter'>".$test2[2]."</td>
        <td class='aligncenter'>".$test2[7]."</td>
        <td class='aligncenter'>".$test2[8]."</td></tr>" ;

        $i++;
    }

        return $this->render('AcmeBlogBundle:Default:index.html.twig', array('events' => $events, 'articles' => $articles, 'table' => $table, 'lastgame' => $lastgame, 'announces' => $announce));
    }
    
     public function articleAction($alias)
     {
         
        $em = $this->getDoctrine()->getManager();
        $query = $em->createQuery( "SELECT a, u, c, s, af FROM AcmeBlogBundle:Articles a JOIN a.author u JOIN a.category c JOIN a.state s JOIN a.aufgestellt af WHERE a.alias = :alias");
        $query->setParameter('alias', $alias);
        
        $article = $query->getResult();
        
        if ( !$article ) {
            throw $this->createNotFoundException(
                     'Kein Beitrag mit dem Alias: ' . $alias );
        }
         
        return $this->render('AcmeBlogBundle:Default:article.html.twig', array('article' => $article)); 
         
     }
     
 public function articlesAction() {
     
        $em = $this->getDoctrine()->getManager();
        $query = $em->createQuery( "SELECT a, u, c FROM AcmeBlogBundle:Articles a JOIN a.author u JOIN a.category c ORDER BY a.createdDate DESC");
        
        $articles = $query->getResult(\Doctrine\ORM\Query::HYDRATE_ARRAY);;
            
        $response = new Response();
        $response->setContent(json_encode($articles));
        
        $response->headers->set('Content-Type', 'application/json');
        
        return $response;
        
}

    public function newsAction() {
         
        return $this->render('AcmeBlogBundle:Default:news.html.twig');
    
     }
     
    public function reportsAction() {
         
        return $this->render('AcmeBlogBundle:Default:reports.html.twig');
    
     }
     
    public function impressumAction() {
         
        return $this->render('AcmeBlogBundle:Default:impressum.html.twig');
    
     }
     
    public function trainingszeitenAction() {
         
        return $this->render('AcmeBlogBundle:Default:trainingszeiten.html.twig');
    
     }

    public function eventsAction() {
         
        return $this->render('AcmeBlogBundle:Default:events.html.twig');
    
     }
     
    public function mannschaftAction() {
        
        $users = $this->getDoctrine()
                ->getRepository('AcmeBlogBundle:Users');
            
        $queryUsers = $users->createQueryBuilder('u')
                ->where('u.fotoid != :fotoid')
                ->setParameter('fotoid', 0)
                ->getQuery();
        
        $users = $queryUsers->getResult();
        
               
        return $this->render('AcmeBlogBundle:Default:mannschaft.html.twig', array('users' => $users));
    
     }
     
    public function kontaktAction(Request $request) {
        
        $form = $this->createForm(new ContactType()); 
                    
        $form->handleRequest($request);
            if ($form->isValid()) {
                $data =  $form->getData('security');
                if( $data['security'] == 15 ) {
                    
                    $mailer = $this->get('mailer');
    
                    $message = $mailer->createMessage()
                        ->setSubject('Kontaktformular')
                        ->setFrom('no-reply@team-equipment.de')
                        ->setTo('rbrannath@yahoo.de')
                        ->setBody(
                            $this->renderView(
                                // app/Resources/views/Emails/registration.html.twig
                                'AcmeAdminBundle:Emails:kontaktformmail.html.twig',
                                array('data' => $data)
                            ),
                            'text/html'
                        )
                        ->addPart(
                            $this->renderView(
                                'AcmeAdminBundle:Emails:kontaktformmail.txt.twig',
                                array('data' => $data)
                            ),
                            'text/plain'
                        )
                    ;
                    $mailer->send($message);
                    $this->get('session')->getFlashBag()->add('notice', 'Erfolgreich versendet!');

                } else {
                $this->get('session')->getFlashBag()->add('notice', 'Sicherheitsfrage ist falsch!');
                }
            }

        return $this->render('AcmeBlogBundle:Default:kontakt.html.twig', array('form' => $form->createView()));
    
     }
     
    public function jsonallarticlesAction(Request $request) {
        
        $request = $this->getRequest();
        
        $search = $request->query->get('search'); 
        
        $em = $this->getDoctrine()->getManager();
        $query = $em->createQuery( "SELECT a, u, c, s FROM AcmeBlogBundle:Articles a JOIN a.author u JOIN a.category c JOIN a.state s WHERE a.status != 2 AND a.status != 3 AND CONCAT(a.headline, CONCAT(' ', a.articleContent))  LIKE :search ORDER BY a.createdDate DESC");
        $query->setParameter('search', '%' . $search . '%');
        
        $articles = $query->getResult(\Doctrine\ORM\Query::HYDRATE_ARRAY);;
            
        $response = new Response();
        $response->setContent(json_encode($articles));
        
        $response->headers->set('Content-Type', 'application/json');
        
        return $response;
    
    } 
    
    public function jsonallreportsAction(Request $request) {
        
        $request = $this->getRequest();
        
        $search = $request->query->get('search'); 
        
        $em = $this->getDoctrine()->getManager();
        $query = $em->createQuery( "SELECT a, u, c, s FROM AcmeBlogBundle:Articles a JOIN a.author u JOIN a.category c JOIN a.state s WHERE a.status != 2 AND a.catId = 1 AND CONCAT(a.headline, CONCAT(' ', a.articleContent)) LIKE :search ORDER BY a.createdDate DESC");
        $query->setParameter('search', '%' . $search . '%');
        
        $articles = $query->getResult(\Doctrine\ORM\Query::HYDRATE_ARRAY);;
            
        $response = new Response();
        $response->setContent(json_encode($articles));
        
        $response->headers->set('Content-Type', 'application/json');
        
        return $response;
    
    } 
     
    public function jsoneventsAction() {
        
        $em = $this->getDoctrine()->getManager();
        $query = $em->createQuery( "SELECT e FROM AcmeBlogBundle:Events e");
        
        $events = $query->getResult(\Doctrine\ORM\Query::HYDRATE_ARRAY);;
        
        $json = array("success" => 1);
        
        foreach ($events as $event) {
            
            $start = strtotime($event['startdate']->format('Y-m-d H:i:s'))*1000;
            $end = strtotime($event['enddate']->format('Y-m-d H:i:s'))*1000;
            $url = "termin/preview/" . $event['id'];
            $results[] = array("id" => $event['id'], "title" => $event['title'], "url" => $url, "start" => $start, "end" => $end);
                    
        }

        $json['result'] = $results;
                        
        $response = new Response();
        
        $response->setContent(json_encode($json));
        
        $response->headers->set('Content-Type', 'application/json');
        
        return $response;
    
    } 
    
    public function singleeventAction($id) {
        
         
        $em = $this->getDoctrine()->getManager();
        $query = $em->createQuery( "SELECT e FROM AcmeBlogBundle:Events e WHERE e.id = :id");
        $query->setParameter('id', $id);
        
        $event = $query->getResult();
        
        if ( !$event ) {
            throw $this->createNotFoundException(
                     'Kein Termin mit der ID: ' . $id );
        }
         
        return $this->render('AcmeBlogBundle:Default:singleevent.html.twig', array('event' => $event)); 
         
    
    } 
    
     public function eventAction($alias)
     {
         
        $em = $this->getDoctrine()->getManager();
        $query = $em->createQuery( "SELECT e FROM AcmeBlogBundle:Events e WHERE e.alias = :alias");
        $query->setParameter('alias', $alias);
        
        $event = $query->getResult();
        
        if ( !$event ) {
            throw $this->createNotFoundException(
                     'Kein Termin mit dem Alias: ' . $alias );
        }
         
        return $this->render('AcmeBlogBundle:Default:event.html.twig', array('event' => $event)); 
         
     }
    
}
