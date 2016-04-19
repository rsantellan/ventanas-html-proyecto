<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{

    public function indexAction(Request $request)
    {

        $em = $this->getDoctrine()->getManager();
        $products = $em->createQuery('select p from AppBundle:Product p where p.featured = true order by p.position asc')->setFirstResult(0)
                            ->setMaxResults(3)
                            ->getResult();
        $mediaGallery = $this->get('media_gallery_manager');
        $files = array_reverse($mediaGallery->getGalleryFiles('inicio'));
        return $this->render('AppBundle:default:index.html.twig', array(
            'bodycss' => 'home',
            'products' => $products,
            'files' => array_slice($files, 0, 6),
        ));
    }

    public function galleryAction(Request $request)
    {
      $mediaGallery = $this->get('media_gallery_manager');
      $files = array_reverse($mediaGallery->getGalleryFiles('galeria'));
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

    public function serviciosAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('AppBundle:default:servicios.html.twig', array(
            'bodycss' => 'blog',
            'activemenu' => 'servicios',
        ));
    }

    public function productosAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $products = $em->createQuery('select p from AppBundle:Product p order by p.position asc')->getResult();

        return $this->render('AppBundle:default:productos.html.twig', array(
            'bodycss' => 'blog',
            'activemenu' => 'productos',
            'products' => $products,
        ));
    }

    public function productoAction(Request $request, $slug)
    {
        $em = $this->getDoctrine()->getManager();
        $product = $em->createQuery('select p from AppBundle:Product p where p.slug = :slug')->setParameters(array('slug' => $slug))->getOneOrNullResult();

        if(!$product)
        {
          return $this->render('AppBundle:default:productNotFound.html.twig', array(
              'bodycss' => 'blog',
              'activemenu' => 'productos',
          ));
        }
        $imagenesAlbum = $em->getRepository("MaithCommonAdminBundle:mAlbum")->findOneBy(array('object_id' => $product->getId(), 'object_class' => $product->getFullClassName(), 'name' => 'imagenes'));
        $filesAlbum = $em->getRepository("MaithCommonAdminBundle:mAlbum")->findOneBy(array('object_id' => $product->getId(), 'object_class' => $product->getFullClassName(), 'name' => 'archivos'));
        return $this->render('AppBundle:default:product.html.twig', array(
            'bodycss' => 'blog',
            'activemenu' => 'productos',
            'product' => $product,
            'images' => $imagenesAlbum,
            'files' => $filesAlbum,
        ));
    }

    public function contactoAction(Request $request)
    {
        $form = $this->createForm(new \AppBundle\Form\ContactType());
        if ($request->isMethod('POST')) {
          $form->bind($request);

          if ($form->isValid()) {
              $parametersService = $this->get('maith_common.parameters');
              $message = \Swift_Message::newInstance()
                ->setSubject($parametersService->getParameter('contact-email-subject'))
                ->setFrom(array($parametersService->getParameter('contact-email-from') => $parametersService->getParameter('contact-email-from-name')))
                ->setReplyTo($form->get('email')->getData())
                ->setTo(array($parametersService->getParameter('contact-email-to')))
                ->setBody(
                    $this->renderView(
                        'AppBundle:default:contactEmail.html.twig',
                        array(
                            'ip' => $request->getClientIp(),
                            'name' => $form->get('name')->getData(),
                            'message' => $form->get('message')->getData(),
                            'subject' => $form->get('subject')->getData(),
                            'email' => $form->get('email')->getData(),
                        )
                    )
                );

              $this->get('mailer')->send($message);

              $request->getSession()->getFlashBag()->add('success', 'Se a enviado tu consulta con exito. Te contestaremos a la brevedad');
              return $this->redirect($this->generateUrl('site_contacto'));
          }
        }
        // replace this example code with whatever you need
        return $this->render('AppBundle:default:contacto.html.twig', array(
            'bodycss' => '',
            'activemenu' => 'contacto',
            'form' => $form->createView(),
        ));
    }

    public function downloadOriginalFileAction($id)
    {
      $em = $this->getDoctrine()->getManager();
      $file = $em->getRepository("MaithCommonAdminBundle:mFile")->find($id);
      $content = file_get_contents($file->getFullPath());
      $response = new Response();

      /* Figure out the MIME type (if not specified) */
      $known_mime_types = array(
          "pdf" => "application/pdf",
          "txt" => "text/plain",
          "html" => "text/html",
          "htm" => "text/html",
          "exe" => "application/octet-stream",
          "zip" => "application/zip",
          "doc" => "application/msword",
          "xls" => "application/vnd.ms-excel",
          "ppt" => "application/vnd.ms-powerpoint",
          "gif" => "image/gif",
          "png" => "image/png",
          "jpeg" => "image/jpeg",
          "jpg" => "image/jpg",
          "php" => "text/plain"
      );
      $mime_type = $file->getType();
      if(!in_array($file->getType(), $known_mime_types))
      {
        $file_extension = strtolower(substr(strrchr($file->getName(), "."), 1));
        if (array_key_exists($file_extension, $known_mime_types)) {
          $mime_type = $known_mime_types[$file_extension];
        }
      }

      $response->headers->set('Content-Type', $mime_type);
      $response->headers->set('Content-Disposition', 'attachment;filename="'.$file->getName());

      $response->setContent($content);
      return $response;
    }
}
