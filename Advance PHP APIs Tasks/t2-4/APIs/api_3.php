<?php

    include '../conction.php';

    // Build API
    header('Content-Type: application/json');
    header('Access-Control-Allow-Origin: *');
    header('Access-Control-Allow-Methods: POST');
    header('Access-Control-Allow-Headers: Content-Type');


    $data = json_decode(file_get_contents("php://input"), true);

    $student_name = $data['student'];
    $subject_name = $data['subject'];
    
    $post =  $GLOBALS['db']->prepare("INSERT INTO students (name, subject_id) VALUES 
                                    ('$student_name', (SELECT subjects.subject_id FROM subjects 
                                    WHERE subjects.name='$subject_name'));");
    $post->execute();
      
   if($post){
        echo '201';
    }else{
        echo '501';
    }

?>  
