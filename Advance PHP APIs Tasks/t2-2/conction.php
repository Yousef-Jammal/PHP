<?php
     try {
        $db = new PDO("mysql: host=localhost; dbname=school", 'root', '');
    } catch (PDOException $e) {
        echo 'noooooooo ' . $e->getMessage();
    }
?>