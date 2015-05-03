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
        return $this->render('AcmeAdminBundle:Admin:admin.html.twig');
    }
    
}


