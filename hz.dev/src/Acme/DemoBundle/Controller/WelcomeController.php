<?php

namespace Acme\DemoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class WelcomeController extends Controller
{
    public function indexAction()
    {
        /*
         * The action's view can be rendered using render() method
         * or @Template annotation as demonstrated in DemoController.
         *
         */
        //$user = $this->container->get('fos_user.user_manager')->findUserByUsername('john');
        return $this->render('AcmeDemoBundle:Welcome:index.html.twig');
    }
}
