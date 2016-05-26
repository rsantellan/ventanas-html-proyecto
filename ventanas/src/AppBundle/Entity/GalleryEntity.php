<?php
namespace AppBundle\Entity;


class GalleryEntity
{

  public function getId()
  {
    return 1;
  }

  public function retrieveAlbums()
  {
      return array('inicio', 'galeria');
  }

  public function getFullClassName(){
    return get_class($this);
  }
}
