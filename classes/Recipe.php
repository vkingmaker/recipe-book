<?php

class Recipe {
    public $title;
    public $ingredients = array();
    public $instructions = array();
    public $yield;
    public $tag = array();
    public $source = 'Monday Victor';

}

$recipe1 = new Recipe();
$recipe2 = new Recipe();
$recipe2->source = 'Monday Akubudike';

var_dump($recipe1->source);
var_dump($recipe2->source);
