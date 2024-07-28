<?php


    // Build API
    header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json; charset=UTF-8");
    header("Access-Control-Allow_Method: GET");
    header("Access-Control-Max-Age: 3600");
    header("Access-Control-Allow-Headers: *");



    function GET($table_name){
        $get =  $GLOBALS['db']->prepare("SELECT * FROM $table_name");
        $get->execute();
        $get = $get->fetchAll(PDO::FETCH_ASSOC);

        return  $get;
    }

    echo json_encode(GET($table_name));
