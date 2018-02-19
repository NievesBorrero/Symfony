<?php
    // src/AppBundle/Controller/SaludoController.php

    // ...
    namespace AppBundle\Controller;

    use Symfony\Component\Routing\Annotation\Route;
    use Symfony\Bundle\FrameworkBundle\Controller\Controller;
    class SaludoController extends Controller{
        /**
         * @Route("/saludo/{name}")
         */
        public function saludoAction($name){
            return $this->render('saludo.html.twig', array(
                'name' => $name,
            ));
        }

        /**
         * @Route("/saludo")
         */
        public function sinParamAction(){
            $name= "mundo";
            return $this->render('saludo.html.twig', array(
                'name' => $name,
            ));
        }
    }
?>