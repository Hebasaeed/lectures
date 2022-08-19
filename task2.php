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




#############       types of array       ##################


//  1 =====> indexed array  
##############################

// $x=["ahmed", 19 , 40]; 
//   // === or ===>>  //$x=  array("ahmed", 19 , 40);
// //print_r($x);
// foreach($x as $key => $values){
//   echo  $key ."=>" .$values . "<br>";
// }

// foreach($x as$values){
//   echo  $values . "<br>";
// }

###########################################

//  2  ======>  associative array
####################################

// $x=["name "=> "ahmed", "gpa "  => 19 , "age"  =>  40]; 
// foreach($x as $key => $values){
//   echo  $key ."=>" .$values . "<br>";
// }


###############################################

//  3  ======>  multi dymentional array ==>array of arrays
###########################################################3
//  $x=[
//   ["name" => "ahmed" , "gpa"  => 19 , "age"  =>  40]
//   ,["name" => "ahmed" , "gpa"  => 19 , "age"  =>  40]
//   ,["name" => "ahmed" , "gpa"  => 19 , "age"  =>  40]
//   ,["name" => "ahmed" , "gpa"  => 19 , "age"  =>  40]
//   , 58
//   ,"heba"
//  ]; 
 
//  foreach($x as $key => $values){
  
//   foreach($values as $key => $raws){
//   echo  $key ."=>" .$raws. "<br>";
  

// }
// //echo  $key ."=>" .$values. "<br>";
// echo "<br>";
//  }
// //print_r($x);
// //echo $x[3]["name"];
###############################################

// $y=["a","b","e","c"];
// rsort($y);
// sort($y);

################################################
// $y=["a"=>2,"b"=>6,"e"=>3,"c"=>5];
// asort($y);
// // asort   & arsort  ==> value   arrange
// // ksort  & krsort ==> key   arrange
// print_r($y);

//print_r($GLOBALS);

####################################################

####################    GLOBALS  ###############
//  $x=10;
// function printy(){
//   global $x;                 #take it from global scope
//    
//    return $x;
// }

// echo printy();

############## or ############

// $x=10;
// function printy(){  
   
//    return $GLOBALS['x'];         #take it from global scope
// }

// echo printy();


######################## types of super globals ########################
##  supper globals deal as arrays


#echo $_SERVER['PHP_SELF']; // LOCATION OF THIS FILE
#echo $_SERVER['SERVER_NAME']; // name of server => localhost
#echo $_SERVER['HTTP_HOST'];  // name of HOST => localhost
#echo $_SERVER['SCRIPT_NAME']; // LIKE LOCATION OF THIS FILE
#echo $_SERVER['SERVER_SOFTWARE']; // details of software
#echo $_SERVER['REMOTE_ADDR'];  // details  ip of user or me that enter this server
#echo $_SERVER['SERVER_ADDR']; // ip of server that you are hosting

?>
