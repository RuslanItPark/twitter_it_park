<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends Controller
{
    /**
     * @Route("/main", name="main")
     */
    public function index()
    {
        $a = 2+2;
        return $this->render('main/index.html.twig', [
            'controller_name' => 'MainController',
            'a'=>$a,
        ]);
    }
}
