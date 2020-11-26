<?php

class Emitter
{
  // Your code here
  private static $instance;
  private $listeners = [];

  public static function getInstance(): Emitter 
  {
      if(!self::$instance) {
          self::$instance = new self();
      }
      return self::$instance;
  }

  public function emit(string $event, ...$args) 
  {
<<<<<<< HEAD
      call_user_func_array($this->listeners[$event], $args);
  }  
=======
    return call_user_func_array($this->listeners[$event], $args);
  }
>>>>>>> 880a36f82ec606cea97278f88fbe1501911c4087



  public function on(string $event, callable $fct)
   {
<<<<<<< HEAD
    $this->listeners[$event] = $fct;
=======
     
>>>>>>> 880a36f82ec606cea97278f88fbe1501911c4087
   }


}