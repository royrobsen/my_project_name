<?php

namespace Acme\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class AdminController extends Controller
{
   
    #
    # Creates route for view 'admin' ***Dashboard***
    #
    
    public function adminAction()
    {
        
        $articles = $this->getDoctrine()
                ->getRepository('AcmeBlogBundle:Articles');
        
        $queryArticles = $articles->createQueryBuilder('a')
                ->orderBy('a.createdDate', 'DESC')
                ->setMaxResults(5)
                ->getQuery();
        
        $articles = $queryArticles->getResult();

        return $this->render('AcmeAdminBundle:Admin:admin.html.twig',  array('articles' => $articles));
    }
    
}


