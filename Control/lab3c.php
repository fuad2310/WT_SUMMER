<?php

$nameErr1="";
$nameErr2="";
$name1Err="";
$name2Err="";
$designationErr="";
$vvv ="";
$emailErr="";
$passwordSave="";
$passwordErr="";






if(isset($_POST["submit"]))
{


    $formdata=array
    {
        'firstname'=> $_POST["fname"],
        'lastname'=> $_POST["lname"],
        'email'=> $_POST["email"],
        
    }
    







$fname     =$_REQUEST["fname"];
$lname     =$_REQUEST["lname"];

if($fname=="")
{
    $nameErr1= "First Name Required. <br>";
}
if ($lname=="") 
{
    $nameErr2= "Last Name Required. <br>";
}
if($fname!="" || $lname!="")
{
if(is_numeric($_REQUEST["fname"]))
{
    $name1Err=  "First name  should not contain numeric value.<br>";

    if(is_numeric($_REQUEST["lname"]))
    {
        $name2Err=  "Last Name should not contain numeric value.<br>";
    }
    else
    {
        echo "Last Name           : ", $lname ,"<br>" ;
    }
}
else
{
    $fname     =$_REQUEST["fname"];
    $lname     =$_REQUEST["lname"];

    echo "First Name          : ", $fname ,"<br>" ;
    if(is_numeric($_REQUEST["lname"]))
    {
        $name2Err= "Last Name should not contain numeric value.<br>";
    }
    else
    {
        echo "Last Name           : ", $lname ,"<br>" ;
    }
}
}

if(isset($_REQUEST["designation"]))
{
    $designation = $_REQUEST["designation"];
    
    //echo "Designation must be selected. <br>";
    if($designation =="Junior Programmer")
    {
        
        echo "Designation     :", $designation, "<br>";
    }
    if($designation =="Senior Programmer")
    { 
        
        echo "Designation     :", $designation, "<br>";
    }
    if($designation =="Project Lead")
    { 
        
        echo "Designation     :", $designation, "<br>";
    }

}
else
{
    $designationErr= "Designation must be selected. <br>";
}



if(!isset($_REQUEST["java"]) && !isset($_REQUEST["php"]) && !isset($_REQUEST["c"]))
{
    $vvv = "Preferred language must be selected.<br>";
    //echo $vvv,"<br>";
    
}
else
{
    echo "Preferred language   :  ";
    if(isset($_REQUEST["java"]))
    {
        $java= $_REQUEST["java"];
        echo $java, " ";
    }
    if(isset($_REQUEST["php"]))
    { 
        $php= $_REQUEST["php"];
        echo $php, " ";
    }
    if(isset($_REQUEST["c"]))
    {
        $c = $_REQUEST["c"];
        echo $c, " ";
    }
    echo "<br>";
}


$email = $_REQUEST["email"];
if($email=="")
{
    $emailErr= "Email should not be empty.<br>";
}
else
{
    echo "Email             :", $email , "<br>";
}






echo $_FILES["myfile"]["name"];
if(move_uploaded_file($_FILES["myfile"]["tmp_name"],$_FILES["myfile"]["name"]))
{
    echo "File uploaded";
}
else
{
    echo "Uploading error!";
}







$password=$_REQUEST["password"];
if(strlen($password)<6)
{
    $passwordErr= "Password should be more than 6 characters. <br>";
}
else
{
    $passwordSave= "Password Successfully Saved...!!";
}
}
?>