<?php

namespace Acme\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Acme\UserBundle\Form\ContactType;

// these import the "@Route" and "@Template" annotations
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

/**
 * Task controller.
 *
 * @Route("/task")
 */
class SolvingController extends Controller
{
    public function indexAction()
    {
        $id = $this->get('security.context')->getToken()->getUser();
        $user = $this->getDoctrine()->getRepository('UserBundle:Task')->findBy(array('user_id' => $id->getId()));
        foreach ($user as $value)
        {
           echo 'description is: ' . $value->getDescription();
           echo '<br>status is: ' . $value->getStatus();
           echo '<a href="/app_dev.php/task/' . $value->getId() . '/edit">edit</a>';
        }

        return $this->render("UserBundle:Solving:index.html.twig");
    }
}