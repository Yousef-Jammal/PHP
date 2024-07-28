<?php 

    $url = "http://localhost/back_end/PHP%20API/Advance%20PHP%20APIs%20Tasks/APIs/api_students.php";
    $curl = curl_init($url);

    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

    $response = curl_exec($curl);
    $list_students = json_decode($response, true);



    if(isset($_REQUEST['submit'])){
        $student_name = $_REQUEST['search'];
        header("Location:student.php?student_name=$student_name");
    }

    
    // if(isset($_REQUEST['search'])){
    //     if($_REQUEST['search']){
    //         foreach ($list_students as $phone){
    //             if($phone['name'] == $_REQUEST['search']){
    //                 $list_students = [];
    //                 $list_students[] = $phone;
    //             }
    //         }
    //     }
    // }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mobile Phone | Orange Jordan E shop</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .btn-orange {
            background-color: #FFA500;
            border-color: #FFA500;
            color: white;
        }
        .btn-orange:hover {
            background-color: #FF8C00;
            border-color: #FF8C00;
        }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">

            <form class="d-flex" method="GET" active="">
                <input class="form-control me-2" type="text" placeholder="Search" name="search">
                <!-- <button class="btn btn-primary" type="submit_search">Search</button> -->
                <input type="submit" name="submit" value="serch">
            </form>
</nav>

<div class="container my-4">
    <div class="row"> 
        <table border="1">
            <thead>
                <tr>
                    <th>id</th>
                    <th>name</th>
                    <th>old</th>
                    <th>address</th>
                    <th>email</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($list_students as $student):?>
                    <tr>
                        <td><?= $student['id']?></td>
                        <td><?= $student['name']?></td>
                        <td><?= $student['birth_date']?></td>
                        <td><?= $student['address']?></td>
                        <td><?= $student['contact_information']?></td>
                    </tr>
                <?php endforeach;?>
            </tbody>
        </table>
    </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
