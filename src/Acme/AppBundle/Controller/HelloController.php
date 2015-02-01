<?php

    namespace AppBundle\Controller;
    
    use Symfony\Component\HttpFoundation\Response;
    use Sensio\Bundle\FrameworkExtraBundle\Configuaration\Route;
    
    class HelloController
    {
        
        public function indexAction($name)
        {
            return new Response('<html><body>Hallo, du bist' . $name . '</body></html>');
        }  
              
    }



?>