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
        <a href="#contact.php">Contact</a>
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

echo "<pre>";
print_r($gerechten);
echo "<pre>";
?>

<section class="hero" id="home">
    <h1>Exclusieve Vleesbeleving</h1>
    <p>Premium steaks, ambachtelijk bereid met passie. Een minimalistische en luxe ervaring voor echte vleesliefhebbers.</p>
    <a href="#menu" class="btn">Bekijk Menu</a>
</section>

<section class="menu" id="menu">
    <h3>Onze Specialiteiten</h3>
    <div class="menu-items">
        <div class="menu-item">
            <h4>Ribeye Steak</h4>
            <p>Sappig, perfect gegrild en vol smaak.</p>
        </div>
        <div class="menu-item">
            <h4>Filet Mignon</h4>
            <p>Botermals rundvlees van topkwaliteit.</p>
        </div>
        <div class="menu-item">
            <h4>T-Bone</h4>
            <p>Een krachtige klassieker voor de fijnproever.</p>
        </div>
    </div>
</section>

<footer>
    <p>© 2026 BuyMeat — Luxe Vleesrestaurant</p>
</footer>

</body>
</html>
