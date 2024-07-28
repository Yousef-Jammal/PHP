<?php


    // Build API
    header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json; charset=UTF-8");
    header("Access-Control-Allow_Method: GET");
    header("Access-Control-Max-Age: 3600");
    header("Access-Control-Allow-Headers: *");


    function GET(){
        $get =  $GLOBALS['db']->prepare("SELECT * FROM students_t2_2");
        $get->execute();
        $get = $get->fetchAll(PDO::FETCH_ASSOC);

        return  $get;
    }

    echo json_encode(GET());
