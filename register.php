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
        $curp = $_GET['id'];
        $name = $_GET['name'];
        $ln1 = $_GET['ln1'];
        $ln2 = $_GET['ln2'];
        $date = $_GET['date'];
        $hg = $_GET['height'];

        $sql = "insert into pacientes (curp,nombre,apellido_paterno,apellido_materno,fecha_de_nacimiento,estatura) values ('$curp ',' $name ',' $ln1 ',' $ln2  ','  $date  ',' $hg ')";
        
        $con->query($sql);
        
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
            <input placeholder="Name" name="name">
            <input placeholder="Last name 1" name="ln1">
            <input placeholder="Last name 2" name="ln2">
            <input placeholder="" name="date" type="date">
            <input placeholder="Height" name="height" type="number" min=".30" max="2.2" value="1.60" step="0.01">
            <input type="submit" value="Search" name="submit" >
        </form>
       

    </body>
</html>