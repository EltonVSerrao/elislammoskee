<?php

namespace ElislamBundle\Controller;

use ElislamBundle\Entity\Groep;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Groep controller.
 *
 * @Route("groep")
 */
class GroepController extends Controller
{
    /**
     * Lists all groep entities.
     *
     * @Route("/", name="groep_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $groeps = $em->getRepository('ElislamBundle:Groep')->findAll();

        return $this->render('@Elislam/groep/index.html.twig', array(
            'groeps' => $groeps,
        ));
    }

    /**
     * Creates a new groep entity.
     *
     * @Route("/new", name="groep_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $groep = new Groep();
        $form = $this->createForm('ElislamBundle\Form\GroepType', $groep);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($groep);
            $em->flush();

            return $this->redirectToRoute('groep_show', array('id' => $groep->getId()));
        }

        return $this->render('@Elislam/groep/new.html.twig', array(
            'groep' => $groep,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a groep entity.
     *
     * @Route("/{id}", name="groep_show")
     * @Method("GET")
     */
    public function showAction(Groep $groep)
    {
        $deleteForm = $this->createDeleteForm($groep);

        return $this->render('@Elislam/groep/show.html.twig', array(
            'groep' => $groep,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing groep entity.
     *
     * @Route("/{id}/edit", name="groep_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Groep $groep)
    {
        $deleteForm = $this->createDeleteForm($groep);
        $editForm = $this->createForm('ElislamBundle\Form\GroepType', $groep);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('groep_edit', array('id' => $groep->getId()));
        }

        return $this->render('@Elislam/groep/edit.html.twig', array(
            'groep' => $groep,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a groep entity.
     *
     * @Route("/{id}", name="groep_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Groep $groep)
    {
        $form = $this->createDeleteForm($groep);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($groep);
            $em->flush();
        }

        return $this->redirectToRoute('groep_index');
    }

    /**
     * Creates a form to delete a groep entity.
     *
     * @param Groep $groep The groep entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Groep $groep)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('groep_delete', array('id' => $groep->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
