<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PooCinema</title>
</head>
<body>
 
<?php
require 'Film.php';
require 'Person.php';
require 'Actor.php';
require 'Director.php';
require 'Casting.php';
require 'Genre.php';
require 'Role.php';

$genre1 = new Genre("Science-fiction");
$genre2 = new Genre("Drame");
$genre3 = new Genre("Suspens");


$director1 = new Director("Washowski", "Andy", "M", "18-03-1967");
$director2 = new Director("Besson", "Luc", "M", "14-04-1970");


$film1 = new Film("Matrix", 120, " Lorem ipsum dolor sit amet, fermentum diam nisl ", "10-06-1999", $director1, [$genre1, $genre2]);
$film2 = new Film("Léon", 135, " met, fermentum diam nisl sit amet erat. Duis semper. ", "03-06-2000", $director2, [$genre2, $genre3]);
$film3 = new Film("Le cinquième élément", 200, " met, fermentum amet erat. Duis semper. ", "06-08-2005", $director2, [$genre1, $genre3]);


$actor1 = new Actor("Reeves", "Keanu", "M", "02-09-1964");
$actor2 = new Actor("Reno", "Jean", "M", "08-10-1960");
$actor3 = new Actor("Jojovitsch", "Mila", "F", "15-02-1980");


$role1 = new Role ("Néo");
$role2 = new Role ("Léon");
$role3 = new Role ("Morbius");
$role4 = new Role ("Lilou");


$casting1 = new Casting($film1, $actor1, $role1);
$casting2 = new Casting($film2, $actor2, $role2);
$casting3 = new Casting($film1, $actor2, $role1);
$casting4 = new Casting($film3, $actor3, $role4);

$role1->played();
echo '<br>';
$role2->played();
echo '<br>';

$film1->casting();
echo '<br>';
$film2->casting();
echo '<br>';

$genre1->list();
echo '<br>';
$genre2->list();
echo '<br>';
$genre3->list();
echo '<br>';

$actor1->filmo();
echo '<br>';
$actor2->filmo();
echo '<br>';

$director1->filmo();
echo '<br>';
$director2->filmo();
echo '<br>';

// $film1->info();
// echo '<br>';
// $film2->info();
// echo '<br>';
// $film3->info();

?>   
</body>
</html>