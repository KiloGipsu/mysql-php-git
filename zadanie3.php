<?php
    $host='localhost';
    $user='root';
    $passwd='';
    $dbname='praktyki';


    try {
        $con = new PDO('mysql:host='$host';dbname='$dbname, $user, $passwd);
    } catch (PDOException $e) {
        echo "Error!: " . $e->getMessage() . "<br/>";
    }
    
?>