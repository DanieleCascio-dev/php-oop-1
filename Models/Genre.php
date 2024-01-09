<?php
/**
 * Defines genre tht is connected to Movie
 */
class Genre
{
  public $name;

  function __construct($_name)
  {
    $this->name = $_name;
  }
}