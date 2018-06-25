<?php
/**
 * Created by PhpStorm.
 * User: coralie
 * Date: 09/06/18
 * Time: 09:13
 */

namespace AppBundle\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Admin controller.
 *
 * @Route("admin")
 */
class AdminController extends Controller{

    /*
     * @Route("/", name="admin_page")
     */
    public function adminPageAction(){
        return $this->render('admin/index.html.twig');
    }

}