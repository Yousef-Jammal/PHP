<?php

echo "<form method='GET'>
    <input type='text' name='num1' placeholder='First number'>
    <input type='text' name='op' placeholder='Operator'>
    <input type='text' name='num2' placeholder='Second number'>
    <button type='submit'>go</button>
</form>";

if (isset($_GET["num1"]) && isset($_GET["num2"]) && isset($_GET["op"])) {
    $num1 = floatval($_GET["num1"]);
    $num2 = floatval($_GET["num2"]);
    $op = $_GET["op"];
    $result = "You inserted the wrong operation";

    switch ($op) {
        case "*":
            $result = $num1 * $num2;
            break;
        case "/":
            if ($num2 != 0) {
                $result = $num1 / $num2;
            } else {
                $result = "Division by zero error";
            }
            break;
        case "+":
            $result = $num1 + $num2;
            break;
        case "-":
            $result = $num1 - $num2;
            break;
    }

    echo $result;
    echo "<br>";
}