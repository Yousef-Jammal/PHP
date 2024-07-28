<?php


    // Build API
    header('Content-Type: application/json');
    header('Access-Control-Allow-Origin: *');
    header('Access-Control-Allow-Methods: POST');
    header('Access-Control-Allow-Headers: Content-Type');

    $data = json_decode(file_get_contents("php://input"), true);
    
    function PUT($data){
        $id = $data['id'];
        $name = $data['name'];
        $class= $data['$class'];
        $old = $data['birth_date'];
        $address = $data['address'];
        $email = $data['contact_information'];
        
        $put =  $GLOBALS['db']->prepare("UPDATE students_t2_2 SET name='$name' ,birth_date='$old',class=$class ,address='$address' ,contact_information='$email' WHERE id=$id");
        $put->execute();
        $put = $put->fetchAll(PDO::FETCH_ASSOC);

        return  $put;
    }

    PUT($data);
?>
