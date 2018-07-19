<?php

namespace AppBundle\Controller;

use AppBundle\Entity\User;
use AppBundle\Entity\CoPro;
use AppBundle\Entity\Immeuble;
use AppBundle\Entity\Syndic;
use AppBundle\Entity\Lot;
use AppBundle\Repository\LotRepository;
use AppBundle\Repository\ImmeubleRepository;
use AppBundle\Repository\PieceRepository;
use AppBundle\Repository\UserRepository;
use JMS\Serializer\SerializerInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\Session;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * User controller.
 *
 * @Route("user")
 */
class UserController extends Controller
{
    /**
     * Lists all user entities.
     *
     * @Route("/", name="user_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $users = $em->getRepository('AppBundle:User')->findAll();
        return $this->render('user/index.html.twig', array(
            'users' => $users,
        ));
    }


    /**
     * Creates a new user entity.
     *
     * @Route("/new", name="user_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $user = new User();
        $form = $this->createForm('AppBundle\Form\UserType', $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();

            return $this->redirectToRoute('user_show', array('id' => $user->getId()));
        }

        return $this->render('user/new.html.twig', array(
            'user' => $user,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a user entity.
     *
     * @Route("/consultation", name="user_consultation")
     * @Method("GET")
     */
    public function consultationAction()
    {

        $user= $this->getUser();


        return $this->render('user/consultation.html.twig', array(
            'user' => $user,

        ));


    }
    /**
     * Finds and displays a user entity.
     *
     * @Route("/consultation/find/{search}", name="user_search")
     * @Method("GET")
     */
    public function searchCoproAction($search, SerializerInterface $serializer)
    {

        $idUser= $this->getUser()->getId();
        $em = $this->getDoctrine()->getManager();
        if($search == 'all'){
            $copros = $em->getRepository('AppBundle:User')->findAllCoproByAdresse($idUser);
        }else {
            $copros = $em->getRepository('AppBundle:User')->findCoproByAdresse($idUser, $search);
        }
        $data=$serializer->serialize($copros, 'json');
        $response=new Response($data);
        $response->headers->set('Content-Type', 'application/json');
        return $response;




    }

    /**
     * Finds and displays a user entity.
     *
     * @Route("/consultation/finding/{adresse}", name="user_searchIm")
     * @Method("GET")
     */
    public function searchImmeubleAction($adresse, SerializerInterface $serializer,Session $session)
    {

        $idCopro = $session->get('idCopro');

        $em = $this->getDoctrine()->getManager();
        if($adresse == 'all'){
            $immeubles = $em->getRepository('AppBundle:Immeuble')->findImmeublesById($idCopro);
        }else {
            $immeubles = $em->getRepository('AppBundle:Immeuble')->findImmeublesByAdresseAndId($adresse, $idCopro);
        }
        $data=$serializer->serialize($immeubles, 'json');
        $response=new Response($data);
        $response->headers->set('Content-Type', 'application/json');
        return $response;




    }

    /**
     * Finds and displays a user entity.
     *
     * @Route("/consultation/immeubles", name="user_consultation_immeuble")
     * @Method("Post")
     */
    public function consultationImmeubleAction(Request $request)
    {


       $session = new Session();

        $session->set('idCopro',$_POST['id'] );
        $idCopro = $session->get('idCopro');


        return $this->render('user/immeubles.html.twig', array(
            'coPro' => $idCopro,

        ));


    }

    /**
     * Finds and displays a user entity.
     *
     * @Route("/consultation/lots", name="user_consultation_lots")
     * @Method("Post")
     */
    public function consultationLotsAction(Request $request)
    {


        $session = new Session();

        $session->set('idImmeuble',$_POST['idImmeuble'] );
        $idImmeuble = $session->get('idImmeuble');


        return $this->render('user/lots.html.twig', array(
            'idImmeuble' => $idImmeuble,

        ));


    }

