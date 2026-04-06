<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  
<div class="container-space-around gray-background"> test</div>

<?php
$username = "Dion";
$password = "Dion";

if (isset($_POST["submit"])) {

if ($_POST["username"] === $username && $_POST["password"] === $password) {

$_SESSION ["isLoggedIn"]=true;

}else{
    session_destroy();
}

print_r($_SESSION);

}


?>



<div class="login">
    <form name="naam" action="" method="post">
        <input name="username" type="text" placeholder="" require/>
        <input name="password" type="text" placeholder="zoek naar een gerecht"require />
        <input name="submit" type="submit" value="enter">
</form>
</div>


</body>
</html>