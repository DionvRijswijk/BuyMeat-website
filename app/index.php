<?php
    session_start();   
    
    $isLoggedIn = isset($_SESSION["isLoggedIn"]) ? $_SESSION["isLoggedIn"] : false;
?>

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
<body>

<header>
    <h1>BuyMeat</h1>
    <nav>
        <a href="index.php">Home</a>
        <a href="menu.php">Menu</a>
        <a href="reserveren.php">Reserveren</a>
        <a href="contact.php">Contact</a>
        <a href="login.php">logout</a>
    </nav>
</header>

<section class="hero" id="home">
    <h1>Exclusieve Vleesbeleving</h1>
    <p>Premium steaks, ambachtelijk bereid met passie. Een minimalistische en luxe ervaring voor echte vleesliefhebbers.</p>
    <a href="menu.php" class="btn">Bekijk Menu</a>
</section>


<?php


include_once("includes/pdo.php");



if (isset($_GET["search"]))
    {
        $zoekterm = "%" . $_GET["search"] . "%";
        $sql="SELECT * FROM gerechten WHERE Naam LIKE :search";
        $statement = $pdo->prepare($sql);
        $statement->bindParam(":search", $zoekterm);
    } else 
    {
        $sql="SELECT * FROM gerechten";
        $statement = $pdo->prepare($sql);
    }


$statement->execute();
$gerechten=$statement->fetchAll();




?>

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

<footer>
    <p>© 2026 BuyMeat — Luxe Vleesrestaurant</p>
</footer>

</body>
</html>
