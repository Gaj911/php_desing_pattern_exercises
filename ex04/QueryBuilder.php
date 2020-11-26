<?php

class QueryBuilder
{
    // Your code here
    
    private $select = []; 
    private $from = []; 
    private $where = []; 


    public function select(...$args): QueryBuilder 
    {
        $this->select[] = $args;
        return $this;

    }

    public function from($table, $alias = false): QueryBuilder 
    {
        $this->$from[] =  ; 
    }

    public function where(...$args): QueryBuilder {}

    public function __toString(): QueryBuilder {}
}