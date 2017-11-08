<?php

class SomeClass
{
  public function saveFile($filename)
  {
    $file = PhpFile::instance($filename);

    try {
      $file->lock();
    } catch (Exception $ex) {

    }
  }
}


class SomeClass2
{
  public function saveFile($filename)
  {
    $file = PhpFile::instance($filename);

    try {
      $file->lock();
    } catch (Exception $ex) {
      // handle
    }
  }
}

?>
