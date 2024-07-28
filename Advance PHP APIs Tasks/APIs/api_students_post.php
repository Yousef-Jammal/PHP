<?php


// Build API
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Headers: Content-Type');

$data = json_decode(file_get_contents("php://input"), true);
    
    function POST($data){
        $name = $data['name'];
        $old = $data['birth_date'];
        $address = $data['address'];
        $email = $data['contact_information'];
        
        $post =  $GLOBALS['db']->prepare("INSERT INTO students (name ,birth_date ,address ,contact_information) VALUES ('$name', '$old', '$address', '$email')");
        $post->execute();
        $post = $post->fetchAll(PDO::FETCH_ASSOC);

        return  $post;
    }

    POST($data);
?>
