<?php
// .......................................
//   string concatenate

//  $x = "one";
//  $x ="two";

//  echo $x;
// echo '<br>';

// // ==============

// $a = "o"; 
// $a ="one";
// $a .=" ";
// $a .= "two";  //$a = $a . "two" => one two

// echo $a;

// ..........................................................

//            conditional statement
//  if . else 
 
/* syntax
 if (condition){
 if condition is true ===> block of code
 }
*/

// echo '<br>';

// if (100>1){
//     echo "done1";
// }
// elseif(100>99){
//     echo "done2";
//                    //شرط تاني بعد اذا ما تتحقق الاول 
// }
// else 
// {
//     echo "not done";
// };

// // 2
// echo '<br>';

// $city = "Aqaba";
// if($city == "Amman")
// {
//     echo "Amman is the capital of jordan";
// }
// else{
//     echo "it is not the capital of jordan";
// }
// // ===========================
// // switch
// echo '<br>';
// $favcolor = "red";

// switch ($favcolor) {
//   case "red":
//     echo "Your favorite color is red!";
//     break;
//   case "blue":
//     echo "Your favorite color is blue!";

//   case "green":
//     echo "Your favorite color is green!";
//     break;
//   default:
//     echo "Your favorite color is neither red, blue, nor green!";
// };

// // =============
// // loop
// for ($x = 0; $x <= 10; $x++) {
//     echo "The number is: $x <br>";
//   }

// // ===================
// // function
// function ($name){
//     echo $name "this is"
// }



// =================================================task 1===============================================
// a
// $x="Apple";
// echo strtoupper($x);

// // b
// echo '<br>';  
// $a="Apple";
// echo strtolower($a);

// // c
// echo '<br>';  
// $c="hello";
// echo ucfirst($c);

// // d
// echo '<br>';
// $r="hello world";
// echo ucwords($r);

// // ===========================================task2=========================================================

// $m="08 51 19";
// echo explode(" ", $m);
// !!!!
// // =============================================task3========================================================

// $p = 'I am a full stack developer at orange coding academy';

// $word = "I am"; //=>    حساس لحالة الحروف 
// $pos = strpos($p , $word);

// if ($pos !== false) {
//     echo " done";
// }else{
//     echo "not done";
// }

// // ==================================================task4====================================================
//  $URL ='www.orange.com/index.php';
//  echo basename($URL);

// ========================================================task5===============================================

// $x='info@orange.com';
//      echo strstr($x, '@', true);

// ============================================================task6=========================================
// $word ='info@orange.com';
// echo substr( $word,12,3);
// echo substr($word,-3);

// ============================================================task7======================================
// !?

// ===============================================================task8===================================
// $a= 'That new trainee is so genius.';
// $new= 'Our';

// $words = explode(' ', $a);///بتقسيم وبتخزن بمصفوفه


// $words[0] = $new;

// $last= implode(' ', $words);// لدمج عناصر مصفوفة إلى سلسلة نصية واحدة، 

                 
// echo "$last";

// // ==================================================================task9==================================

// ! 
// // ===================================================================== task 10================================

// $string = "Twinkle, twinkle, little star.";
// $newarray=explode(" " ,$string);
// var_dump($newarray);

// ================================================================task 11 ================================






// ======================================================file 2 task 1=============================================
// for ($i = 1; $i <= 10; $i++) {
//     echo $i;
//     if ($i < 10) {
//         echo '-';
//     }
// }

// // =========================================================task2========================================
// $avg = 0;
// for ($i = 0; $i <= 30; $i++) {
//     $avg += $i;
// }
// echo "the avg: " . $avg;

// ===========================================================task 3 =======================================
