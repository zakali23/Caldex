<?php

namespace AppBundle\Controller;

use AppBundle\Entity\info;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

/**
 * Info controller.
 *
 * @Route("info")
 */
class infoController extends Controller
{
    /**
     * Lists all info entities.
     *
     * @Route("/", name="info_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $infos = $em->getRepository('AppBundle:info')->findAll();

        return $this->render('info/index.html.twig', array(
            'infos' => $infos,
        ));
    }

    /**
     * Finds and displays a info entity.
     *
     * @Route("/{id}", name="info_show")
     * @Method("GET")
     */
    public function showAction(info $info)
    {

        return $this->render('info/show.html.twig', array(
            'info' => $info,
        ));
    }
}
