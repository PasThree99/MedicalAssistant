<?php
    $server = '127.0.0.1:3306';
    $username = 'root';
    $password = '12345678';
    $db = 'mediHelper';

    $con = mysqli_connect($server,$username,$password,$db);
    if($con -> connect_error){
        die ("Connection failed: " . $con->connect_error);
    }


    if($_GET['action'] == 'search'){

        

        $sql = 'select * from paciente where curp = "'. $_GET['id'] . '"' ;
        echo $sql;
        $result = $con->query($sql);


        $row = $result -> fetch_assoc();
        echo $row['nombre'];
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
        Search for patient
        <form action="">
            <input placeholder="patientId">
            <input type="submit" value="Search" >
        </form>
        <p>New patient? <a href="#">Register</a></p>

        <?php 
            echo $row["nombre"];
        ?>
        <br>
        <?php 
            echo $row["apellido_paterno"];
        ?>
        <br>
        <?php 
            echo $row["apellido_materno"];
        ?>
        <br>
        <?php 
            echo $row["fecha_de_nacimiento"];
        ?>
        <br>
        <?php 
            echo $row["edad"];
        ?>


    </body>
</html>