?php
// Calculator Script v1
// Copyright (C) 2007 RageD

// Define to make this all one document
$page = $_GET['page'];

// Defining the "calc" class
class calc 
{
    var $number1;
    var $number2;

    function add($number1,$number2)
    {
    }

    function subtract($number1,$number2)
    {
    }

    function divide($number1,$number2)
    {
    	echo $number1/$number2;
    }

    function multiply($number1,$number2)
    {                   
    }
}
$calc = new calc();
?>

<TITLE>PHP Calculator v1</TITLE>
<form name="calc" action="?page=calc" method="POST">
Number 1: <input type=text name=value1><br>
Number 2: <input type=text name=value2><br>
Operation: <input type=radio name=oper value="add">Addition <input type=radio name=oper value="subtract">Subtraction <input type=radio name=oper value="divide">Division <input type=radio name=oper value="multiply">Multiplication</input><br>
<input type=submit value="Calculate">
</form>
<?php
if($page == "calc"){
$number1 = $_POST['value1'];
$number2 = $_POST['value2'];
$oper = $_POST['oper'];
     if(!$number1){
          echo("You must enter number 1!");
          exit;
     }
     if(!$number2){
          echo("You must enter number 2!");
          exit;
     }
     if(!$oper){
          echo("You must select an operation to do with the numbers!");
          exit;
     }
     if(!eregi("[0-9]", $number1)){
          echo("Number 1 MUST be numbers!");
          exit;
     }
     if(!eregi("[0-9]", $number2)){
          echo("Number 2 MUST be numbers!");
          exit;
     }
     if($oper == "add"){
          $calc->add($number1,$number2);
     }
     if($oper == "subtract"){
          $calc->subtract($number1,$number2);
     }
     if($oper == "divide"){
          $calc->divide($number1,$number2);
     }
     if($oper == "multiply"){
          $calc->multiply($number1,$number2);
     }
}
?> 
