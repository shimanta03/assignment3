<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h3 style=color:red>2.Take a variable named "key", now set the key value by passing setter and print it via getter method.</h3>
    <?php
    require "Keycls.php";
    $key=new Keycls();
    $key->setter('mmm I forgot');
    $key->getter();
    ?>
</body>
</html>