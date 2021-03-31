<?php
    $host='localhost';
    $user='root';
    $passwd='';
    $dbname='praktyki';

    $con = mysqli_connect($host,$user,$passwd,$dbname);

    if($con->connect_error){
        echo("błąd".$con->connect_error);
    }else{
        echo('połączono');
    }

?>