<?php

namespace ElislamBundle\Controller;

use ElislamBundle\Entity\Kind;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Kind controller.
 *
 * @Route("kind")
 */
class KindController extends Controller
{
    /**
     * Lists all kind entities.
     *
     * @Route("/", name="kind_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $kinds = $em->getRepository('ElislamBundle:Kind')->findAll();

        return $this->render('@Elislam/kind/index.html.twig', array(
            'kinds' => $kinds,
        ));
    }

    /**
     * Creates a new kind entity.
     *
     * @Route("/new", name="kind_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $kind = new Kind();
        $form = $this->createForm('ElislamBundle\Form\KindType', $kind);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($kind);
            $em->flush();

            return $this->redirectToRoute('kind_show', array('id' => $kind->getId()));
        }

        return $this->render('@Elislam/kind/new.html.twig', array(
            'kind' => $kind,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a kind entity.
     *
     * @Route("/{id}", name="kind_show")
     * @Method("GET")
     */
    public function showAction(Kind $kind)
    {
        $deleteForm = $this->createDeleteForm($kind);

        return $this->render('@Elislam/kind/show.html.twig', array(
            'kind' => $kind,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing kind entity.
     *
     * @Route("/{id}/edit", name="kind_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Kind $kind)
    {
        $deleteForm = $this->createDeleteForm($kind);
        $editForm = $this->createForm('ElislamBundle\Form\KindType', $kind);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('kind_edit', array('id' => $kind->getId()));
        }

        return $this->render('@Elislam/kind/edit.html.twig', array(
            'kind' => $kind,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a kind entity.
     *
     * @Route("/{id}", name="kind_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Kind $kind)
    {
        $form = $this->createDeleteForm($kind);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($kind);
            $em->flush();
        }

        return $this->redirectToRoute('kind_index');
    }

    /**
     * Creates a form to delete a kind entity.
     *
     * @param Kind $kind The kind entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Kind $kind)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('kind_delete', array('id' => $kind->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
