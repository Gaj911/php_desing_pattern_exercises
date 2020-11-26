<?php
class Security
{
    // Your code here
    protected $door;

    public function __construct(BankDoor $bankDoor)
    {
        $this->door = $bankDoor;
    }


    public function open($password)
    {
        if($this->authenticate($password)) {
            $this->door->open();
        } else {
            echo "Big no! It ain't possible." . PHP_EOL;
        }
    }

   private function authenticate($password) 
    {
        return $password === '$ecr@t';
    }

    public function close()
    {
        $this->door->close();
    }

 


}