<?php
    include 'conction.php';
    $method = $_SERVER['REQUEST_METHOD'];
    $GLOBALS['table_name'] = 'exams';



    if($method == "GET"){
        include 'APIs/api_get.php';
    }elseif($method == "POST"){
        include 'APIs/api_post.php';
    }elseif($method == "PUT"){
        include 'APIs/api_put.php';
    }elseif($method == "DELETE"){
        include 'APIs/api_delete.php';
    }

?>
