<?php
namespace JmeSf2\GenericBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('JmeSf2GenericBundle:Default:index.html.twig');
    }
}