    /**
     * Finds and displays a user list entity.
     *
     * @Route("/listing", name="user_listing")
     * @Method("get")
     */
    public function listingAction()
    {
        $user = $this->getUser();
        $nomSyndic='';
        $idSyndic='';
        foreach ($user->getSyndics() as $syndic)
        {
           $idSyndic= $syndic->getId();
            $nomSyndic=$syndic->getNom();
        }

        $em = $this->getDoctrine()->getManager();

        $listsCop = $em->getRepository('AppBundle:User')->listUsersFromSyndic($idSyndic);

        $associationCopro = $this->getUser()->getassociationCoPros();

        $idAssociation='';
        foreach ( $associationCopro as $asso)
        {
            $idAssociation= $asso->getId();
        }
        $em = $this->getDoctrine()->getManager();

        $listsAss = $em->getRepository('AppBundle:User')->listUsersFromAssociation($idAssociation);

        return $this->render('user/listUser.html.twig', array(

        'listsCop'=>$listsCop,
        'listsAss'=>$listsAss,
        'nomSyndic'=>$nomSyndic
        ));


    }


    /**
     * Finds and displays a user entity.
     *
     * @Route("/consultation/findlot/{adresse}", name="user_search_lots")
     * @Method("GET")
     */
    public function searchLotsAction($adresse, SerializerInterface $serializer,Session $session)
    {

        $idImmeuble = $session->get('idImmeuble');

        $em = $this->getDoctrine()->getManager();
        if($adresse == 'all'){
            $lots = $em->getRepository('AppBundle:Lot')->findLotsById($idImmeuble);
        }else {
            $lots = $em->getRepository('AppBundle:Lot')->findLotsByAdresseAndId($adresse,$idImmeuble);
        }
        $data=$serializer->serialize($lots, 'json');
        $response=new Response($data);
        $response->headers->set('Content-Type', 'application/json');
        return $response;




    }

    /**
     * Finds and displays a user entity.
     *
     * @Route("/consultation/pieces", name="user_consultation_pieces")
     * @Method("Post")
     */
    public function consultationPiecesAction(Request $request)
    {

        $session = new Session();

        $session->set('idLot',$_POST['idLot'] );
        $idLot = $session->get('idLot');


        return $this->render('user/pieces.html.twig', array(
            'idLot' => $idLot,

        ));


    }

    /**
     * Finds and displays a user entity.
     *
     * @Route("/consultation/findrooms/{adresse}", name="user_search_pieces")
     * @Method("GET")
     */
    public function searchPieceAction($adresse, SerializerInterface $serializer,Session $session)
    {

        $idImmeuble = $session->get('idLot');

        $em = $this->getDoctrine()->getManager();
        if($adresse == 'all'){
            $pieces = $em->getRepository('AppBundle:Piece')->findPiecesById($idImmeuble);
        }else {
            $pieces = $em->getRepository('AppBundle:Piece')->findLotsByAdresseAndId($adresse,$idImmeuble);
        }
        $data=$serializer->serialize($pieces, 'json');
        $response=new Response($data);
        $response->headers->set('Content-Type', 'application/json');
        return $response;




    }


    /**
     * Finds and displays a user entity.
     *
     * @Route("/{id}", name="user_show")
     * @Method("GET")
     */
    public function showAction(User $user)
    {
        $deleteForm = $this->createDeleteForm($user);

        return $this->render('user/show.html.twig', array(
            'user' => $user,
            'delete_form' => $deleteForm->createView(),
        ));
    }



    /**
     * Displays a form to edit an existing user entity.
     *
     * @Route("/{id}/edit", name="user_edit")
     * @Method({"GET", "POST", "DELETE"})
     */
    public function editAction(Request $request, User $user)
    {
        $deleteForm = $this->createDeleteForm($user);
        $editForm = $this->createForm('AppBundle\Form\UserType', $user);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('user_edit', array('id' => $user->getId()));
        }

        return $this->render('user/edit.html.twig', array(
            'user' => $user,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a user entity.
     *
     * @Route("/{id}", name="user_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, User $user)
    {
        $form = $this->createDeleteForm($user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($user);
            $em->flush();
        }

        return $this->redirectToRoute('user_index');
    }

    /**
     * Creates a form to delete a user entity.
     *
     * @param User $user The user entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(User $user)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('user_delete', array('id' => $user->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }


}
