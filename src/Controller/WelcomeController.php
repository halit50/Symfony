<?php
// Définition du namespace dans lequel on va définir notre classe MonPremierController
//MonPremierController sera accessible en suivant ce chemin: namespace App\Controller; 

namespace App\Controller;

// On importe ici les classes dont on va avoir besoin

use Symfony\Component\HttpFoundation\Response;


//Nom de ma classe
class WelcomeController
{   
    public function welcome(): Response
    {
    
        $welcome = 'welcome';

    
        return new Response(
            '<html><body>'.$welcome.'</body></html>'
        );
    }
}
