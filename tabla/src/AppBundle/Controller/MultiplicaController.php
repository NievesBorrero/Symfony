<?php

    // ...
    namespace AppBundle\Controller;

    use Symfony\Component\Routing\Annotation\Route;
    use Symfony\Bundle\FrameworkBundle\Controller\Controller;
    class MultiplicaController extends Controller{
        /**
         * @Route("/tabla/{num}")
         */
        public function tablaAction($num){
            $tabla = "";
            for ($i=0; $i <= 10; $i++) {                
                $tabla = $tabla . $num . " x " . $i . "=" . ($num * $i) . "\n";
            }
            return $this->render('tabla.html.twig', array(
                'tabla' => $tabla,
                'num' => $num
            ));
         }
        /**
         * @Route("/tabla")
         */
        public function sinNumAction(){
            $tabla = "Introduce un número en la ruta";
            return $this->render('tabla.html.twig', array(
                'tabla' => $tabla,
            ));
       
        }
    }
?>