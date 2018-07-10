<?php

namespace ElislamBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use ElislamBundle\Entity\Blog;
use Symfony\Component\HttpFoundation\Response;
use Doctrine\ORM\EntityManagerInterface;

class SearchersController extends Controller
{
    public function searchIndex(Blog $blogs)
    {
        $blogs = new Blog();

        $em = $this->getDoctrine()->getManager();

        $blogs = $em->getRepository('ElislamBundle:Blog')->findBy(
                array('categorie_id' => '3')
        );

        return $this->render('@Elislam/blog/index.html.twig', array(
            'blogs' => $blogs,
        ));
    }
    public function searchBlogShow(Blog $blogpage){
        $blogpage = $this->getDoctrine()
            ->getRepository('ElislamBundle:Blog')
            ->findBy( array('categorie_id' => '3'));

        return $this->render('@Elislam/blog/show.html.twig', array(
            'showbpage' => $blogpage,
        ));
    }
}
