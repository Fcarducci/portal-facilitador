<?php

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\FormBuilderInterface;

class SigninForm extends AbstractType
{
  public function buildForm(FormBuilderInterface $builder, array $options)
  {
    $builder->add('email', EmailType::class, ['attr' => ['placeholder' => 'Email'], 'required'=> true]);
    $builder->add("password", PasswordType::class, ['attr' => ['placerholder' => 'Password'], 'required' => true]);
  }
}