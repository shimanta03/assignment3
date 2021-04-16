<?php 
    include 'SuperPower.php';
    include 'CaptainAmerica.php';
    include 'IronMan.php';
    include 'Thor.php';


    $captain=new CaptainAmerica();
    $iron=new IronMan();
    $thor=new Thor();
    
    
    ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3 style=color:red>3.Make a Class SuperPower. There will be many kind of super power methods in the class. Like Flying , LaserEye , etc. Now Make the classes like IronMan, CaptainAmerica, Thor . Inherit the SuperPower Class by the following classes. Now print the proper power method from the Superhero class.</h3>
    <?php 

    $captain->Strength();
    echo "<br>";
    $iron->LaserEye();
    echo "<br>";
    $thor->flying();
    
    
    
    
    
    ?>

   
</body>
</html>