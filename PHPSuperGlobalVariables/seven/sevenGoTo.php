<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Hi visitors</h1>
    <?php
    if(!isset($_SESSION['views'])) {
        // $_SESSION['views'] = $_SESSION['views']+ 1;
        $_SESSION['views'] = 1;
    } 
    echo "Total page views = ". $_SESSION['views'];
    ?>
</body>
</html>