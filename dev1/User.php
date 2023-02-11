<?php

class User{
    protected string $height;
    protected string $weight;
    public function __construct($height,$weight){
        $this->height = $height;
        $this->weight = $weight;
    }
}