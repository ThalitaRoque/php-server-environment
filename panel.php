<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel Php</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    
</head>
<body style="background-color: #f0dcf6">
<?php
session_start();

if (isset($_SESSION["user"])) {
    echo "Correct";
} else {
    header("Location: index.php");
}
?>
<h1>ADMIN PANEL</h1>
    <?php
    print_r($_SESSION);

    echo "<br><br>"
    ?>
    
    <div>
       <button type="button" class="btn btn-primary"><a href="close_session.php" style="color: #f0dcf6">Cerrar sesión</a></button> 
    </div>
</body>
</html>