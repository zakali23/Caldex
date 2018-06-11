<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;


/**
 * Accueil controller.
 *
 * @Route("/")
 */
class AccueilController extends Controller
{

    /**
     * @Route("/", name="homepage")
     * @Method("GET")
     */
    public function indexAction(Request $request)
    {
        $activeAccueil = true;

        // replace this example code with whatever you need
        return $this->render('accueil/index.html.twig', ['activeAccueil' => $activeAccueil,
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }
}