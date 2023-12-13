<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Document</title>
</head>

<?php
    $height = $_POST["height"];
    $width = $_POST["width"];
    $bmi= ($width/($height**2));
    echo $bmi
?>
<body>
    
</body>
</html>