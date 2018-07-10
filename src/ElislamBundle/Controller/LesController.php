<?php

namespace ElislamBundle\Controller;

use ElislamBundle\Entity\Les;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Le controller.
 *
 * @Route("les")
 */
class LesController extends Controller
{
    /**
     * Lists all le entities.
     *
     * @Route("/", name="les_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $les = $em->getRepository('ElislamBundle:Les')->findAll();

        return $this->render('@Elislam/les/index.html.twig', array(
            'les' => $les,
        ));
    }

    /**
     * Creates a new le entity.
     *
     * @Route("/new", name="les_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $le = new Le();
        $form = $this->createForm('ElislamBundle\Form\LesType', $le);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($le);
            $em->flush();

            return $this->redirectToRoute('les_show', array('id' => $le->getId()));
        }

        return $this->render('@Elislam/les/new.html.twig', array(
            'le' => $le,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a le entity.
     *
     * @Route("/{id}", name="les_show")
     * @Method("GET")
     */
    public function showAction(Les $le)
    {
        $deleteForm = $this->createDeleteForm($le);

        return $this->render('@Elislam/les/show.html.twig', array(
            'le' => $le,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing le entity.
     *
     * @Route("/{id}/edit", name="les_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Les $le)
    {
        $deleteForm = $this->createDeleteForm($le);
        $editForm = $this->createForm('ElislamBundle\Form\LesType', $le);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('les_edit', array('id' => $le->getId()));
        }

        return $this->render('@Elislam/les/edit.html.twig', array(
            'le' => $le,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a le entity.
     *
     * @Route("/{id}", name="les_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Les $le)
    {
        $form = $this->createDeleteForm($le);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($le);
            $em->flush();
        }

        return $this->redirectToRoute('les_index');
    }

    /**
     * Creates a form to delete a le entity.
     *
     * @param Les $le The le entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Les $le)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('les_delete', array('id' => $le->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
