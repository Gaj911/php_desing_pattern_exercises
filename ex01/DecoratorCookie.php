<?php
include_once('Cookie.php');

class CookieMacadamia implements Cookie
{
    //  Your code here
    protected $cookie;

    public function __construct(Cookie $cookie)
    {
        $this->cookie = $cookie;
    }

    public function getCalories(): int
    {
        return $this->cookie->getCalories() + 10 ;
    }

    public function getType(): string
    {
        return $this->cookie->getType() .', macadamia';
    }
}




class CookieWhiteChocolate implements Cookie
{
    //  Your code here
    protected $cookie;

    public function __construct(Cookie $cookie)
    {
        $this->cookie = $cookie;
    }

    public function getCalories(): int
    {
        return $this->cookie->getCalories() + 20 ;
    }

    public function getType(): string
    {
        return $this->cookie->getType() .', white chocolate';
    }

}
