<!DOCTYPE html>
<html lang="nl">
<head>
    <link rel="stylesheet" href="css/buymeat.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BuyMeat</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Ingrid+Darling&display=swap" rel="stylesheet">

    <style>
        
    </style>
</head>


<header>
    <h1>BuyMeat</h1>
    <nav>
        <a href="index.php">Home</a>
        <a href="menu.php">Menu</a>
        <a href="#reserveren.php">Reserveren</a>
        <a href="contact.php">Contact</a>
    </nav>
</header>


<?php

print_r($_GET["search"]);
if ($hasusersearched);
    {
        $sql="SELECT * FROM gerechten WHERE gerechten LIKE search";
    }

    else {
        $sql="SELECT * FROM gerechten";
    }
include_once("includes/pdo.php");

$sql="SELECT * FROM gerechten";

$statement = $pdo->prepare($sql);

$statement->execute();

$gerechten=$statement->fetchAll();


include_once("includes/searchbar.php");
?>



<section class="hero" id="home">
    
</section>

<section class="menu" id="menu">
    <h3>Onze gerechten</h3>
    
    <div class="menu-items">
        <?php
        foreach ($gerechten as $gerecht){
            $naam=$gerecht["Naam"];
            $id=$gerecht["ID"];
            $prijs=$gerecht["Prijs"];
            $vegetarisch=$gerecht["vegetarisch"];
            echo "<div class='menu-item'>";
            echo "<h4>$naam, $id, $prijs</h4>";
            echo "<p> test tekst</p>";
            echo "</div>";
        }
        ?>
        
       
    </div>
</section>

<section class="hero" id="home">
    
</section>