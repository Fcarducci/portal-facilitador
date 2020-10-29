<?php

namespace App\Controller\Facilitador;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class FacilitadorController extends AbstractController
{

  /**
   * @Route("/hola", name = "homepage")
   */

   public function home()
   {
    return new Response("<h1>Tibeia</h1>");
   }
}