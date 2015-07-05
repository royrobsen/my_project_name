<?php

namespace Acme\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Acme\BlogBundle\Entity\Users;
use Acme\AdminBundle\Form\Type\UsersType;
use Symfony\Component\HttpFoundation\File\UploadedFile;

class PlayersController extends Controller
{
    
    #
    # Creates route for view 'all'
    #
    
    public function allAction()
    {  
        return $this->render('AcmeAdminBundle:Players:all.html.twig');
    }
        
    #
    # Delivers JSON-Data for angularjs
    # all users are delivered
    #    

    public function jsonAction(Request $request) {
         
        $request = $this->getRequest();
        
        $search = $request->query->get('search'); 
        
        $em = $this->getDoctrine()->getManager();
        $query = $em->createQuery( "SELECT u, ug FROM AcmeBlogBundle:Users u JOIN u.group ug WHERE CONCAT(u.firstName, CONCAT(' ', u.name), CONCAT(' ', u.username)) LIKE :search");
        $query->setParameter('search', '%' . $search . '%');
        
        $players = $query->getResult(\Doctrine\ORM\Query::HYDRATE_ARRAY);;
            
        $response = new Response();
        $response->setContent(json_encode($players));
        
        $response->headers->set('Content-Type', 'application/json');
        
        return $response;
    
    } 

    public function playerAction($id, Request $request) {
              
        $player = new Users();
        
        $em = $this->getDoctrine()->getManager();

        $player = $em->getRepository('AcmeBlogBundle:Users')->find($id);
        
        if ( !$player ) {
            throw $this->createNotFoundException(
                     'Kein User mit der Id: ' . $id );
        }
        
            $form = $this->createForm(new UsersType(), $player);    
                    
                $form->handleRequest($request);
                
                if ($form->isValid()) {
                    
                    if($form['attachment']->getData()) {
                        $dir = __DIR__ . '/../../../../web/uploads/players/';
                        $extension = $form['attachment']->getData()->getClientOriginalExtension();
                        $form['attachment']->getData()->move($dir, $player->getFotoid() . '.' . $extension);
                        $player->setMimeType('.' . $extension);
                    }
                                      
                    $em->persist($player);
                    $em->flush();
                    $this->get('session')->getFlashBag()->add('notice', 'Änderungen wurden erfolgreich gespeichert!');

                    return $this->render('AcmeAdminBundle:Players:player.html.twig', array('player' => $player, 'form' => $form->createView()));
                   
                }
        
        return $this->render('AcmeAdminBundle:Players:player.html.twig', array('player' => $player, 'form' => $form->createView()));
        
    }
    
    public function newAction(Request $request) {
        
        $player = new Users();
              
        $form = $this->createForm(new UsersType(), $player);        

        $form->handleRequest($request);
        
        if ($form->isValid()) {
                       
            $player->setPasskeyword('$13y$1212221242312');
            if($form['email']->getData() == NULL) {
                $player->setEmail('no-email@vfllohbruegge3.de');
            }
            $player->setLastVisit(new \DateTime('0000-00-00'));
            $em = $this->getDoctrine()->getManager();
            $em->persist($player);
            $em->flush();
            $this->get('session')->getFlashBag()->add('notice', 'Spieler wurde erfolgreich gespeichert!');
                    
            return $this->render('AcmeAdminBundle:Players:new.html.twig', array('form' => $form->createView()));
                   
        }
        
        return $this->render('AcmeAdminBundle:Players:new.html.twig', array('form' => $form->createView()));
        
    }
    
     public function deleteAction($id) {
        
        $player = new Users();
        
        $em = $this->getDoctrine()->getManager();

        $player = $em->getRepository('AcmeBlogBundle:Users')->find($id);
               
        $em = $this->getDoctrine()->getManager();
        $em->remove($player);
        $em->flush();
        $this->get('session')->getFlashBag()->add('notice', 'Spieler wurde erfolgreich gelöscht!');
                    
        return $this->redirectToRoute('acme_players_all');
  
    }
    
}