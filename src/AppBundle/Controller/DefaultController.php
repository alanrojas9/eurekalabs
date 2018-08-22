<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function homeAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('frontal/index.html.twig');
    }
    /**
     * @Route("/empresas/{nom_empr}", name="empresas")
     */
    public function empresasAction(Request $request, $nom_empr = "todas")
    {
        
        // replace this example code with whatever you need
        return $this->render('frontal/empresas.html.twig', array('nom_empr' => $nom_empr));
    }
    /**
     * @Route("/cotizaciones", name="cotizaciones")
     */
    public function cotizacionAction(Request $request)
    {
        $response = new Response();
        $response->setContent(json_encode(array('json')));
        $response->headers->set('MSFT', 'TIME_SERIES_DAILY');

        return $this->render('frontal/cotizacion.html.twig', array("Response"=>$response));
    }
    /**
     * @Route("/prueba", name="prueba")
     */
    public function pruebaAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('frontal/prueba2.html.twig');
    }
    
}
