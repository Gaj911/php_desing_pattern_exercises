<?php

include_once('Filter.php');

interface Picture
{
  public function __construct(Filter $filter);
  public function getPicture();
}

class Portrait implements Picture
{
//  Your code here
protected $filter;

public function __construct(Filter $filter)
{
  $this->filter = $filter;
}

public function getPicture() {
  return $this->filter;
}

}

class Landscape implements Picture
{
// Your code here

protected $filter;

public function __construct(Filter $filter)
{
  $this->filter = $filter;
}

public function getPicture() {
  return $this->filter;
}



}