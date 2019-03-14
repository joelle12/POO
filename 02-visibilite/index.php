<?php

require_once 'Cat.php';

$cat = new Cat();

$cat
    ->setName('Bianca')
    ->setType('Chat de gouttière')
;
echo $cat->getName();
