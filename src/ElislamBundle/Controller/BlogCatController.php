<?php

namespace ElislamBundle\Controller;

use ElislamBundle\Entity\BlogCat;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

/**
 * Blogcat controller.
 *
 * @Route("blogcat")
 */
class BlogCatController extends Controller
{
    /**
     * Lists all blogCat entities.
     *
     * @Route("/", name="blogcat_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $blogCats = $em->getRepository('ElislamBundle:BlogCat')->findAll();

        return $this->render('@Elislam/blogcat/index.html.twig', array(
            'blogCats' => $blogCats,
        ));
    }

    /**
     * Creates a new blogCat entity.
     *
     * @Route("/new", name="blogcat_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $blogCat = new Blogcat();
        $form = $this->createForm('ElislamBundle\Form\BlogCatType', $blogCat);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($blogCat);
            $em->flush();

            return $this->redirectToRoute('blogcat_show', array('id' => $blogCat->getId()));
        }

        return $this->render('@Elislam/blogcat/new.html.twig', array(
            'blogCat' => $blogCat,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a blogCat entity.
     *
     * @Route("/{id}", name="blogcat_show")
     * @Method("GET")
     */
    public function showAction(BlogCat $blogCat)
    {
        $deleteForm = $this->createDeleteForm($blogCat);

        return $this->render('@Elislam/blogcat/show.html.twig', array(
            'blogCat' => $blogCat,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing blogCat entity.
     *
     * @Route("/{id}/edit", name="blogcat_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, BlogCat $blogCat)
    {
        $deleteForm = $this->createDeleteForm($blogCat);
        $editForm = $this->createForm('ElislamBundle\Form\BlogCatType', $blogCat);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('blogcat_edit', array('id' => $blogCat->getId()));
        }

        return $this->render('@Elislam/blogcat/edit.html.twig', array(
            'blogCat' => $blogCat,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a blogCat entity.
     *
     * @Route("/{id}", name="blogcat_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, BlogCat $blogCat)
    {
        $form = $this->createDeleteForm($blogCat);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($blogCat);
            $em->flush();
        }

        return $this->redirectToRoute('blogcat_index');
    }

    /**
     * Creates a form to delete a blogCat entity.
     *
     * @param BlogCat $blogCat The blogCat entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(BlogCat $blogCat)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('blogcat_delete', array('id' => $blogCat->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
