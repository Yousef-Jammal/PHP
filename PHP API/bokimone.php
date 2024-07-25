<?php
function fecthBocimonData(){
    $url = "https://pokeapi.co/api/v2/pokemon-form/kakuna";
    $curl = curl_init($url);
    curl_setopt($curl , CURLOPT_RETURNTRANSFER, true);
    $result = curl_exec($curl);

    $array = json_decode($result, true);

    $GLOBALS['srcImage'] = $array['sprites']["back_default"];

}
fecthBocimonData();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <img src="<?php echo ($srcImage);?>" alt="">
</body>
</html>