<?php


    // Build API
    header('Content-Type: application/json');
    header('Access-Control-Allow-Origin: *');
    header('Access-Control-Allow-Methods: POST');
    header('Access-Control-Allow-Headers: Content-Type');

    $data = json_decode(file_get_contents("php://input"), true);
    
    function PUT($data){
        $id = $data['id'];
        
        $put =  $GLOBALS['db']->prepare("DELETE FROM students_t2_2 WHERE id=$id;");
        $put->execute();
        if($put){
            echo 'succes';
        }

        return  $put;
    }

    PUT($data);
?>
