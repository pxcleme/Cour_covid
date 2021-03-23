<?php



    try
    {
        

        $dbb=new PDO('mysql:host=mysql-caudron.alwaysdata.net;dbname=caudron_cleme', 'caudron_cleme', 'cleme*15');
        
    }catch(PDOException $e)
    {
        echo $e->getMessage();
    }

session_start();
$isconnect=false;

if(isset($_SESSION['Connect']));
{
    $isconnect=$_SESSION['Connect'];

}else
{
    $_SESSION['Connect']=true;
}

public function connexion($pseudo,$mdp,$dbb)
{
    $requser=$dbb->prepare('SELECT * FROM `user` WHERE "'.$pseudo.'"=`nom` && "'.$mdp.'"=mdp');
    $requser->execute(array($pseudo,$mdp));

    if ($requser->rowCount()>1)
    {
        $userinfo =$requser->fetch();
        $_SESSION['connect']= true;
        $_SESSION['pseudo']=$userinfo['pseudo'];
        echo "vous etes connecté en tant que ".$userinfo['pseudo'] .".";

    }else{
        echo"<p>Identifiant ou Mot de passe incorrect !</p>";
    }
}

?>