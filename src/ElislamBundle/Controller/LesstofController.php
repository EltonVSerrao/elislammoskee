<?php

namespace ElislamBundle\Controller;

use ElislamBundle\Entity\Lesstof;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Lesstof controller.
 *
 * @Route("lesstof")
 */
class LesstofController extends Controller
{
    /**
     * Lists all lesstof entities.
     *
     * @Route("/", name="lesstof_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $lesstofs = $em->getRepository('ElislamBundle:Lesstof')->findAll();

        return $this->render('@Elislam/les/index.html.twig', array(
            'lesstofs' => $lesstofs,
        ));
    }

    /**
     * Creates a new lesstof entity.
     *
     * @Route("/new", name="lesstof_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $lesstof = new Lesstof();
        $form = $this->createForm('ElislamBundle\Form\LesstofType', $lesstof);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($lesstof);
            $em->flush();

            return $this->redirectToRoute('lesstof_show', array('id' => $lesstof->getId()));
        }

        return $this->render('@Elislam/lesstof/new.html.twig', array(
            'lesstof' => $lesstof,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a lesstof entity.
     *
     * @Route("/{id}", name="lesstof_show")
     * @Method("GET")
     */
    public function showAction(Lesstof $lesstof)
    {
        $deleteForm = $this->createDeleteForm($lesstof);

        return $this->render('@Elislam/lesstof/show.html.twig', array(
            'lesstof' => $lesstof,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing lesstof entity.
     *
     * @Route("/{id}/edit", name="lesstof_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Lesstof $lesstof)
    {
        $deleteForm = $this->createDeleteForm($lesstof);
        $editForm = $this->createForm('ElislamBundle\Form\LesstofType', $lesstof);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('lesstof_edit', array('id' => $lesstof->getId()));
        }

        return $this->render('@Elislam/lesstof/edit.html.twig', array(
            'lesstof' => $lesstof,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a lesstof entity.
     *
     * @Route("/{id}", name="lesstof_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Lesstof $lesstof)
    {
        $form = $this->createDeleteForm($lesstof);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($lesstof);
            $em->flush();
        }

        return $this->redirectToRoute('lesstof_index');
    }

    /**
     * Creates a form to delete a lesstof entity.
     *
     * @param Lesstof $lesstof The lesstof entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Lesstof $lesstof)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('lesstof_delete', array('id' => $lesstof->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
