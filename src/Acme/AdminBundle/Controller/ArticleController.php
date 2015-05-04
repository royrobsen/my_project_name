<?php

namespace Acme\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Acme\BlogBundle\Entity\Articles;
use Acme\AdminBundle\Form\Type\ArticlesType;


class ArticleController extends Controller
{
    
    #
    # Creates route for view 'all-articles'
    #
    
    public function allAction()
    {  
        return $this->render('AcmeAdminBundle:Article:all-articles.html.twig');
    }
    
    #
    # Creates route for view 'papierkorb'
    #
    
    public function papierkorbAction()
    {  
        return $this->render('AcmeAdminBundle:Article:papierkorb.html.twig');
    }
    
    #
    # Delivers JSON-Data for angularjs
    # all articles are delivered
    #    

    public function jsonallarticlesAction() {
         
        $em = $this->getDoctrine()->getManager();
        $query = $em->createQuery( "SELECT a, u, c, s FROM AcmeBlogBundle:Articles a JOIN a.author u JOIN a.category c JOIN a.state s WHERE a.status != 2 ORDER BY a.createdDate DESC");
        
        $articles = $query->getResult(\Doctrine\ORM\Query::HYDRATE_ARRAY);;
            
        $response = new Response();
        $response->setContent(json_encode($articles));
        
        $response->headers->set('Content-Type', 'application/json');
        
        return $response;
    
    } 

    #
    # Delivers JSON-Data for angularjs
    # all articles with papierkorb status are delivered
    #    

    public function jsonalldumpedarticlesAction() {
         
        $em = $this->getDoctrine()->getManager();
        $query = $em->createQuery( "SELECT a, u, c, s FROM AcmeBlogBundle:Articles a JOIN a.author u JOIN a.category c JOIN a.state s WHERE a.status = 2 ORDER BY a.createdDate DESC");
        
        $articles = $query->getResult(\Doctrine\ORM\Query::HYDRATE_ARRAY);;
            
        $response = new Response();
        $response->setContent(json_encode($articles));
        
        $response->headers->set('Content-Type', 'application/json');
        
        return $response;
    
    }

    public function articleAction($id, Request $request) {
        
        function format_uri2( $string, $separator = '-' )
        {
            $accents_regex = '~&([a-z]{1,2})(?:acute|cedil|circ|grave|lig|orn|ring|slash|th|tilde|uml);~i';
            $special_cases = array( '&' => 'and', 'ü' => 'ue', 'ä' => 'ae', 'ö' => 'oe', 'ß' => 'ss' );
            $string = mb_strtolower( trim( $string ), 'UTF-8' );
            $string = str_replace( array_keys($special_cases), array_values( $special_cases), $string );
            $string = preg_replace( $accents_regex, '$1', htmlentities( $string, ENT_QUOTES, 'UTF-8' ) );
            $string = preg_replace("/[^a-z0-9]/u", "$separator", $string);
            $string = preg_replace("/[$separator]+/u", "$separator", $string);
        
            return $string;
        }
        
        $article = new Articles();
        
        $em = $this->getDoctrine()->getManager();

        $article = $em->getRepository('AcmeBlogBundle:Articles')->find($id);
        
        if ( !$article ) {
            throw $this->createNotFoundException(
                     'Kein Beitrag mit der Id: ' . $id );
        }
        
            $form = $this->createForm(new ArticlesType(), $article);    
                   
                $form->handleRequest($request);
                
                if ($form->isValid()) {
                    
                    $alias = format_uri2($article->getHeadline());
            
                    $article->setAlias($alias);
                    
                    $em->persist($article);
                    $em->flush();
                    $this->get('session')->getFlashBag()->add('notice', 'Änderungen wurden erfolgreich gespeichert!');
                    
                    return $this->render('AcmeAdminBundle:Article:articleedit.html.twig', array('article' => $article, 'form' => $form->createView()));
                   
                }
        
        return $this->render('AcmeAdminBundle:Article:articleedit.html.twig', array('article' => $article, 'form' => $form->createView()));
        
    }
    
    public function newAction(Request $request) {
        
        function format_uri( $string, $separator = '-' )
        {
            $accents_regex = '~&([a-z]{1,2})(?:acute|cedil|circ|grave|lig|orn|ring|slash|th|tilde|uml);~i';
            $special_cases = array( '&' => 'and', 'ü' => 'ue', 'ä' => 'ae', 'ö' => 'oe', 'ß' => 'ss' );
            $string = mb_strtolower( trim( $string ), 'UTF-8' );
            $string = str_replace( array_keys($special_cases), array_values( $special_cases), $string );
            $string = preg_replace( $accents_regex, '$1', htmlentities( $string, ENT_QUOTES, 'UTF-8' ) );
            $string = preg_replace("/[^a-z0-9]/u", "$separator", $string);
            $string = preg_replace("/[$separator]+/u", "$separator", $string);
        
            return $string;
        }
    
        $article = new Articles();
       
        $article->setCreatedBy('13');
        
        $form = $this->createForm(new ArticlesType(), $article);        

        $form->handleRequest($request);
        
        if ($form->isValid()) {
            
            $alias = format_uri($article->getHeadline());
            
            $article->setAlias($alias);
            
            $em = $this->getDoctrine()->getManager();
            $em->persist($article);
            $em->flush();
            $this->get('session')->getFlashBag()->add('notice', 'Artikel wurde erfolgreich gespeichert!');
                    
            return $this->render('AcmeAdminBundle:Article:articlenew.html.twig', array('form' => $form->createView()));
                   
        }
        
        return $this->render('AcmeAdminBundle:Article:articlenew.html.twig', array('form' => $form->createView()));
        
    }
    
    public function binAction($id) {
        
        $article = new Articles();
        
        $em = $this->getDoctrine()->getManager();

        $article = $em->getRepository('AcmeBlogBundle:Articles')->find($id);
        
        $article->setStatus(2);
        
        $em = $this->getDoctrine()->getManager();
        $em->persist($article);
        $em->flush();
        $this->get('session')->getFlashBag()->add('notice', 'Artikel wurde erfolgreich in den Papierkorb gelegt!');
                    
        return $this->redirectToRoute('acme_article_papierkorb');
  
    }
    
     public function deleteAction($id) {
        
        $article = new Articles();
        
        $em = $this->getDoctrine()->getManager();

        $article = $em->getRepository('AcmeBlogBundle:Articles')->find($id);
               
        $em = $this->getDoctrine()->getManager();
        $em->remove($article);
        $em->flush();
        $this->get('session')->getFlashBag()->add('notice', 'Artikel wurde erfolgreich gelöscht!');
                    
        return $this->redirectToRoute('acme_article_papierkorb');
  
    }
    
}