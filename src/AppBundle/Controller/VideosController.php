<?php

namespace AppBundle\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use FOS\RestBundle\Controller\Annotations\QueryParam;
use FOS\RestBundle\Controller\FOSRestController;
use FOS\RestBundle\Request\ParamFetcherInterface;
use FOS\RestBundle\Request\ParamFetcher;
use FOS\RestBundle\View\RouteRedirectView;

class VideosController extends FOSRestController
{

    /**
     * Método para obtener el listado de vídeos del artículo
     * @Route("/app/videos", name="videos")
     * @QueryParam(name="page", requirements="\d+", description="page number")
     *
     * @param ParamFetcher $paramFetcher
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function getAction(ParamFetcher $paramFetcher)
    {

        $videosResponse ['aa'] = 1;

        $view = $this->view($videosResponse, 200);
        return $this->handleView($view);
    }
}
