<!DOCTYPE html>
<html lang="en">
<head>
    <title>Mijn resultaat</title>
</head>
<body>

<h2>Temperatuur</h2>

<?php
// Maak een variabele voor de temperatuur
$temperatuur = 25;

// Als de temperatuur hoger is dan 25:
// Toon: "Het is warm."
if ($temperatuur>=25) {
    echo "<span>";
 echo "het is warm";  
echo "<span>";
}
else if ($temperatuur<=25) {
echo "<span>";
 echo "het is koud";
echo "<span>";
}

//
// Als de temperatuur tussen 15 en 25 ligt:
// Toon: "Het is lekker weer."
//
// Anders:
// Toon: "Het is koud."

?>
</body>
</html>