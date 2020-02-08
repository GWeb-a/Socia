<?php
/**
 * Created by PhpStorm.
 * User: Gianni GIUDICE
 * Date: 05/02/2020
 * Time: 23:50
 */

namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class Index
 * @package App\Controller
 */
class Index extends AbstractController {

    /**
     * @Route("/", name ="index")
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function index() {
        return $this->render('index.html.twig', []);
    }
}