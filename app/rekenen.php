<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>Rekenen</title>
</head>
<body>
<form name="rekenform" action="rekenen.php" method="post">
    <p>Geef 1e getal:<input type="text" name="getal1"></p>
    <p>Geef 2e getal:<input type="text" name="getal2"></p>
    <p>Geef 3e getal:<input type="text" name="getal3"></p>
    <p><input type="submit" name="bereken" value="gemiddelde">
    <input type="reset"></p>
</form>
<?php 
if (isset($_POST['bereken']))
    {
$getal1=$_POST['getal1'];
$getal2=$_POST['getal2'];
$getal3=$_POST['getal3'];
$gemiddelde=($getal1+$getal2+$getal3)/3;
echo "<p>het gemiddelde is". $gemiddelde."</p>";
    }
    ?>
    </body>
    </html>