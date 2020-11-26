<?php

interface Filter 
{
  public function getFilter();
}

class BAndWFilter implements Filter
{
//  Your code here

public function __construct(){}

public function getFilter() 
{
  return 'Black and White filter';
}

}

class SepiaFilter implements Filter
{
//  Your code here


public function __construct() {}

public function getFilter() 
{
  return 'Sepia filter';
}




}

