<?php

namespace ElislamBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class AdminSysController extends Controller
{
    /**
     * @Route("/admin_system")
     */
    public function indexAction()
    {
        return $this->render('@Elislam/admin_system/index.html.twig');
    }
}
