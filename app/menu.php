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
$host='db';
$db='mydatabase';
$user='user';
$password='password';
$charset='utf8mb4';

$opties= [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES => false,
];

$dsn= "mysql:host=$host;dbname=$db;charset=$charset";

try {
    $pdo=new PDO($dsn, $user, $password, $opties);
    echo "Database connectie gelukt <br/>";
} catch (PDOException $e) {

echo $e->getMessage();

die("sorry, database probleem");
}

$sql="SELECT * FROM gerechten";

$statement = $pdo->prepare($sql);

$statement->execute();

$gerechten=$statement->fetchAll();


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
            echo "<h4>'$naam, $id, $prijs'</h4>";
            echo "<p> 'test tekst'</p>";
            echo "</div>";
        }
        ?>
        
       
    </div>
</section>

<section class="hero" id="home">
    
</section>