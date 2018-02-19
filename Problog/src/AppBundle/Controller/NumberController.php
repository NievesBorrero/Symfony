<?php
// src/AppBundle/Controller/LuckyController.php

// ...
namespace AppBundle\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
class NumberController extends Controller
{
    /**
     * @Route("/lucky/number")
     */
    public function numberAction(){
        $number = mt_rand(0, 100);

        return $this->render('lucky/number.html.twig', array(
            'number' => $number,
        ));
    }
}
?>