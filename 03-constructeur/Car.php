<?php

class Car
{
    private $wheel = 4;
    private $color = 'blanc';
    private $brand;
    private $model;

    public function __construct($brand, $model)
    {
        $this->brand = $brand;
        $this->model = $model;
    }

    public function setColor($color)
    {
        $this->color = $color;
    }

    public function drive()
    {
        return 'La '.$this->brand.' '.$this->model.' roule sur ses '.$this->wheel.' roues.';
    }
    
    public function klaxon()
    {
        return 'La voiture '.$this->color.' klaxonne.';
    }
}
