<?php

namespace AppBundle\Controller\Api;

use FOS\RestBundle\Controller\FOSRestController;
use Nelmio\ApiDocBundle\Annotation\ApiDoc;

class ProductController extends FOSRestController
{
    /**
    * List all products.
    *
    * @ApiDoc(
    *   resource = true,
    *   statusCodes = {
    *       200 = "Returned when successful",
    *       403 = "Returned when the user is not authorized to say hello",
    *   },
    *   headers = {
    *       {
    *           "name"="Authorization",
    *           "required"=true,
    *           "description"="Bearer access token"
    *       }
    *   }
    * )
    */
    public function getProductsAction()
    {
        $products = $this->getDoctrine()
            ->getRepository('AppBundle:Product')
            ->findAllOrderedByName()
        ;
        $view = $this->view($products);
        return $this->handleView($view);
    }
}