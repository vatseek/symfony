<?php

namespace Acme\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Acme\UserBundle\Form\ContactType;

// these import the "@Route" and "@Template" annotations
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class StartController extends Controller
{
    public function indexAction()
    {
        return $this->render("UserBundle:Start:index.html.twig");
    }

    public function dashboardAction()
    {
        return $this->render("UserBundle:Start:dashboard.html.twig");
    }
}