<?php
/**
 * Created by PhpStorm.
 * User: coralie
 * Date: 09/06/18
 * Time: 09:13
 */

namespace AppBundle\Controller;

use AppBundle\Entity\Syndic;
use FOS\UserBundle\Form\Type\RegistrationFormType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;


 /** Accueil controller.
 *
 * @Route("syndicat")
  * */

class SyndicatController extends Controller{


    /**
     * @return \Symfony\Component\HttpFoundation\Response
     *
     * @Route("/", name="syndicat_page")
     */
    public function syndicatPageAction(){
        return $this->render('syndicat/index.html.twig');
    }


    /**
     * Finds and displays a user entity.
     *
     * @Route("/{id}", name="syndicat_show")
     * @Method("GET")
     */
    public function showAction(Syndic $syndic)
    {
        $deleteForm = $this->createDeleteForm($syndicat);

        return $this->render('syndicat/show.html.twig', array(
            'syndic' => $syndicat,
            'delete_form' => $deleteForm->createView(),
        ));
    }







}