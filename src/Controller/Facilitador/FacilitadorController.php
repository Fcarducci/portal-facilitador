<?php

namespace App\Controller\Facilitador;

use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use LoginForm;
use SignupForm;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class FacilitadorController extends AbstractController
{

  //Ruta de la pagina de inicio con su controlador:

  /**
   * @Route("/", name = "homepage")
   */

   public function home()
   {
    return $this->render("portal-facilitador/home.html.twig", []);
   }


   //Ruta de la pagina de registro con su controlador:

   /**
    * @Route("/signup", name= "signup")
    * @IsGranted("ROLE_ADMIN")
    */

    public function signup(EntityManagerInterface $em, Request $request, UserPasswordEncoderInterface $passwordEncode)
    {
      $form = $this->createForm(SignupForm::class);
      $form->handleRequest($request);

      if($form->isSubmitted() && $form->isValid()){
        try{

          //Cogemos los datos del Formulario
          $user = $form -> getData();
          
          //Instanciamos el objeto Usuario:
          $usuarioBBDD= new User();
          
          // Guardamos valores en la BBDD
          $usuarioBBDD->setNombre($user['nombre']);
          $usuarioBBDD->setApellido($user['apellido']);
          $usuarioBBDD->setEmail($user['email']);
          $encryptedPassword= $passwordEncode->encodePassword($usuarioBBDD, $user['password']);
          $usuarioBBDD->setPassword($encryptedPassword);
          $roles = [$user['roles']];
          $usuarioBBDD->setRoles($roles);
          $em->persist($usuarioBBDD);
          $em->flush();

          return $this->redirectToRoute("homepage");
        }catch(\Exception $th){
          $this -> addFlash('error', 'Existing email, try another');
        }
      }
      
      return $this->render("portal-facilitador/signup.html.twig", ['signupForm' => $form->createView()]);
    }

    /**
     * @Route("/oportunidades", name="oportunidades")
     */

     function opportunity()
     {
      return $this->render("portal-facilitador/oportunidades.html.twig");
     }

    /**
     * @Route("/anuncios", name="anuncios")
     */

    function tipsAndAnnouncement()
    {
     return $this->render("portal-facilitador/tips-anuncios.html.twig");
    }
}