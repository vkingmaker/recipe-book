<?php

class Recipe {
    private $title;
    public $ingredients = array();
    public $instructions = array();
    public $yield;
    public $tag = array();
    public $source = 'Monday Victor';

    public function displayTitle()
    {
        return "{$this->title} by {$this->source}";
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function setTitle($title)
    {
        $this->title = ucwords($title);
    }

}

$recipe1 = new Recipe();
$recipe1->source = 'Otti Grant';
$recipe1->setTitle('Baked beans');
echo $recipe1->getTitle();

$recipe2 = new Recipe();
$recipe2->source = 'Akubudike Monday';
$recipe2->setTitle('coconut Rice');

echo $recipe1->displayTitle();
echo $recipe2->displayTitle();
