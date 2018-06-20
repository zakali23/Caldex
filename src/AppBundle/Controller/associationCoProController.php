<?php

namespace AppBundle\Controller;

use AppBundle\Entity\associationCoPro;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

/**
 * Associationcopro controller.
 *
 * @Route("associationcopro")
 */
class associationCoProController extends Controller
{
    /**
     * Lists all associationCoPro entities.
     *
     * @Route("/", name="associationcopro_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $associationCoPros = $em->getRepository('AppBundle:associationCoPro')->findAll();

        return $this->render('associationcopro/index.html.twig', array(
            'associationCoPros' => $associationCoPros,
        ));
    }

    /**
     * Finds and displays a associationCoPro entity.
     *
     * @Route("/{id}", name="associationcopro_show")
     * @Method("GET")
     */
    public function showAction(associationCoPro $associationCoPro)
    {

        return $this->render('associationcopro/show.html.twig', array(
            'associationCoPro' => $associationCoPro,
        ));
    }
}
