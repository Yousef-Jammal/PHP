<?php
    include '../conction.php';

    // Build API
    header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json; charset=UTF-8");
    header("Access-Control-Allow_Method: GET");
    header("Access-Control-Max-Age: 3600");
    header("Access-Control-Allow-Headers: *");



    function GET(){
        $get =  $GLOBALS['db']->prepare("SELECT students.name, exams.exam_id FROM students
                                        JOIN subjects ON students.id = subjects.subject_id
                                        JOIN exams ON subjects.subject_id = exams.subject_id");
        $get->execute();
        $get = $get->fetchAll(PDO::FETCH_ASSOC);

        return  $get;
    }

    echo json_encode(GET());
