<?php
echo"coucou";
session_start();

    include "BDD.php";
    include "login.php";

if($isconnect)
{
    echo "vous etes connecter";
   
}else{
    echo "vous devez vous identifier";
}



?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cour</title>
</head>
<body>
   

    <form action="" method="post">
    
    <p>
    
    <label for="user">user</label>
    <input type="text" name="user">

    <label for="password">MDP</label>
    <input type="password" name="MDP">
    
    </p>

    <p>
    
    <input type="submit" name="connexion">
    </p>
    
    </form>
</body>
</html>