<?php

    // ...
    namespace AppBundle\Controller;

    use Symfony\Component\Routing\Annotation\Route;
    use Symfony\Bundle\FrameworkBundle\Controller\Controller;
    class EdadController extends Controller{
        /**
         * @Route("/edad/{year}")
         */
        public function edadAction($year){
            $edad = 2018-$year;
            return $this->render('edad.html.twig', array(
                'edad' => $edad,
            ));
         }
        /**
         * @Route("/edad")
         */
        public function noEdadAction(){
            $edad = "Introduce un año en la ruta";
            return $this->render('edad.html.twig', array(
                'edad' => $edad,
            ));
       
        }
    }
?>