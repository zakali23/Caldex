<?php
/**
 * Created by PhpStorm.
 * User: coralie
 * Date: 09/06/18
 * Time: 09:13
 */

namespace AppBundle\Controller;

use AppBundle\Entity\User;
use FOS\UserBundle\Form\Type\RegistrationFormType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;


class CoproprietaireController extends Controller{


    /**
     * @return \Symfony\Component\HttpFoundation\Response
     *
     * @Route("/coproprietaire/", name="coproprietaire_page")
     */
    public function coproprietairePageAction(){
        return $this->render('coproprietaire/index.html.twig');
    }







}