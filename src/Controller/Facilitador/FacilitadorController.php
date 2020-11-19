<?php

namespace App\Controller\Facilitador;

use LoginForm;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class FacilitadorController extends AbstractController
{

  /**
   * @Route("/", name = "homepage")
   */

   public function home()
   {
    return $this->render("portal-facilitador/home.html.twig", []);
   }

   /**
    * @Route("/login", name = "login")
    */

    public function login()
    {
      $form = $this->createForm(LoginForm::class);

      return $this->render("portal-facilitador/login.html.twig", ['loginForm' => $form->createView()]);
    }
}