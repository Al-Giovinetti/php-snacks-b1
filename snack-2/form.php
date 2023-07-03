<?php 
    $name = $_GET["userName"];
    $mail = $_GET["userMail"];
    $age = $_GET["userAge"];
    $error = false;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="./form.php" methods="get">
        <input type="text" name="userName" id="userName">
        <input type="email" name="userMail" id="userMail">
        <input type="number" name="userAge" id="userAge">
    </form>

    <?php
    while($error == false){
        if(strlen($name) > 3){
            $error = false;
        }else{
            $error = true;
        }

        if(str_contains($mail,"@",".")){
            $error = false;
        }else{
            $error = true;
        }

        if(is_numeric($age)){
            $error = false;
        }else{
            $error = true;
        }
    }
    if($error = false){
        echo "Accesso ok";
    }else{
        echo "errore";
    }
    
    ?>
</body>
</html>


