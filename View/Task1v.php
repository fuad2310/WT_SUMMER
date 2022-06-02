<html>
<head>
<title>Lab Task 1</title>
</head>
<body>

<?php


echo "";
?>
<h1>Calculation</h1>

<table align="center">

<form action="../control/Task1c.php" method="post">
    
<label for="number1">Number 1:</label><br>
<input type="text" name="number1"><br><br>
<label for="number2">Number 2:</label><br>
<input type="text" name="number2"><br><br>

Choose Operation:<br><br>

    
        <input type="radio" name="operation" value="+"> + 
        <input type="radio" name="operation" value="-"> - 
        <input type="radio" name="operation" value="*"> * 
        <input type="radio" name="operation" value="/"> /
<br><br>

<input type="submit" value="Result">
    

</form>
</table>

</body>
</html>