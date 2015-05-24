<?php

namespace Acme\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

use Acme\BlogBundle\Entity\Categories;
use Acme\AdminBundle\Form\Type\CategoryType;

class CategoryController extends Controller
{
    
    #
    # Creates route for view 'categories'
    #
    
    public function allAction()
    {  
        return $this->render('AcmeAdminBundle:Category:categories.html.twig');
    }    
    
     public function categoriesjsonAction(Request $request) {
        
        $request = $this->getRequest();
        
        $search = $request->query->get('search'); 
         
        $em = $this->getDoctrine()->getManager();
        $query = $em->createQuery( "SELECT c, g FROM AcmeBlogBundle:Categories c JOIN c.group g WHERE CONCAT(c.catName, CONCAT(' ', c.description)) LIKE :search ORDER BY c.id ASC");
        $query->setParameter('search', '%' . $search . '%');
        
        $categories = $query->getResult(\Doctrine\ORM\Query::HYDRATE_ARRAY);;
            
        $response = new Response();
        $response->setContent(json_encode($categories));
        
        $response->headers->set('Content-Type', 'application/json');
        
        return $response;
  
    }
    
    public function categoryAction($id, Request $request) {
         
        $category = new Categories();
        
        $em = $this->getDoctrine()->getManager();

        $category = $em->getRepository('AcmeBlogBundle:Categories')->find($id);
        
        if ( !$category ) {
            throw $this->createNotFoundException(
                     'Kein Beitrag mit der Id: ' . $id );
        }
        
            $form = $this->createForm(new CategoryType(), $category);    
                    
               dump($category);
                $form->handleRequest($request);
                
                if ($form->isValid()) {
                    
                    $em->persist($category);
                    $em->flush();
                    $this->get('session')->getFlashBag()->add('notice', 'Änderungen wurden erfolgreich gespeichert!');
                    
                    return $this->render('AcmeAdminBundle:Category:category.html.twig', array('form' => $form->createView()));
                   
                }
        
        return $this->render('AcmeAdminBundle:Category:category.html.twig', array('form' => $form->createView()));
        
    }    

    public function newAction(Request $request) {
              
        $category = new Categories();
        
        $form = $this->createForm(new CategoryType(), $category);        

        $form->handleRequest($request);
        
        if ($form->isValid()) {
                    
            $em = $this->getDoctrine()->getManager();
            $em->persist($category);
            $em->flush();
            $this->get('session')->getFlashBag()->add('notice', 'Kategorie wurde erfolgreich gespeichert!');
                    
            return $this->render('AcmeAdminBundle:Category:categories.html.twig', array('form' => $form->createView()));
                   
        }
        
        return $this->render('AcmeAdminBundle:Category:newcategory.html.twig', array('form' => $form->createView()));
        
    }
    
     public function deleteAction($id) {
         
        $category = new Categories();
        
        $em = $this->getDoctrine()->getManager();

        $category = $em->getRepository('AcmeBlogBundle:Categories')->find($id);
               
        $em = $this->getDoctrine()->getManager();
        $em->remove($category);
        $em->flush();
        $this->get('session')->getFlashBag()->add('notice', 'Kategorie wurde erfolgreich gelöscht!');
                    
        return $this->redirectToRoute('acme_category_all');
  
    }    
    
}