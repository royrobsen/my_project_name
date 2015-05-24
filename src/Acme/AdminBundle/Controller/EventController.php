<?php

namespace Acme\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

use Acme\BlogBundle\Entity\Events;
use Acme\AdminBundle\Form\Type\EventType;

class EventController extends Controller
{
   
    #
    # Creates route for view 'events'
    #
    
    public function allAction()
    {  
        return $this->render('AcmeAdminBundle:Event:events.html.twig');
    }    
    
    #
    # Delivers JSON-Data for angularjs
    # all events are delivered
    #    

    public function jsoneventsAction(Request $request) {
         
        $request = $this->getRequest();
        
        $search = $request->query->get('search');
        
        $em = $this->getDoctrine()->getManager();
        $query = $em->createQuery( "SELECT e, ec, ug FROM AcmeBlogBundle:Events e JOIN e.eventcategory ec JOIN e.group ug WHERE CONCAT(e.title, CONCAT(' ', e.description)) LIKE :search ORDER BY e.createdDate DESC");
        $query->setParameter('search', '%' . $search . '%');
                
        $events = $query->getResult(\Doctrine\ORM\Query::HYDRATE_ARRAY);;
            
        $response = new Response();
        $response->setContent(json_encode($events));
        
        $response->headers->set('Content-Type', 'application/json');
        
        return $response;
    
    }

    public function eventAction($id, Request $request) {
         
        $event = new Events();
        
        $em = $this->getDoctrine()->getManager();

        $event = $em->getRepository('AcmeBlogBundle:Events')->find($id);
        
        if ( !$event ) {
            throw $this->createNotFoundException(
                     'Kein Termin mit der Id: ' . $id );
        }
        
            $form = $this->createForm(new EventType(), $event);    
                    
             
                $form->handleRequest($request);
                
                if ($form->isValid()) {
                    
                    $em->persist($event);
                    $em->flush();
                    $this->get('session')->getFlashBag()->add('notice', 'Änderungen wurden erfolgreich gespeichert!');
                    
                    return $this->render('AcmeAdminBundle:Event:event.html.twig', array('event' => $event, 'form' => $form->createView()));
                   
                }
        
        return $this->render('AcmeAdminBundle:Event:event.html.twig', array('event' => $event, 'form' => $form->createView()));
        
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
        
        $event = new Events();
       
        $event->setCreatedBy('13');
        
        $form = $this->createForm(new EventType(), $event);        

        $form->handleRequest($request);
        
        if ($form->isValid()) {
            
            $alias = format_uri($event->getTitle());
            
            $event->setAlias($alias);
            
            $em = $this->getDoctrine()->getManager();
            $em->persist($event);
            $em->flush();
            $this->get('session')->getFlashBag()->add('notice', 'Termin wurde erfolgreich gespeichert!');
                    
            return $this->render('AcmeAdminBundle:Event:newevent.html.twig', array('form' => $form->createView()));
                   
        }
        
        return $this->render('AcmeAdminBundle:Event:newevent.html.twig', array('form' => $form->createView()));
        
    }

     public function deleteAction($id) {
         
        $event = new Events();
        
        $em = $this->getDoctrine()->getManager();

        $event = $em->getRepository('AcmeBlogBundle:Events')->find($id);
               
        $em = $this->getDoctrine()->getManager();
        $em->remove($event);
        $em->flush();
        $this->get('session')->getFlashBag()->add('notice', 'Termin wurde erfolgreich gelöscht!');
                    
        return $this->redirectToRoute('acme_event_all');
  
    }    
    
}