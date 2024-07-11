<?php 


    // One
    // $Upper =  strtoupper("hello");
    // echo $Upper;
    
    // echo "<br>";
    
    // $Lower = strtolower($Upper);
    // echo $Lower;

    // echo "<br>";

    // $firstIsCapital = ucfirst($Lower);
    // echo $firstIsCapital;

    // echo "<br>";

    // echo ucwords("hello world");


    
    // Two
    // echo date('h:i:s');


    // Three 
    // if (str_contains("hi you orange ok","orange")){
    //     echo 'word isfinded';
    // };

    
    // Four
    // echo basename("https://www.w3schools.com/php/func_filesystem_basename.asp","ame.asp");


    // Five
    // $string = "user@domain.com";

    // $explode = explode("@",$string);
    
    // array_pop($explode);
    
    // $newstring = join('', $explode);

    // echo $newstring;


    
    // Six
    // $word = "jfkldsjfl";
    // $positionOne = strlen($word)-1;
    // $positionTwo = strlen($word)-2;
    // $positionThree = strlen($word)-3;
    // echo   $word[$positionThree] .$word[$positionTwo] . $word[$positionOne];



    // Seven
    // $myRefrence = "1234567890ABCDEFGHIJKLMNOPQRSTUBWXyZadbcdejghijklmnopqrshuvwxyz";
    // $list = str_split($myRefrence);
    // shuffle($list);
    // $string = join("", $list);
    // $randomPassword = substr($string, 0 , 20 );
    // echo $randomPassword;



    // Eight
    // $sentence = "hello world";
    // $list = explode(" ", $sentence);
    // $list[0] = "hi";
    // $newSentence = join(" ", $list);
    // echo $newSentence;
    


    // Nine
    // $one = "yousaf";
    // $two = "yousef";
    // if($one > $two){
    //     $length = strlen($two);
    // }else{
    //     $length = strlen($one);
    // }
    // for ($x = 0 ; $x < $length ; $x++){
    //     if($one[$x] != $two[$x]){
    //         echo <<<"sentence"
    //         First difference between two strings at position $x: "$one[$x]" vs "$two[$x]"
    //         sentence;
    //     }
    // }



    // Ten
    // $sentence = "Twinkle, twinkle, little star";
    // $list = explode(", ",$sentence);
    // var_dump($list);



    // Eleven
    // $letters = "abcdefghijklmnoplmnopqrstuvwxyz";
    // $letter = "e";
    // $index = strpos($letters, $letter) + 1;
    // echo $letters[$index%31];


    // twelve                ////Not complete////////
    // $sentence = "The brown fox";
    // $list = explode(" ", $sentence);
    
    // $indexOne = array_search("The", $list);
    // $indexTwo = array_search("brown", $list);
    
    // echo $indexOne;
    // echo $indexTwo;

    // print_r($list);
    // echo $sentence;

    // thirteen
    // $number = '8420534054503450050043050';
    // $list = str_split($number);
    // for($x = 0 ; $x < count($list);$x++){
    //     if($list[$x] == '0'){
    //         $list[$x] = "";
    //     }
    // }
    // echo join("", $list);




    // Fourteen 
    // $string = "hi my name is Yousef ok";
    // $theWordWillRemove = "is";
    // $list = explode(" ", $string);
    // $list[array_search($theWordWillRemove, $list)] = "";
    // echo join(" ", $list);


    // Fiveteen
    // $sentence = "Hi my name is Yousef---";
    // $list = str_split($sentence);
    
    // for($x = 0; $x < count($list); $x++){
    //     if($list[$x] == "-"){
    //         $list[$x] = "";
    //     }
    // }
    // $newSentence = join("", $list);
    // echo $newSentence;


    // Sixteen
    // $sentence = "\'f99fd9fd34s550#r44";
    // $list = str_split($sentence);
    // $numberList = [1,2,3,4,5,6,7,8,9,0];
    
    // for($x = 0; $x < count($list); $x++){
    //     if(!in_array($list[$x],$numberList)){
    //         $list[$x] = "";
    //     }
    // }
    // $newSentence = join(" ", $list);
    // echo <<<"sentence"
    // '$newSentence'
    // sentence;



    // Seventeen
    // $sentence = "Hi their my name is Yousef ok";
    // $list = explode(" ", $sentence);
    // array_splice($list, 5);
    // $newSentence = join(" ", $list);
    // echo $newSentence;


    // Eighteen
    // $number = "2,543.12";
    // $list = str_split($number);
    // for($i = 0; $i<count($list) ; $i++){
    //     if($list[$i] == ","){
    //         $list[$i] = "";
    //     }
    // }
    // $newNumber = join("", $list);
    // echo $newNumber;



    // Nineteen
    // for($i = 'a' ; $i<='z' ; $i++){
    //     echo $i;
    //     if($i == 'z'){
    //         break;
    //     }
    // }









