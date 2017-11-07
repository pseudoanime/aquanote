<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class GenusController extends Controller
{
    /**
     * @Route("/genus/{a}")
     */
    public function indexAction(Request $request, $a)
    {
        $notes = ['123', '456', '789'];

        return $this->render('genus/show.html.twig', [
            'name'  => $a,
            'notes' => $notes,
        ]);
    }
}
