<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Compteur;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Compteur controller.
 *
 * @Route("compteur")
 */
class CompteurController extends Controller
{
    /**
     * Lists all compteur entities.
     *
     * @Route("/", name="compteur_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $compteurs = $em->getRepository('AppBundle:Compteur')->findAll();

        return $this->render('compteur/index.html.twig', array(
            'compteurs' => $compteurs,
        ));
    }

    /**
     * Creates a new compteur entity.
     *
     * @Route("/new", name="compteur_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $compteur = new Compteur();
        $form = $this->createForm('AppBundle\Form\CompteurType', $compteur);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($compteur);
            $em->flush();

            return $this->redirectToRoute('compteur_show', array('id' => $compteur->getId()));
        }

        return $this->render('compteur/new.html.twig', array(
            'compteur' => $compteur,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a compteur entity.
     *
     * @Route("/{id}", name="compteur_show")
     * @Method("GET")
     */
    public function showAction(Compteur $compteur)
    {
        $deleteForm = $this->createDeleteForm($compteur);

        return $this->render('compteur/show.html.twig', array(
            'compteur' => $compteur,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing compteur entity.
     *
     * @Route("/{id}/edit", name="compteur_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Compteur $compteur)
    {
        $deleteForm = $this->createDeleteForm($compteur);
        $editForm = $this->createForm('AppBundle\Form\CompteurType', $compteur);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('compteur_edit', array('id' => $compteur->getId()));
        }

        return $this->render('compteur/edit.html.twig', array(
            'compteur' => $compteur,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a compteur entity.
     *
     * @Route("/{id}", name="compteur_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Compteur $compteur)
    {
        $form = $this->createDeleteForm($compteur);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($compteur);
            $em->flush();
        }

        return $this->redirectToRoute('compteur_index');
    }

    /**
     * Creates a form to delete a compteur entity.
     *
     * @param Compteur $compteur The compteur entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Compteur $compteur)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('compteur_delete', array('id' => $compteur->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
