<?php
session_start();


if (!isset($_SESSION['toDoList'])) {
    $_SESSION['toDoList'] = array();
}

$toDoList = $_SESSION['toDoList'];

if (isset($_GET['listItem']) && !empty($_GET['listItem'])) {
    $input = htmlspecialchars($_GET['listItem']);
    $toDoList[] = $input; 

    $_SESSION['toDoList'] = $toDoList; 
}

echo "<form method='GET'>
<input type='text' name='listItem' placeholder='Add a new item'>
<button type='submit'>add</button>
</form>";

echo "<div><ul>";
foreach ($toDoList as $item) {
    echo "<li>$item</li>";
}
echo "</ul></div>";

session_write_close();
