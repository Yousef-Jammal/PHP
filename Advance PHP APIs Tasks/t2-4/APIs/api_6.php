<?php

    include '../conction.php';
    
    // Build API
    header('Content-Type: application/json');
    header('Access-Control-Allow-Origin: *');
    header('Access-Control-Allow-Methods: POST');
    header('Access-Control-Allow-Headers: Content-Type');
    
    $data = json_decode(file_get_contents("php://input"), true);


    $id = $data['exam_id'];
    $subject_id = $data['subject_id'];
    $date = $data['date'];
    $max_score = $data['max_score'];
    

    $put =  $GLOBALS['db']->prepare("UPDATE exams SET subject_id=$subject_id , date='$date' ,max_score=$max_score  WHERE exam_id=$id;");
    $put->execute();
    if($put){
        echo '201';
    }else{
        echo '501';
    }

?>
