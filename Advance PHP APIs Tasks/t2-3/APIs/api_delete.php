<?php


    // Build API
    header('Content-Type: application/json');
    header('Access-Control-Allow-Origin: *');
    header('Access-Control-Allow-Methods: POST');
    header('Access-Control-Allow-Headers: Content-Type');
    
    $data = json_decode(file_get_contents("php://input"), true);
    
    PUT($data, $table_name);
    function PUT($data, $table_name){

        if($table_name == "exams"){

            $id = $data['exam_id'];

            
            $put =  $GLOBALS['db']->prepare("DELETE FROM $table_name  WHERE exam_id=$id;");
            $put->execute();
            
        }elseif($table_name == "teachers"){

            $id = $data['teacher_id'];
            
            $put =  $GLOBALS['db']->prepare("DELETE FROM $table_name WHERE teacher_id=$id");
            $put->execute();
            
        }elseif($table_name == "subjects"){

            $id = $data['subject_id'];

            $put =  $GLOBALS['db']->prepare("DELETE FROM $table_name  WHERE 	subject_id=$id");
            $put->execute();
        }

        if($put){
            echo '201';
        }else{
            echo '501';
        }

    }

?>
