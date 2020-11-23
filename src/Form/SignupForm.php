<?php

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SignupForm extends AbstractType
{
  public function buildForm(FormBuilderInterface $builder, array $options)
  {    
    $builder->add("nombre", TextType::class, ['attr' => ['placeholder' => 'Nombre'], 'required'=>true]);
    $builder->add("apellido", TextType::class, ['attr' => ['placeholder' => 'Apellido'], 'required'=>true]);
    $builder->add("email", EmailType::class, ['attr' => ['placeholder' => 'Email'], 'required'=>true]);
    $builder->add("password", PasswordType::class, ['attr' => ['placeholder' => 'Contraseña'], 'required'=>true]);
    $builder->add('roles', ChoiceType::class, ['choices'=>[
      'Select a role'=>"",
      'User'=>'ROLE_USER',
      'Admin'=>'ROLE_ADMIN'
     ], 'required'=>false]);
  }

}