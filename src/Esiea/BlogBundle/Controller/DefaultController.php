<?php

namespace Esiea\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('EsieaBlogBundle:Default:index.html.twig');
    }



}
