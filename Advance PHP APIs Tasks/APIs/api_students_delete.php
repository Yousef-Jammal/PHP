<?php


    // Build API
    header('Content-Type: application/json');
    header('Access-Control-Allow-Origin: *');
    header('Access-Control-Allow-Methods: POST');
    header('Access-Control-Allow-Headers: Content-Type');

    $data = json_decode(file_get_contents("php://input"), true);
    
    function PUT($data){
        $id = $data['id'];
        
        $put =  $GLOBALS['db']->prepare("DELETE FROM students WHERE id=$id;");
        $put->execute();
        // $put = $put->fetchAll(PDO::FETCH_ASSOC);

        return  $put;
    }

    PUT($data);
?>
