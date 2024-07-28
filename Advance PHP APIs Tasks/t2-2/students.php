<?php
    include 'conction.php';
    $method = $_SERVER['REQUEST_METHOD'];

    if($method == "GET"){
        include 'APIs/api_students_get.php';
    }elseif($method == "POST"){
        include 'APIs/api_students_post.php';
    }elseif($method == "PUT"){
        include 'APIs/api_students_put.php';
    }elseif($method == "DELETE"){
        include 'APIs/api_students_delete.php';
    }

?>
