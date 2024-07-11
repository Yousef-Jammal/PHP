<?php

    //One
    // for($i = 0; $i < 100; $i++){
    //     if($i == 99){
    //         echo $i;
    //     }else{
    //         echo $i . "-";
    //     }
    // }




    //Two
    // $sum = 0;
    // for ($i = 1; $i <= 30 ; $i++){
    //     $sum +=$i;
    // }
    // echo $sum;

    //or

    // function addNumbers($v1, $v2){
    //     return $v1 + $v2;
    // }
    // $numbers = [];
    // for($i = 1 ; $i <= 30; $i++){
    //     array_push($numbers, $i );
    // }
    // print_r(array_reduce($numbers, "addNumbers"));




    //Three
    // $rowAndColumn = 5; 
    // for ($i = 0; $i < $rowAndColumn; $i++) {

    //     for ($j = 0; $j < $rowAndColumn; $j++) {
    //         if ($j < $rowAndColumn - $i - 1) {  
    //             echo 'A ';
    //         } else {
    //             echo chr(65 + $i) . ' ';
    //         }
    //     }

    //     echo "<br>";
    // }

    //Four
    // $row = 5;
    // $column = 5;

    // for($rowLoop = 0; $rowLoop < $row ; $rowLoop++){
    //     for($columnLoop = 0; $columnLoop < $column ; $columnLoop++){
    //         if($columnLoop< $column - $rowLoop - 1){
    //             echo 1 . " ";
    //         }else{
    //             echo 1+$rowLoop . " ";
    //         }
    //     }
    //     echo "<br>";
    // }

    //Five
    // $row = 5;
    // $column = 5;

    // for($rowLoop = 0; $rowLoop < $row ; $rowLoop++){
    //     for($columnLoop = 0; $columnLoop < $column ; $columnLoop++){
    //         if($rowLoop == $columnLoop){
    //             echo $columnLoop + 1 . " ";
    //         }else{
    //             echo 0 . " ";
    //         }
    //     }
    //     echo "<br>";
    // }


    //Six
    // $number = 3;
    // $numberForLoop = $number;
    // for($i = 1; $i<$numberForLoop; $i++){
    //     $number *= $i;


    //Seven  
    // $firstNumber = 0;
    // $secondNumber = 1;
    // $sum = 0;
    
    // for ($i = 0; $i <= 8; $i++) {
    //     echo $firstNumber . " ";
    //     $sum = $secondNumber;
    //      $secondNumber += $firstNumber;
    //      $firstNumber = $sum;
    // }




    //Eight
    // $sentence = "Orange Coding Academy";
    // $list = str_split(strtolower($sentence));
    // $sum = 0;
    // for($i = 0; $i < strlen($sentence); $i++){
    //     if($list[$i] == "o"){
    //         $sum += 1;
    //     }
    // }
    // echo $sum;



    //Nine
    // echo "<table border =1px  cellpadding=0px>";
    
    // $row = 6;
    // $column = 5;

    // for($r = 0; $r < $row; $r++){
    // echo "<tr>";
    // for($co = 0 ; $co < $column; $co++){
    //     $numberOne = $co+1;
    //     $numberTow = $r+1;
    //     $total = $numberOne*$numberTow;
    //     echo <<<"td"
    //     <td>$numberOne * $numberTow = $total<td>
    //     td;
    // }
    // echo "</tr>";
    // }

    // echo "</table>";


    // Ten
    // for ($i = 1; $i <= 50; $i++) {
    //     if ($i % 3 == 0 && $i % 5 == 0) {
    //         echo "FizzBuzz ";
    //     } elseif ($i % 3 == 0) {
    //         echo "Fizz ";
    //     } elseif ($i % 5 == 0) {
    //         echo "Buzz ";
    //     } else {
    //         echo $i . ' ';
    //     }
    // }

    //Eleven
    // $number = 1;
    // for($row = 1 ; $row<5; $row++){
    //     for($column = 0; $column< 5; $column++){
    //         echo $number;
    //         $number++;
    //         if($column+1 == $row){
    //             break;
    //         }
    //     }
    //     echo "<br>";
    // }

    //Twelve
    // $rows = 5;

    // for ($i = 2; $i <= $rows; $i++) {
    //     for ($j = 1; $j <= $i; $j++) {
    //         echo chr(64 + $j); 
    //         if ($j < $i) {
    //             echo " "; 
    //         }
    //     }
    //     echo "<br>"; 
    // }
    
    // for ($i = $rows; $i >= 1; $i--) {
    //     for ($j = 1; $j <= $i; $j++) {
    //         echo chr(64 + $j); 
    //         if ($j < $i) {
    //             echo " "; 
    //         }
    //     }
    //     echo "<br>"; 
    // }



