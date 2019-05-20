<?php

include 'classes/Recipe.php';


$recipe = new Recipe();

$recipe->addIngredient('egg',1);
$recipe->addIngredient('flour',2,'cup');
$recipe->source = 'Monday Victor';
$recipe->setTitle('My first Recipe');
echo $recipe->getTitle();


foreach($recipe->getIngredient() as $ing)
{
    echo "\n" . $ing['amount'] . " " . $ing['measure'] . " " . $ing['item'];
}
