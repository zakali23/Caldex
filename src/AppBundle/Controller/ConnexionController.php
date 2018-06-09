<?php
/**
 * Created by PhpStorm.
 * User: coralie
 * Date: 09/06/18
 * Time: 09:13
 */

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;


class ConnexionController extends Controller{

    /**
     * @Route("/", name="homepage")
     */

    public function indexAction(Request $request){

        return $this->render('accueil/index.html.twig');
    }

    /**
     * @return \Symfony\Component\HttpFoundation\Response
     *
     * @Route("/admin/", name="admin_page")
     */
    public function adminPageAction(){
        return $this->render('admin/index.html.twig');
    }


    /**
     * @return \Symfony\Component\HttpFoundation\Response
     *
     * @Route("/locataire/", name="locataire_page")
     */
    public function locatairePageAction(){
        return $this->render('locataire/index.html.twig');
    }



    /**
     * @return \Symfony\Component\HttpFoundation\Response
     *
     * @Route("/user_info", name="user_info")
     *
     * @Security("is_granted('IS_AUTHENTICATED_FULLY')")
     */

    public function showUserAction()
    {

        if ($this->get('security.authorization_checker')->isGranted('ROLE_ADMIN')) {
            return $this->render('admin/index.html.twig');
        }

        if ($this->get('security.authorization_checker')->isGranted('ROLE_LOCATAIRE')) {
            return $this->render('locataire/index.html.twig');
        }

    }


    /**
     * @return \Symfony\Component\HttpFoundation\Response
     *
     * @Route("/profile", name="profile")
     *
     * @Security("is_granted('IS_AUTHENTICATED_FULLY')")
     */

    public function determineUser()
    {
        return $this->render('user/user.html.twig');

    }



}