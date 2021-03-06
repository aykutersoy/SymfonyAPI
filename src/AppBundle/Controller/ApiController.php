<?php

// src/AppBundle/Controller/ApiController.php

namespace AppBundle\Controller;

use FOS\RestBundle\Controller\FOSRestController;
use FOS\RestBundle\Controller\Annotations\Route;

class ApiController extends FOSRestController
{
    /**
     * @Route("/api")
     */
    public function indexAction()
    {
        // $data = $this->get('security.token_storage')->getToken()->getUser();
        $data = array("hello" => "world");
        $view = $this->view($data);
        return $this->handleView($view);
    }
}