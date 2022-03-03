









<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<label>Klassenformulier</label> <br>
    <label>Ik zit in klas:</label> 
<select id="naam" name="naam">
<form class= "Form" method="get" action="echo.php">

</body>
</html>
<?php
$klassen = array("8A", "8B", "8C", "8D", "8E", "9A", "9B", "9C", "9D", "9E");
foreach ($klassen as $klas)
    // if($klassen == $klas){
    //     echo "<option value='1Klas' selected>1klas</option>";
    // }
    // else{ 
        echo "<option value='$Klas'>$klas</option>";
    // }
?>
</select> <br>
<button class= "button">Verzenden</button>

</form>