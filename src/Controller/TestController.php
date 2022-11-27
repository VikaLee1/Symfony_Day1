<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TestController extends AbstractController
{
    #[Route('/test', name: 'app_test')]
    public function index(): Response
    {
        return $this->render('test/index.html.twig', [
            'controller_name' => 'Viktoria',
        ]);
    }

    #[Route('/firstPage', name: 'first_page')]
    public function first_page(): Response
    {
        return $this->render('test/first_page.html.twig');
    }


    #[Route('/secondPage/{max}', name: 'url_random_number')]
    public function number($max)
    {
        $number=random_int(0,$max);
        return $this->render('test/second_page.html.twig',['randomNumber'=>$number]);
    }

    #[Route('/thirdPage', name: 'random_number')]
    public function RandomNumber()
    {
        $number=random_int(0,100);
        return $this->render('test/third_page.html.twig',['randomNumber'=>$number]);
    }

    // using variables
    #[Route('/test-var', name: 'var')]
   public function testVar()
   {
       $arr = array("name"=>"molli", "age"=>3); // here we create a simple array have keys and values
       return $this->render('test/test_var.html.twig',array("varName"=>$arr)); // this is the way how to send a variable from php (variable you created in the controller) to the twig file
   }

}
