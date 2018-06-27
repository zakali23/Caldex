<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Syndic;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

/**
 * Syndic controller.
 *
 * @Route("syndic")
 */
class SyndicController extends Controller
{
    /**
     * Lists all syndic entities.
     *
     * @Route("/", name="syndic_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $syndics = $em->getRepository('AppBundle:Syndic')->findAll();


        return $this->render('syndic/index.html.twig', [
            'syndics' => $syndics,
        ]);
    }

    /**
     * Creates a new syndic entity.
     *
     * @Route("/new", name="syndic_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $syndic = new Syndic();
        $form = $this->createForm('AppBundle\Form\SyndicType', $syndic);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($syndic);
            $em->flush();

            return $this->redirectToRoute('syndic_show', array('id' => $syndic->getId()));
        }

        return $this->render('syndic/new.html.twig', array(
            'syndic' => $syndic,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a syndic entity.
     *
     * @Route("/{id}", name="syndic_show")
     * @Method("GET")
     */
    public function showAction(Syndic $syndic)
    {
        $deleteForm = $this->createDeleteForm($syndic);

        $em = $this->getDoctrine()->getManager();

        $syndicId = $this->getUser()->getId();

        $syndics = $em->getRepository('AppBundle:Syndic')->find( $syndicId);


        return $this->render('syndic/show.html.twig', array(
            'syndic' => $syndic,
            'syndics' => $syndics,

            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Finds and displays a syndic entity.
     *
     * @Route("/{id}/lot", name="syndic_lot")
     * @Method("GET")
     */
    public function lotAction(Syndic $syndic)
    {
        $deleteForm = $this->createDeleteForm($syndic);

        $em = $this->getDoctrine()->getManager();

        $syndicId = $this->getUser()->getId();

        $syndics = $em->getRepository('AppBundle:Syndic')->find( $syndicId);


        return $this->render('syndic/piece_syndic.html.twig', array(
            'syndic' => $syndic,
            'syndics' => $syndics,

            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Finds and displays a syndic entity.
     *
     * @Route("/{id}/piece", name="syndic_piece")
     * @Method("GET")
     */
    public function pieceAction(Syndic $syndic)
    {
        $deleteForm = $this->createDeleteForm($syndic);

        $em = $this->getDoctrine()->getManager();

        $syndicId = $this->getUser()->getId();

        $syndics = $em->getRepository('AppBundle:Syndic')->find( $syndicId);
        dump($syndics);

        return $this->render('syndic/piece_syndic.html.twig', array(
            'syndic' => $syndic,
            'syndics' => $syndics,

            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing syndic entity.
     *
     * @Route("/{id}/edit", name="syndic_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Syndic $syndic)
    {
        $deleteForm = $this->createDeleteForm($syndic);
        $editForm = $this->createForm('AppBundle\Form\SyndicType', $syndic);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('syndic_edit', array('id' => $syndic->getId()));
        }

        return $this->render('syndic/edit.html.twig', array(
            'syndic' => $syndic,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a syndic entity.
     *
     * @Route("/{id}", name="syndic_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Syndic $syndic)
    {
        $form = $this->createDeleteForm($syndic);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($syndic);
            $em->flush();
        }

        return $this->redirectToRoute('syndic_index');
    }

    /**
     * Creates a form to delete a syndic entity.
     *
     * @param Syndic $syndic The syndic entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Syndic $syndic)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('syndic_delete', array('id' => $syndic->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
