<?php

namespace ElislamBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Session\Flash\FlashBag;
use ElislamBundle\Entity\Contact;

class ContactController extends Controller
{
    /**
     * @Route("/contact")
     */
    public function indexAction()
    {
        return $this->render('@Elislam/contact/index.html.twig');
    }
    public function createAction(Request $request, Contact $contact)
    {
        $contact = new Contact();

        # Add form fields
        $form = $this->createFormBuilder($contact)
            ->add('naam', TextType::class, array('label' => 'naam', 'attr' => array('class' => 'form-control', 'style' => 'margin-bottom:15px')))
            ->add('email', TextType::class, array('label' => 'email', 'attr' => array('class' => 'form-control', 'style' => 'margin-bottom:15px')))
            ->add('onderwerp', TextType::class, array('label' => 'onderwerp', 'attr' => array('class' => 'form-control', 'style' => 'margin-bottom:15px')))
            ->add('message', TextareaType::class, array('label' => 'message', 'attr' => array('class' => 'form-control')))
            ->add('Save', SubmitType::class, array('label' => 'send', 'attr' => array('class' => 'btn btn-primary', 'style' => 'margin-top:15px')))
            ->getForm();

        # Handle form response
        $form->handleRequest($request);

        # check if form is submitted

        if($form->isSubmitted() &&  $form->isValid()) {
            $name = $form['naam']->getData();
            $email = $form['email']->getData();
            $subject = $form['onderwerp']->getData();
            $message = $form['message']->getData();

            # set form data

            $contact->setNaam($name);
            $contact->setEmail($email);
            $contact->setOnderwerp($subject);
            $contact->setMessage($message);

            # finally add data in database

            $sn = $this->getDoctrine()->getManager();
            $sn->persist($contact);
            $sn->flush();
            $message = \Swift_Message::newInstance()

                ->setSubject($subject)
                ->setFrom('sayin5548@gmail.com')
                ->setTo($email)
                ->setBody($this->renderView('@Elislam/contact/sendemail.html.twig',array('name' => $name)),'text/html');

            $this->get('mailer')->send($message);
        }
    }
}
