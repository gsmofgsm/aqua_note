<?php

namespace AppBundle\Controller;


use AppBundle\Form\UserRegistrationForm;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class UserController extends Controller
{
    /**
     * @Route("/register", name="user_register")
     */
    public function registerAction()
    {
        $form = $this->createForm(UserRegistrationForm::class);

        return $this->render('user/register.html.twig', [
            'form' => $form->createView()
        ]);
    }
}