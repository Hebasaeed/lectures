<?php

declare(strict_types=1); // to give red line under  not match  data type word

// function next_letter(string $ch):string {
// $next_ch = ++$ch;

// if (strlen($next_ch)>1){
//     $next_ch = $next_ch[0];
// }
//  return $next_ch;
// }
// echo next_letter("a");





###########################################################

//  $letter="a";
// $array_of_letter=['a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z'];
// for($u=0;$u<count($array_of_letter);$u++){
// if ($letter==$array_of_letter[$u]){
//     echo $array_of_letter[++$u];
// }elseif($letter=="z"){
//     echo $array_of_letter[0]; 
//     break; 
// }
 
// }

################################################3

// function next_letter($ch){
    

// if ($ch != 'z'){
//   echo   chr(ord($ch)+1);
// }else{
//     echo "a";
// }
// }
// echo next_letter("u");


###################################
 $x=10;
function printy(){
  global $x;                 #take it from global scope
   $y=20;
   return $x;
}

echo printy();


?>
