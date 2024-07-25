<?php
function fetchYouTubeData() {
    $url = "https://www.googleapis.com/youtube/v3/search?part=snippet&q=" . 'qur\'an' . "&maxResults=5&key=AIzaSyCvVaAIAvqcPIJ5kKtwYQEffJBZ_IUk7OA";

    $ch = curl_init();


    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

    $response = curl_exec($ch);


    // if (curl_errno($ch)) {
    //     echo 'Error:' . curl_error($ch);
    // }

    curl_close($ch);

    $data = json_decode($response, true);

    return $data;
}

$youtubeData = fetchYouTubeData();

$GLOBALS['videoId'] = $youtubeData['items'][0]['id']['videoId']; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <iframe src="https://www.youtube.com/embed/<?= $videoId?>" frameborder="0" allowFullscreen="true"></iframe>
</body>
</html>


