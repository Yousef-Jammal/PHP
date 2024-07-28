<?php 
include 'conction.php';

    $url = "http://localhost/back_end/PHP%20API/Advance%20PHP%20APIs%20Tasks/APIs/api_students.php";
    $curl = curl_init($url);

    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

    $response = curl_exec($curl);
    $list_students = json_decode($response, true);



    // Read
    $noResult = count($list_students);
    if(isset($_REQUEST['student_name'])){
        if($_REQUEST['student_name']){
            foreach ($list_students as $student){
                if($student['name'] == $_REQUEST['student_name']){
                    $list_students = $student;
                }else{
                    $noResult -= 1;
                }
            }
        }
    }
    

    if($noResult == 0){
        header("Location:students.php");
        exit();
    }
    
    
    // Update
    if(isset($_REQUEST['submit'])){
        
        $id_for_update = $_REQUEST['id'];
        $update_name = $_REQUEST['name'];
        $update_email = $_REQUEST['email'];
        $update_old = $_REQUEST['birth_date'];
        $update_address = $_REQUEST['address'];
        
        $update =  $db->exec("UPDATE students SET name='$update_name', birth_date='$update_old', address='$update_address', contact_information='$update_email' WHERE id=$id_for_update ");
        
        header("Location: students.php");
        exit();
    }
    
    // Delete
    if(isset($_REQUEST['delete'])){
        
        $id_for_update = $_REQUEST['id'];
        $update =  $db->exec("DELETE FROM students WHERE id=$id_for_update ;");
        header("Location: students.php");
        exit();
    }
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
        body>div{
            width: 100vw !important;
            margin: 4vh 0;
            height: 80vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        body>div>form{
            box-shadow: 1px 1px 5px black;
            display: flex;
            flex-direction: column;
            justify-content: space-evenly;
            height: 400px;
            width: 300px;
        }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">

    <a href="students.php">home</a>

</nav>

<div>
        <form action="" method="GET">
            <div>
                <input value="<?php echo $list_students['id']?>" type="number" name="id" style="display: none" >
                NAME<input value="<?php echo $list_students['name']?>" type="text" name="name">
            </div>
            <div>
                EMAIL<input value="<?php echo $list_students['contact_information']?>" type="text" name="email">
            </div>
            <div>
                ADDRESS<input value="<?php echo $list_students['address']?>" type="text" name="address">
            </div>
            <div>
                OLD<input value="<?php echo $list_students['birth_date']?>" type="text" name="birth_date">
            </div>
        
            <input type="submit" name="submit" value="UPDATE">
            <input type="submit" name="delete" value="DELETE">
        </form>
</div>


<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script> -->
</body>
</html>
