<?php

namespace AppBundle\Service;

use Symfony\Component\HttpFoundation\Response;


class Pdf
{


    public function pdfAction()
    {
        $snappy = $this->get('knp_snappy.pdf');
        $snappy->setOption("encoding", "UTF-8");

        $html = $this->renderView('default/index.html.twig', array(
            //..Send some data to your view if you need to //
        ));

        $filename = 'myFirstSnappyPDF';

        return new Response(
            $snappy->getOutputFromHtml($html),
            200,
            array(
                'Content-Type'          => 'application/pdf',
                'Content-Disposition'   => 'inline; filename="'.$filename.'.pdf"'
            )
        );

    }



    public function showAction()
    {
        $html = $this->renderView('default/index.html.twig');


        return new Response(
            $this->get('knp_snappy.pdf')->getOutputFromHtml($html),
            200,
            array(
                'Content-Type'          => 'application/pdf',
                'Content-Disposition'   => 'attachment; filename="Facture_'.date('m/Y').'.pdf"'
            )
        );

    }
}