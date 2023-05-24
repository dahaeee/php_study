<?php
ini_set('display_errors', '0');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>생활 코딩 - PHP</title>
</head>
<body>
    <div>[POST]</div>
    <?php 
        echo "id : ".$_POST['id'].', password : '.$_POST['password']; 
    ?>
    <br><br>
</body>
</html>