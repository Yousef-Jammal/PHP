<?php
//One 
// $number = 5;
// function isPrime($number){
//     if($number % 2 != 0 and $number % 3 != 0){
//         echo "prime";
//     }else{
//         echo "Not prime";
//     }
// }
// isPrime($number);

// Two
    // $word = "1234";
    // function swabe($word){
    //     $list = [];
    //     for($i = strlen($word) ; $i>0; $i--){
    //         array_push($list, $word[$i-1]);
    //     }
    //     echo join("", $list);
    // }
    // swabe($word);



//Three
    // $sentence = "jkdfdsjfl";
    // function chiek($sentence){
    //     $list = [];
    //     for($i = 0 ; $i< strlen($sentence); $i++){
    //         if(ord($sentence[$i]) > 96){
    //             array_push($list, "small");
    //         }else{
    //             array_push($list, "big");
    //         }
    //     }
    //     if(array_search("big",$list)){
    //         echo "It's good";
    //     }else{
    //         echo "It's not good";
    //     }
    // }
    // chiek($sentence);


//Four
    // $v1 = 1;
    // $v2 = 2;
    // function swabe($v1, $v2){
    //     $v = $v1;
    //     $v1 = $v2;
    //     $v2 = $v;
        
    //     echo $v1;
    //     echo "<br>";
    //     echo $v2;
    // }
    // swabe($v1, $v2);



//Five
    //Like Four

//Six
    // $num =407 ;
    // function checkIfArmStronge ($num){
    // $check = $num;
    //     $sum = 0;
    //     $digit = 0;
    //     while ($check != 0) {

    //     $digit =$check % 10;
    //     $sum +=pow($digit, strlen($num)) ;
    //     $check = $check /10;
    //     }
    

    //     if($num == $sum)
    //         echo "is armStrong";
    //     else
    //         echo "is not armStrong";
    // }
    // checkIfArmStronge($num);

//Seven
//Eight
    
    // $numbers = [1,1,2,3,8,3,8,4,3,4,8,3,5,9,3,5,6,7] ;
    // function removeDup ($num){

    //     $len = count($num);
        
    // for ($i= 0 ; $i < $len; $i++){
    //     $prevNumber = $num[$i];
    //     for($j = $i + 1 ; $j <$len ; $j++)
    //     if($prevNumber == $num[$j]){
    //         array_splice($num ,$j ,1);
    //         $i--;
    //         $len--;
    //     }
    // }
    // print_r($num);
    // }
    // removeDup($numbers);