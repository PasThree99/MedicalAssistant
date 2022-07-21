<?php
    $server = '127.0.0.1:3306';
    $username = 'root';
    $password = '12345678';
    $db = 'mediHelper';

    $con = mysqli_connect($server,$username,$password,$db);
    if($con -> connect_error){
        die ("Connection failed: " . $con->connect_error);
    }


    if(isset($_GET['submit'])){
        echo "yep";
    }
?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oracle Medical Assistant</title>
    <link rel="stylesheet" href="indexStyles.css">
</head>
    <body>
        
        Register a patient
        <form action="" method="get">
            <input placeholder="CURP" name="id">
            <input placeholder="Name" name="id">
            <input placeholder="Last name 1" name="id">
            <input placeholder="Last name 2" name="id">
            <input placeholder="" name="date" type="date">
            <input placeholder="Heigth" name="id" type="number" min=".30" max="2.2" value="1.60" step="0.01">
            <input type="submit" value="Search" name="submit" >
        </form>
       

    </body>
</html>