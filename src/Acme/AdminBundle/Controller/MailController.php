<?php

namespace Acme\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Acme\BlogBundle\Entity\Users;
use Acme\BlogBundle\Entity\Pwtoken;

class MailController extends Controller
{
    
   public function passwortresetAction($id) {
    
    $player = new Users();  

    $em = $this->getDoctrine()->getManager();

    $player = $em->getRepository('AcmeBlogBundle:Users')->find($id);
        
    $token = new Pwtoken();
    
    $token->setUserid($id);
    $token->setToken(md5(uniqid()));
    $token->setUsed(0);
    
    $em2 = $this->getDoctrine()->getManager();
    $em2->persist($token);
    $em2->flush();
    
    $mailer = $this->get('mailer');
    $message = $mailer->createMessage()
        ->setSubject('Du brauchst ein neues Passwort!!')
        ->setFrom('no-reply@team-equipment.de')
        ->setTo('rbrannath@yahoo.de')
        ->setBody(
            $this->renderView(
                // app/Resources/views/Emails/registration.html.twig
                'AcmeAdminBundle:Emails:passwort-reset.html.twig',
                array('player' => $player, 'token' => $token)
            ),
            'text/html'
        )
        ->addPart(
            $this->renderView(
                'AcmeAdminBundle:Emails:passwort-reset.txt.twig',
                array('player' => $player, 'token' => $token)
            ),
            'text/plain'
        )
    ;
    $mailer->send($message);

    return $this->render('AcmeAdminBundle:Players:all.html.twig');
       
   } 
   

    
}