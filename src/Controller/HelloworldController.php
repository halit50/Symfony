<?php
namespace App\Controller;

// On importe ici les classes dont on va avoir besoin

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;




//Nom de ma classe
class HelloworldController
{   
    /**
      * @Route("/hello")
      */
    public function hello(): Response
    {
    
        $hello = 'Hello world';

    
        return new Response(
            '<html><body>'.$hello.'</body></html>'
        );
    }
}
