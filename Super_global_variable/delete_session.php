<?php
session_start();

session_unset();

session_destroy();



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
    <?php
    
    if(isset($_SESSION['name'])){
        echo "favcolor" .$_SESSION["favcolor"];
    }else{
        echo 'session is destroy';
    }
    
    ?>
</body>
</html>