<?php
    $user='root';
    $passwd='';
    try {
        $con = new PDO('mysql:host=localhost;dbname=praktyki', $user, $passwd);
    } catch (PDOException $e) {
        echo "Error!: " . $e->getMessage() . "<br/>";
    }
    
?>