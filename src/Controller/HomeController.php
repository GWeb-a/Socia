<?php
/**
 * Created by PhpStorm.
 * User: Gianni GIUDICE
 * Date: 10/02/2020
 * Time: 08:25
 */

namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController {
    /**
     * @Route("/user", name="app_home")
     */
    public function home() {
        return $this->render('user/home.html.twig', [

        ]);
    }
}