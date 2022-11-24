<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


#[Route('/static')]
class StaticPagesController extends AbstractController

{
    #[Route('/page1', name: 'static_pages')]
    public function index(): Response
    {
        return $this->render('static_pages/index.html.twig', [
            'controller_name' => 'StaticPagesController',
        ]);
    }

    #[Route('/page2', name: 'static_page2')]
    public function static_page2 (): Response
    {
        $name="Batman";
        return $this->render('static_pages/static_page2.html.twig', [
            "name"=>$name
        ]);
    }
}
