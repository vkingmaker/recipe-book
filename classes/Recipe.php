<?php

class Recipe {
    private $title;
    public $ingredients = array();
    public $instructions = array();
    public $yield;
    public $tag = array();
    public $source = 'Monday Victor';
    private $measurement = array(
        'tsp',
        'tbsp',
        'cup',
        'oz',
        'lb',
        'fl oz',
        'pint',
        'quart',
        'gallon'
    );

    public function displayTitle()
    {
        return "{$this->title} by {$this->source}";
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function addIngredient($item, $amount = null, $measure = null)
    {
        if($amount != null && !is_float($amount) && !is_int($amount))
        {
            exit("The amount must be a float: " .gettype($amount)." {$amount} given.");
        }
        if($measure != null && !in_array(strtolower($measure),$this->measurement))
        {
            exit('please enter a valid measurement'. implode(', ', $this->measurement));
        }
        $this->ingredients[] = array(
            'item' => ucwords($item),
            'amount' => $amount,
            'measure' => strtolower($measure)
        );
    }

    public function getIngredient()
    {
        return $this->ingredients;
    }

    public function setTitle($title)
    {
        $this->title = ucwords($title);
    }

}

