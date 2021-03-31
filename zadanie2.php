<?php
    $host='localhost';
    $user='root';
    $passwd='';
    $dbname='praktyki';

    $con = new mysqli($host,$user,$passwd,$dbname);

    if($con->connect_error){
        echo("błąd".$con->connect_error);
    }else{
        echo('połączono');
    }
    
?>