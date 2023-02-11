<?php

class User{
    protected $height;
    protected $weight;
    public function __construct($height,$weight){
        $this->height = $height;
        $this->weight = $weight;
    }
}

class Author extends User{

}