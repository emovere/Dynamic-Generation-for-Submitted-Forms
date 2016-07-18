<?php
/**
 * Created by PhpStorm.
 * User: slk500
 * Date: 18.07.16
 * Time: 20:59
 */

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\SportMeetup;
use AppBundle\Form\Type\SportMeetupType;
// ...

class MeetupController extends Controller
{
    /**
     * @Route("/dropdown")
     */
    public function createAction(Request $request)
    {
        $meetup = new SportMeetup();
        $form = $this->createForm(SportMeetupType::class, $meetup);
        $form->handleRequest($request);
        if ($form->isValid()) {
            // ... save the meetup, redirect etc.
        }

        return $this->render(
            ':Meetup:create.html.twig',
            array('form' => $form->createView())
        );
    }

    // ...
}