<?php

namespace Acme\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Finder\Finder;

use Symfony\Component\HttpFoundation\File\UploadedFile;

class MediaController extends Controller
{
    
    #
    # Creates route for view 'all'
    #
    
    public function allAction()
    {  
        
        $finder = new Finder();
        $finder->directories()->in(__DIR__ . '/../../../../web/uploads'); 

        foreach ($finder as $dir) {
            $folders[] = $dir->getRelativePathname();
        }
 
        
        return $this->render('AcmeAdminBundle:Media:all.html.twig', array('folders' => $folders));

    }
    
    public function folderAction($path)
    {  
        
        $finder = new Finder();
        $finder->files()->in(__DIR__ . '/../../../../web/uploads/'. $path); 

        foreach ($finder as $dir) {
            $folders[] = '/uploads/'. $path . "/" . $dir->getRelativePathname();
        }

        
        return $this->render('AcmeAdminBundle:Media:path.html.twig', array('folders' => $folders, 'path' => $path));

    }   
    
    public function jsonAction($path)
    {  
      
        $finder = new Finder();
        $finder->files()->in(__DIR__ . '/../../../../web/uploads/'. $path); 

        foreach ($finder as $dir) {
            $folders[] = $dir->getRelativePathname();
        }
        
        $response = new Response();
        $response->setContent(json_encode($folders));

        $response->headers->set('Content-Type', 'application/json');

        return $response;
        
    }
    
    public function fileAction(Request $request, $path, $filename)
    {  
        
        $form = $this->createFormBuilder()
            ->add('attachment', 'file', array('label' => false, 'required' => false))
            ->add('save', 'submit', array('label' => 'Speichern', 'attr' => array('class' => 'btn btn-primary')))
            ->getForm();
        
        $form->handleRequest($request);
        
        if ($form->isValid()) {
                    
            if($form['attachment']->getData()) {
                $dir = '/var/www/vhosts/vfl1.teambonus.de/my_project_name/web/uploads/'.$path.'/';
                $form['attachment']->getData()->move($dir, $filename);
            }
        }
        
        return $this->render('AcmeAdminBundle:Media:medium.html.twig', array('file' => $filename, 'path' => $path, 'form' => $form->createView()));
        
    }   
    
    public function newAction(Request $request)
    {  
        
        $form = $this->createFormBuilder()
            ->add('attachment', 'file', array('label' => false, 'required' => false))
            ->add('path', 'text', array('label' => false, 'required' => false))  
            ->add('save', 'submit', array('label' => 'Speichern', 'attr' => array('class' => 'btn btn-primary')))
            ->getForm();
        
        $form->handleRequest($request);
        
        if ($form->isValid()) {
                    
            if($form['attachment']->getData()) {
                $dir = '/var/www/vhosts/vfl1.teambonus.de/my_project_name/web/uploads/'.$form['path']->getData().'/';
                $extension = $form['attachment']->getData()->getClientOriginalExtension();
                $form['attachment']->getData()->move($dir, rand(10000,9999999) . "." . $extension);
            }
        }
        
        return $this->render('AcmeAdminBundle:Media:new.html.twig', array('form' => $form->createView()));
        
    }   
    
}