
<?php
 ################  1  ####################
function heba(){
    echo "my name's heba";
}

heba();
#################    2   ###############
echo "<br>";

function hebaa( $parameter){
    echo "my name's heba     ". $parameter;
}

hebaa( "saeed");
##################    3   ##################
echo "<br>";

function printMessage( $name , $email , $pass , $phone=null){
    return "my name's=" . $name .", my email=" . $email ." , my pass=" . $pass ." , my phone=.." . $phone    ;
}

 echo printMessage( "heba", "hebasaed827@gmail.com" ,6778999  );// to call function inside it arguments , we put before  it ((((echo )))......


####################   4      ########################
echo "<br>";

function addNumber( float $num1, float $num2): int{ // detect the  answer with specific type
    return  $num1+$num2;
}

echo addNumber( 5.5,4);

############# sc0pe  مجال الؤيه و متشاف ازاى كوه الكود#  #############
echo "<br>";


$x=68;
echo $x ."<br>"; // global

function printxy(){
    $y= 44;   //local
    global  $x; // undefined if you write it  ------------> first way to declarate global scope
    echo $x ."<br>";
    echo $y ."<br>"; 
}
 printxy();

 //echo $y ."<br>"; // it undefine here (out side function)
#################      ######################################



function printvalue(){
    static  $value=0; // static-------> save the last value for variable ($value) not delete it  with garbidge collector
    echo $value ."<br>";
    $value++;
}

printvalue();
printvalue();
printvalue();

######3 garbedge colector : delete unused data in the memory/ save effeciency of memory

$text = "php course";
//echo strlen($text) . "<br";
//echo str_word_count($text) . "<br";
//echo strrev($text) . "<br";
//echo strpos($text , "course") . "<br";

//echo str_replace("php","js",$text) . "<br"; // old , new , phrase


#######################################################################
//explode(' ' , $xxxx) --> string => array
// implode(' ', $xxx) --> array => string

$newArray=explode(' ',$text);
var_dump($newArray);

$student = ["name"=>"heba", "age"=>25];
 $newStr= implode(' ',$student);
var_dump($newStr);

####################################################################3

$word= "                      php               ";
 echo strlen($word)."<br>";


  $newword=trim($word);
  echo strlen($newword)."<br>";    // ltrim   rtrim

  #####################################################################

  var_dump(is_int(66));
  var_dump(is_float(66));
  var_dump(is_numeric(66));
  echo max(55,66,88);
  echo min(77,99,33);
  echo round(0.6);
  echo rand(40,100);














?>