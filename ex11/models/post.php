<?php
  class Post
  {
    public $id;
    public $author;
    public $content;

    public function __construct($id, $author, $content)
    {
      $this->id = $id;
      $this->author = $author;
      $this->content = $content;

    }

    public function getId()
    {
        return $this->id;
    }

    public function getAuthor()
    {
        return $this->author;
    }

    public function setAuthor()
    {
        return $this->author;
    }

    public function getontent()
    {
        return $this->content;
        ;
    }

    public function setContent()
    {
        return $this->content;
    }

    public static function all()
    {
    //  Your code here
    }

    public static function create($author, $content)
    {
        //  Your code here

    }

    public static function delete($id)
    {
          //  Your code here

    }

    public static function find($id)
    {
        //  Your code here
    }
  }
?>