<?php

include 'conexion.php';
$con = connect();
$errores = '';

if (isset($_POST['submit'])) {
    $id=$_POST['id'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    //! Validacion del nombre y apellido

    if (!empty($fname)) {
        $fname = filter_var($fname, FILTER_SANITIZE_STRING);
    } else {
        $errores .= ' Porfavor agregue un nombre <br>';
    }
    if (!empty($lname)) {
        $lname = filter_var($lname, FILTER_SANITIZE_STRING);
    } else {
        $errores .= ' Porfavor agregue un apellido <br>';
    }

    //! SE MUESTRA LA VALIDACION DE UN CORREO ELECTRONICO
    if (!empty($email)) {
        $email = filter_var($email, FILTER_SANITIZE_EMAIL);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo 'Por favor ingrese un email valido';
        } else {
        }
    } else {
        $errores .= ' Porfavor agregue un email';
    }

    if (!empty($phone)) {
        $phone = filter_var($phone, FILTER_SANITIZE_STRING);
    } else {
        $errores .= ' Porfavor agregue un Teléfono valido <br>';
    }

    //! Inserción
    $sql = "UPDATE Students SET fname='$fname',lname='$lname',email='$email',phone='$phone' WHERE id = '$id' ";
    $query = mysqli_query($con, $sql);

    if ($query) {
        header('Location: index.php');
    }
}
?>


