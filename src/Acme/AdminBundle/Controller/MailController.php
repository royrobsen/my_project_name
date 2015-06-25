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
    $token->setCreatedDate(new \DateTime());
    
    $em2 = $this->getDoctrine()->getManager();
    $em2->persist($token);
    $em2->flush();
    $email = $form['email']->getData();
    $mailer = $this->get('mailer');
    $message = $mailer->createMessage()
        ->setSubject('Du brauchst ein neues Passwort!!')
        ->setFrom('info@vfllohbruegge3.de')
        ->setTo($email)
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
    
   public function pwforgotAction(Request $request) {

   $form = $this->createFormBuilder()
        ->add('email', 'email')
        ->add('save', 'submit', array('label' => 'Absenden'))   
        ->getForm();
      
    $form->handleRequest($request);

        if ($form->isValid()) {

            $player = new Users();  

            $em = $this->getDoctrine()->getManager();

            $player = $em->getRepository('AcmeBlogBundle:Users')->findBy(array('email' => $form['email']->getData()));
        
            $token = new Pwtoken();

            $token->setUserid($player[0]->getID());
            $token->setToken(md5(uniqid()));
            $token->setUsed(0);
            $token->setCreatedDate(new \DateTime());

            $em2 = $this->getDoctrine()->getManager();
            $em2->persist($token);
            $em2->flush();
            $email = $form['email']->getData();
            $mailer = $this->get('mailer');
            $message = $mailer->createMessage()
                ->setSubject('Du brauchst ein neues Passwort!!')
                ->setFrom('info@vfllohbruegge3.de')
                ->setTo($email)
                ->setBody(
                    $this->renderView(
                        // app/Resources/views/Emails/registration.html.twig
                        'AcmeAdminBundle:Emails:passwort-reset.html.twig',
                        array('player' => $player['0'], 'token' => $token)
                    ),
                    'text/html'
                )
                ->addPart(
                    $this->renderView(
                        'AcmeAdminBundle:Emails:passwort-reset.txt.twig',
                        array('player' => $player['0'], 'token' => $token)
                    ),
                    'text/plain'
                )
            ;
            $mailer->send($message);
            
            $this->get('session')->getFlashBag()->add('success', 'Wir haben eine E-Mail an deine E-Mailadresse geschickt. Dort findest du einen Link mit dem du dein Passwort ändern kannst.');

        }     

    return $this->render('AcmeBlogBundle:Security:pwforgotten.html.twig', array('form' => $form->createView()));
       
   } 
   
   public function pwerstellenAction(Request $request, $token) {
       
        $form = $this->createFormBuilder()
                 ->add('password', 'password')
                 ->add('password2', 'password')
                 ->add('save', 'submit', array('label' => 'Speichern'))   
                 ->getForm();
        
       
        $em2 = $this->getDoctrine()->getManager();
        $query = $em2->createQuery(
            'SELECT pw
            FROM AcmeBlogBundle:Pwtoken pw
            WHERE pw.token = :token'
        )->setParameter('token', $token);

        $token2 = $query->getResult();
        $token1 = array_pop($token2);

        if($token1->getUsed() === false) {
               
            $user = $token1->getUserid();

                $player = new Users();  

                $em2 = $this->getDoctrine()->getManager();

                $player = $em2->getRepository('AcmeBlogBundle:Users')->findBy(array('id' => $user));

                 $form->handleRequest($request);

                     if ($form->isValid()) {
                        
                         if ($form['password']->getData() == $form['password2']->getData()) {
                            $userid = $token1->getUserid();

                            $em = $this->getDoctrine()->getManager();
                            $query = $em->createQuery(
                                'SELECT u
                                FROM AcmeBlogBundle:Users u
                                WHERE u.id = :id'
                            )->setParameter('id', $userid);

                            $user2 = $query->getResult();
                            $user = array_pop($user2);

                            $encoderFactory = $this->get('security.encoder_factory');
                            $encoder = $encoderFactory->getEncoder($user);

                            $salt = '$2a$12$uWepESKverBsrLAuOPY'; // this should be different for every user
                            $password = $encoder->encodePassword($form['password']->getData(), $salt);

                            $user->setPasskeyword($password);

                            $token1->setUsed(1);

                            $em->persist($user);
                            $em->flush();

                            $em2->persist($token1);
                            $em2->flush();

                            $this->get('session')->getFlashBag()->add('success', 'Das Passwort wurde erfolgreich geändert. Du kannst dich nun mit deinem Benutzernamen und dem neuen Passwort anmelden.');
                        }
                        else {

                            $this->get('session')->getFlashBag()->add('warning', 'Die eingegebenen Passwörter stimmen nicht überein.');

                        }
                     }     
        } else {
            
            $this->get('session')->getFlashBag()->add('warning', 'Leider ist der angegebene Link ungültig. Bitte fordere einen neuen Link an oder kontaktiere einen Administrator.');

        }
        
            return $this->render('AcmeBlogBundle:Security:pwnew.html.twig', array('form' => $form->createView()));

        
   }
   
}