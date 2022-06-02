<?php

$number1       =$_POST["number1"];
$number2       =$_POST["number2"];
//$operation     =$_POST["operation"];

if($number1=="" || $number2=="")
{
    echo "Input valid numbers <br>";
}
else
{
    if(isset($_POST["$operation"]))
    {
        $operation     =$_POST["operation"];
        if($operation=="+")
        {
            echo "Addition Result is " ,  $number1 + $number2;
        }

        if($operation=="-")
        {
            echo "Substraction Result is " ,  $number1 - $number2;
        }

        if($operation=="*")
        {
            echo "Multiplication Result is " ,  $number1 * $number2;
        }

        if($operation=="/")
        {
            echo "Division Result is " , $number1 / $number2;
        }
    }
    else
    {
        echo "Select any operation <br>";
    }
}

?>