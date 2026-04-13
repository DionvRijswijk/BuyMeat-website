<?php
session_start();

$username = "Dion";
$password = "Dion";

if (isset($_POST["submit"])) {
    

    if ($_POST["username"] === $username && $_POST["password"] === $password) {

        $_SESSION["isLoggedIn"]=true;

    }else{
        $_SESSION["isLoggedIn"]=false;
        session_destroy();
    }


    if ($_SESSION["isLoggedIn"]==true){
        header("Location: admin.php");
        exit();

    }
    print_r("incorrect password/username");

}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  
<!-- <div class="container-space-around gray-background"> test</div> -->





<div class="login">
    <form name="naam" action="login.php" method="post">
        <input name="username" type="text" placeholder="Gebruikersnaam" require/>
        <input name="password" type="text" placeholder="Wachtwoord"require />
        <input name="submit" type="submit" value="enter">
</form>
</div>


</body>
</html>