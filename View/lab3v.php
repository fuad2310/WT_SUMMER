<?php

include ("../control/lab3c.php");

?>

<html>
<head>
<title>Lab2 - Registatin Form</title>
</head>
<body>

<?php
echo "";
?>
<h1 align="left">Registration Form</h1>
<hr>

<table align="left">

<form action="" method="post" enctype="multipart/form-data">
    
    <tr>
        
    <td>    
    First Name:  
    <br>
    </td> 
    
    <td>
    
    <input type="text" name="fname">
    <?php 
    echo $nameErr1; 
    echo $name1Err;
    ?>
    <br>
</td>

</tr>
    <tr>
        <td>    
    Last Name:  
    <br>
    </td> 
    <td>
    <input type="text" name="lname">
    <?php 
    echo $nameErr2; 
    echo $name2Err;
    ?>
    <br>
    </td>
</tr>
    
<tr>
        
    <td>    
    
    Age:  
    <br>
    </td>
     <td>
    <input type="text" name="age">
    <br>
</td>

</tr>

    <tr>
        
    <td> 
        
    
    Designation:  
    <br>
    </td><td> 
        
    <input type="radio" name="designation" value="Junior Programmer"> Junior Programmer 
     
    <input type="radio" name="designation" value="Senior Programmer"> Senior Programmer
    
    <input type="radio" name="designation" value="Project Lead"> Project Lead
    <br>

    <?php 
    echo $designationErr; 
    ?>

</td>
</tr>

<tr> 
    
<td> 
        
Preferred languages:  
<br>
    </td>
    <td>
    
    <input type="checkbox"  name="java" value="JAVA"> JAVA
    
    <input type="checkbox"  name="php" value="PHP"> PHP
    
    <input type="checkbox"  name="c" value="C++"> C++
    
    <br>

    <?php 
    echo $vvv; 
    ?>
<br>
</td>

</tr>
    <tr>
        
    <td> 
        Email:  
        <br>
    </td>
    
    <td> 
        <input type="email" name="email">

        <?php 
        echo $emailErr; 
        ?>
        <br>
    </td>
</tr>

    <tr>
        
    <td> 
        Password: 
        <br>
    </td>
    
    <td>  
        <input type="text" name="password">
        <?php 
        echo $passwordErr; 
        echo $passwordSave; 
        ?>
        <br>
    </td>

</tr>
    
<tr>
        <td> 
        Please choose a file: 
    </td>
    
    <td>  
        
        <input type= "file" name="myfile">
    </td>

</tr>
    <tr> 
        
    <td> 
        <input type="submit" value="Submit" name="submit">
        <input type="reset" value="Reset" name="reset">
    </td>
    
    <td>
        
    </td>

</tr>

</form>
</table>

<br> <br>


</body>
</html>