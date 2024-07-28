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
            $subject_id = $data['subject_id'];
            $date = $data['date'];
            $max_score = $data['max_score'];

            
            $put =  $GLOBALS['db']->prepare("UPDATE $table_name SET subject_id=$subject_id , date='$date' ,max_score=$max_score  WHERE 	exam_id=$id;");
            $put->execute();
            
        }elseif($table_name == "teachers"){

            $id = $data['teacher_id'];
            $name = $data['name	'];
            $subjects = $data['subjects'];
            $contact_information = $data['contact_information'];
            
            $put =  $GLOBALS['db']->prepare("UPDATE $table_name SET name='$name', subjects='$subjects', contact_information=$contact_information WHERE teacher_id=$id");
            $put->execute();
            
        }elseif($table_name == "subjects"){

            $id = $data['subject_id'];
            $name = $data['name'];
            $description = $data['description'];

            $put =  $GLOBALS['db']->prepare("UPDATE $table_name SET name='$name' ,description='$description' WHERE 	subject_id=$id");
            $put->execute();
        }

        if($put){
            echo '201';
        }else{
            echo '501';
        }

    }

?>
