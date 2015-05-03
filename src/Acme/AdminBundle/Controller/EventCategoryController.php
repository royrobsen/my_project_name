<?php

namespace Acme\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Acme\BlogBundle\Entity\EventCategory;
use Acme\AdminBundle\Form\Type\EventcategoryType;


class EventCategoryController extends Controller
{
    
    #
    # Creates route for view 'all'
    #
    
    public function allAction()
    {  
        return $this->render('AcmeAdminBundle:EventCategory:all.html.twig');
    }    
    
     public function eventcategoryjsonAction() {
        
        $em = $this->getDoctrine()->getManager();
        $query = $em->createQuery( "SELECT ec FROM AcmeBlogBundle:EventCategory ec ORDER BY ec.id ASC");
        
        $eventcategory = $query->getResult(\Doctrine\ORM\Query::HYDRATE_ARRAY);;
            
        $response = new Response();
        $response->setContent(json_encode($eventcategory));
        
        $response->headers->set('Content-Type', 'application/json');
        
        return $response;
  
    }
    
    public function eventcategoryAction($id, Request $request) {
         
        $eventcategory = new Eventcategory();
        
        $em = $this->getDoctrine()->getManager();

        $eventcategory = $em->getRepository('AcmeBlogBundle:EventCategory')->find($id);
        
        if ( !$eventcategory ) {
            throw $this->createNotFoundException(
                     'Kein Beitrag mit der Id: ' . $id );
        }
        
            $form = $this->createForm(new EventcategoryType(), $eventcategory);    
                    
               dump($eventcategory);
                $form->handleRequest($request);
                
                if ($form->isValid()) {
                    
                    $em->persist($eventcategory);
                    $em->flush();
                    $this->get('session')->getFlashBag()->add('notice', 'Änderungen wurden erfolgreich gespeichert!');
                    
                    return $this->render('AcmeAdminBundle:EventCategory:all.html.twig', array('form' => $form->createView()));
                   
                }
        
        return $this->render('AcmeAdminBundle:EventCategory:eventcategory.html.twig', array('form' => $form->createView()));
        
    }    

    public function newAction(Request $request) {
              
        $eventcategory = new EventCategory();
        
        $form = $this->createForm(new EventcategoryType(), $eventcategory);        

        $form->handleRequest($request);
        
        if ($form->isValid()) {
                    
            $em = $this->getDoctrine()->getManager();
            $em->persist($eventcategory);
            $em->flush();
            $this->get('session')->getFlashBag()->add('notice', 'Kategorie wurde erfolgreich gespeichert!');
                    
            return $this->render('AcmeAdminBundle:EventCategory:all.html.twig', array('form' => $form->createView()));
                   
        }
        
        return $this->render('AcmeAdminBundle:EventCategory:new.html.twig', array('form' => $form->createView()));
        
    }
    
     public function deleteAction($id) {
         
        $eventcategory = new EventCategory();
        
        $em = $this->getDoctrine()->getManager();

        $eventcategory = $em->getRepository('AcmeBlogBundle:EventCategory')->find($id);
               
        $em = $this->getDoctrine()->getManager();
        $em->remove($eventcategory);
        $em->flush();
        $this->get('session')->getFlashBag()->add('notice', 'Termin-Kategorie wurde erfolgreich gelöscht!');
                    
        return $this->redirectToRoute('acme_eventcategory_all');
  
    }    
    
}
