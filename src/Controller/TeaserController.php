<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class TeaserController extends AbstractController
{
    /**
     * @Route("/teaser", name="teaser")
     */
    public function index()
    {
        return $this->render('teaser/index.html.twig', [
            'controller_name' => 'TeaserController',
        ]);
    }
}
