<?php

namespace Acme\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Acme\BlogBundle\Entity;

class AdminController extends Controller
{
    public function adminAction()
    {
        return $this->render('AcmeAdminBundle:Admin:admin.html.twig');
    }
}
