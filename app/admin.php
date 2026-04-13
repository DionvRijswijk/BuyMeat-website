<?php
 session_start();
print_r($_SESSION);
//  if (!isset($_SESSION['isLoggedIn'])); {
//          header("Location: login.php");
//          exit();

//   }
// else if ($_SESSION["isLoggedIn"]==true){
//  header("Location: admin.php");
// }



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
        <a href="admin.php">admin</a>
    </nav>

</header>

<section class="hero" id="home">
    <h1> <br>

</h1>
</section>

<section class="menu" id="menu">
    <h1> <br>
<br>
<br>
<br>
<br>
<br>
<?php
session_start();
if (isset($_SESSION["isLoggedIn"]) || !$_SESSION["isLoggedIn"]){
    header ("location: login.php");
    exit();
}
require_once("../includes/pdo.php");

if (isset($_POST["submit"])){
    $naam= $_POST["naam"];
    $prijs= $_POST["prijs"];
    $beschrijving= $_POST["beschrijving"];


try{
    $sql = "INSERT INTO gerechten (naam, prijs, beschrijving) VALUES (:naam, :prijs, :beschrijving)";
    $statement = $pdo->prepare($sql);
    $statement->bindValue(:naam, $naam);
    $statement->bindValue(:prijs, $prijs);
    $statement->bindValue(:beschrijving, $beschrijving);
    $statement->execute();
    $success = "gerecht sucessvol toegevoegd";


    } catch (PDOexception $e) {
        $error = "er is een fout opgetreden" . $e->getMessage();
    }


}
?>
<br>
<br>
<br>
<br>
</h1>
</section>

<section class="hero" id="home">
    <h1> <br>

</h1>
</section>

<footer>
    <p>© 2026 BuyMeat — Luxe Vleesrestaurant</p>
</footer>

