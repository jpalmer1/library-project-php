<?php
// variable examples 
$myNewString = "John";
echo $myNewString ;// displays John
echo "<br>";
echo "<br>";
echo "<br>";
echo ("<br>My new String Variable is  $myNewString ");//displays to screen the text and the String variable
$myfist_num = 34;//int
$second_num = 3456;
 echo "<br> My fist Int is $myfist_num ";//displays to screen the text and the int variable
 echo "<br> My second Int Is $second_num ";
 $current_age = $myfist_num;
 echo ("<br> Hello $myNewString you are $current_age years old<br>");// using the variables 
echo ( $myNewString." is the name of the string and the int age is ". $current_age);//concatenating variables with the dot
 
 $mydouble =2.356;//  double , has decimals
 $myotherDouble = 1.235;
 echo "<br>Int 1: $mydouble";//displays to screen the text and the Double variable
echo  "<br>Int 2: $myotherDouble";
$addDouble =  $mydouble+ $myotherDouble;// adding the two doubles and put answer into new variable
echo "<br> These two doubles add up to : $addDouble"; 
$notEmpty =null;// variable null
$numbers =array(1,2,3,4); //array of numbers
foreach( $numbers as $value ) {
            echo "<br>Value is $value <br>";//displays to screen the contents of the array
         }
$numbers[0]=" one";//array contains strings
$numbers[1]=" two";
$numbers[2]=" three";
$numbers[3]=" four";
foreach( $numbers as $value ) {
            echo "<br>Value is $value <br>";//displays to screen the contents of the array
         }

?>