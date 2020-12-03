<?php
// Définition du namespace dans lequel on va définir notre classe MonPremierController
//MonPremierController sera accessible en suivant ce chemin: namespace App\Controller; 

namespace App\Controller;

// On importe ici les classes dont on va avoir besoin
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

//Nom de ma classe
class MonpremierController extends AbstractController
{   // définition de notre méthode qui va retourner un objet de classe Response
    // cette méthode là sera un controller et sera appelé comme le précise le fichier routes.yaml
    // lorsqu'on voudra accéder à la route /lucky/number
    //test
    
    /**
      * @Route("/lucky/number")
      */
    
    
    // public function number(): Response
    // {
    
    //     $number = random_int(0, 100);
    //     $somme = $number + 10;

    // l'objet' Response va dans cet exemple nous servir de vue à rendre
        // return new Response(
        //     '<html><body>Lucky number: '.$number.' '.$somme.'</body></html>'
        // );

        // La méthode render vient de la classe AbstractController
        // Elle va chercher les templates à la racine du dossier /templates
            // return $this->render('lucky/number.html.twig', [
            //     'number' => $number,
            //     'somme' => $somme
            // ]);

            
    //}

    /**
      * @Route("/random_number")
      */

    public function number2(): Response{
    
        $number2 = random_int(0,35);

            return $this->render('random_number.html.twig', [
                'number2' => $number2
            ]);

    }
}