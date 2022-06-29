<?php

include('../Conexion/conexion.php');



$email = $_POST['Email'];

$contraseña = $pass2;

session_start();

$_SESSION['email'] = $email;
$_SESSION[$pass2];

if (password_verify('Email', $pass2)) {
    echo '¡La contraseña es válida!';
} else {
    echo 'La contraseña no es válida.';
}


$consulta = "SELECT * FROM empleado WHERE Email = '$email'";

$resultado = mysqli_query($conn, $consulta, $pass2);

$filas = mysqli_num_rows($resultado);



if ($filas) {

    header("location:../Apartados/MenuAdministrador/administrador.php");
} else {

?>

    <?php

    include("Sesion.php");

    ?>

    <h1 class="bad">ERROR EN LA AUTENTIFICACION</h1>

<?php

}

mysqli_free_result($resultado);

mysqli_close($conn);
