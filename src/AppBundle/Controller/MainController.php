<?php
/**
 * Created by PhpStorm.
 * User: gsm
 * Date: 2018/3/13
 * Time: 20:35
 */

namespace AppBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MainController extends Controller
{
    public function homepageAction()
    {
        return $this->render('main/homepage.html.twig');
    }
}