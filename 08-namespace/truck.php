<?php 

namespace Parking\pro; 

use \parking\car;

class truck 
{
    public function __construct()
    {
        $this->cars = [
            new \parking\car(),
            new car()
        ];


    }
    
}