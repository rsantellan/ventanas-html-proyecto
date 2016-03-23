<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{

    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('AppBundle:default:index.html.twig', array(
            'bodycss' => 'home',
        ));
    }
    
    public function galleryAction(Request $request)
    {
      $mediaGallery = $this->get('media_gallery_manager');
      $files = $mediaGallery->getGalleryFiles('galeria');
      return $this->render('AppBundle:default:galeria.html.twig', array(
             'bodycss' => 'blog',
             'activemenu' => 'galeria',
             'files' => $files,
          
        ));
    }

    public function nosotrosAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('AppBundle:default:nosotros.html.twig', array(
            'bodycss' => 'single-post',
            'activemenu' => 'nosotros',
        ));
    }    
    
}
