<?php

namespace Acme\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    public function indexAction()
    {
        
        $events = $this->getDoctrine()
                ->getRepository('AcmeBlogBundle:Events');
        
        if ( !$events ) {
             throw $this->createNotFoundException(
                     'Keine Termine gefunden!');
         }
        
        $queryEvents = $events->createQueryBuilder('e')
                ->where('e.next >= :nextDate')
                ->setParameter('nextDate', date('Y-m-d'))
                ->orderBy('e.next', 'ASC')
                ->setMaxResults(6)
                ->getQuery();
        
        $events = $queryEvents->getResult();

        return $this->render('AcmeBlogBundle:Default:index.html.twig', array('events' => $events));
    }
    
     public function showAction($id)
     {
         $user = $this->getDoctrine()
            ->getRepository('AcmeBlogBundle:Users')
            ->find($id);
            
        if ( !$user ) {
            throw $this->createNotFoundException(
                'Kein Benutzer mit der ID: ' . $id );
        }
        
        return new Response('Ich habe den Benutzer "' . $user->getFirstName() . ' ' . $user->getName() . '" gefunden!');
        
     }
     
     public function articleAction($alias)
     {
        $article = $this->getDoctrine()
                ->getRepository('AcmeBlogBundle:Articles');
         
        if ( !$article ) {
            throw $this->createNotFoundException(
                     'Kein Beitrag mit dem Alias: ' . $alias );
        }
         
        $queryArticle = $article->createQueryBuilder('a')
                ->where('a.alias = :alias')
                ->setParameter('alias', $alias)
                ->setMaxResults(1)
                ->getQuery();
        
        $article = $queryArticle->getResult();

        return $this->render('AcmeBlogBundle:Default:article.html.twig', array('article' => $article)); 
         
     }
     
     public function articlesAction() {
         
        $articles = $this->getDoctrine()
            ->getRepository('AcmeBlogBundle:Articles');
        
        if ( !$articles ) {
             throw $this->createNotFoundException(
                     'Keine Beiträge gefunden!');
         }
         
       $queryArticles = $articles->createQueryBuilder('a')
                ->where('a.status = :status')
                ->setParameter('status', 0)
                ->orderBy('a.createdDate', 'DESC')
                ->getQuery()
                ->getResult(\Doctrine\ORM\Query::HYDRATE_ARRAY);;
        
        $articles = array_values($queryArticles);   
        
        $response = new Response();
        $response->setContent(json_encode($articles));
        
        $response->headers->set('Content-Type', 'application/json');
        
        return $response;
    
     }

    public function newsAction() {
         
        return $this->render('AcmeBlogBundle:Default:news.html.twig');
    
     }
     
}
