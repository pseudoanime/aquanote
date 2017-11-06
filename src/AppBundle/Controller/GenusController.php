<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class GenusController extends Controller
{
    /**
     * @Route("/genus/{a}")
     */
    public function indexAction(Request $request, $a)
    {
        $templating = $this->container->get('templating');

        $html = $templating->render('genus/show.html.twig', [
            'name' => $a,
        ]);

        return new Response($html);
    }
}
