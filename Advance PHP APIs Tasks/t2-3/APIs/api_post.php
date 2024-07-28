<?php


// Build API
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Headers: Content-Type');


$data = json_decode(file_get_contents("php://input"), true);
// var_dump($data);    
    function POST($data, $table_name){

        if($table_name == "exams"){

            $subject_id = $data['subject_id'];
            $date = $data['date'];
            $max_score = $data['max_score'];
           
            $post =  $GLOBALS['db']->prepare("INSERT INTO $table_name (	subject_id ,date ,max_score) VALUES ($subject_id ,'$date' ,$max_score)");
            $post->execute();
            
        }elseif($table_name == "teachers"){

            $name = $data['name	'];
            $subjects = $data['subjects'];
            $contact_information = $data['contact_information'];
            
            $post =  $GLOBALS['db']->prepare("INSERT INTO $table_name (name  ,subjects ,contact_information) VALUES ('$name', '$subjects', $contact_information)");
            $post->execute();

        }elseif($table_name == "subjects"){
            $name = $data['name'];
            $description = $data['description'];

            $post =  $GLOBALS['db']->prepare("INSERT INTO $table_name (name ,description) VALUES ('$name', '$description')");
            $post->execute();
        }
        

    
        if($post){
            echo '201';
        }else{
            echo '501';
        }

        return  $post;
    }

    POST($data, $table_name);
?>