/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// 

    //One
    // $year = 2013;
    // $year_day = 365;
    // if($year == 2020 || $year_day == 366){
    //     echo "Yes";
    // }else{
    //     echo "No";
    // }



    // Two     //ملاحظه php is like api
    // $temperature = 19;
    // if($temperature >= 20){
    //     echo "summer";
    // }else{
    //     echo "Not summer";
    // }




    //Three
    // $firstNumber = 2;;
    // $secondNumber = 2;

    // $sumNumber = $firstNumber + $secondNumber;
    // if($firstNumber == $secondNumber){
    //     $sumNumber * 3;
    // }
    // echo $sumNumber;



    //Four
    // $firstNumber = 2;;
    // $secondNumber = 2;

    // if($firstNumber + $secondNumber == 30){
    //     $sumNumber = $firstNumber + $secondNumber;
    //     echo $sumNumber;
    // }else{
    //     echo false;
    // }


    //Five
    // $number = 20;
    // if($number %3 != 0){
    //     echo "false";
    // }else{
    //     echo "true";
    // }


    //I Think Six
    // $mark = 50;
    // if($mark == 100 ){
    //     echo "A";
    // }elseif( $mark > 90 ){
    //     echo "B";
    // }elseif($mark > 80 ){
    //     echo "C";
    // }elseif($mark > 70 ){
    //     echo "D";
    // }elseif($mark > 60 ){
    //     echo "F";
    // }


    //Six
    // $number = 10;
    // if($number <= 50 and $number >= 20){
    //     echo "true";
    // }else{
    //     echo "false";
    // }
    


    //Seven
    // $numberOne = 3;
    // $numberTwo = 9;
    // $numberThree = 6;
    
    // if($numberOne > $numberTwo and $numberOne > $numberThree ){
    //     echo $numberOne;
    // }elseif($numberTwo > $numberOne and $numberTow > $numberThree ){
    //     echo $numberTwo;
    // }else{
    //     echo $numberThree;
    // }
    
    


    //Eight
    // $units = 40;
    // if($units > 250 ){
    //     $price = $units * 7.5;
    // }elseif($units == 250){
    //     $price = $units * 6.2;
    // }elseif($units >= 150){
    //     $price = $units * 5.2;
    // }elseif($units >= 50){
    //     $price = $units * 2.5;
    // }
    // echo $units;




    // Nine
    // $numberOne = 4;
    // $numberTwo = 5;
    // $type = "+";
    // switch($type){
    //     case "+":
    //         echo $numberOne + $numberTwo;
    //         break;
    //     case "*":
    //         echo $numberOne * $numberTwo;
    //         break;
    //     case "/":
    //         echo $numberOne / $numberTwo;
    //         break;
    //     case "-":
    //         echo $numberOne - $numberTwo;
    //         break;    
    // }   



    //Eleven
    // $number = 10;
    // if($number > 0){
    //     echo "positive";
    // }elseif($number == 0){
    //     echo "zero";
    // }else{
    //     echo "nigative";
    // }


    //twelve
    // $gards = [30, 90, 80];
    // $sum = 0;
    // for($i = 0; $i<count($gards); $i++){
    //     $sum += $gards[$i];
    // }
    // $sum /= count($gards);

    // if($sum > 90 ){
    //     echo "A";
    // }elseif( $sum > 75 ){
    //     echo "B";
    // }elseif($sum > 60 ){
    //     echo "C";
    // }elseif($sum > 50 ){
    //     echo "D";
    // }else{
    //     echo "F";
    // }
