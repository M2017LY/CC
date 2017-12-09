<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PageController extends Controller
{
    public function indexAction()
    {
        return $this->render(':Page:index.html.twig', array(
            // ...
        ));
    }

    public function aboutAction()
    {
        return $this->render(':Page:about.html.twig', array(
            // ...
        ));
    }

}
