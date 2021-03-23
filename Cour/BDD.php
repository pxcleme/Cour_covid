<?php
    try
    {
        $dbb=new PDO('mysql:host=mysql-caudron.alwaysdata.net;dbname=caudron_cleme', 'caudron_cleme', 'cleme*15');
        
    }catch(PDOException $e)
    {
        echo $e->getMessage();
    }
?>
