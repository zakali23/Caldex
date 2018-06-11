<?php
// src/AppBundle/Controller/pdfController.php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Knp\Bundle\SnappyBundle\Snappy\Response\PdfResponse;

/*class pdfController extends Controller
{
    /**
     * Export to PDF
     *
     * @Route("/pdf", name="facture_pdf")
     * @Method({"GET", "POST"})
     */
   /* public function pdfAction()
    {
        $html = $this->renderView('facturePDF.html.twig');

        $filename = sprintf('test-%s.pdf', date('Y-m-d'));

        return new Response(
            $this->get('knp_snappy.pdf')->getOutputFromHtml($html),
            200,
            [
                'Content-Type'        => 'application/pdf',
                'Content-Disposition' => sprintf('attachment; filename="%s"', $filename),
            ]
        );
    }
}
   */
class pdfController extends Controller
{

    /**
     * Export to PDF
     *
     * @Route("/pdf", name="facture_pdf")
     * @Method({"GET", "POST"})
     */
    public function pdfAction()
    {
        $html = $this->renderView('facturePDF.html.twig', array(
            'some'  => $vars
        ));

        return new PdfResponse(
            $this->get('knp_snappy.pdf')->getOutputFromHtml($html),
            'file.pdf'
        );
    }
}