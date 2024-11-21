<?php
$baseDatos = new mysqli("127.0.0.1", "ico", "1234", "paginatitulacion", 3306);
if ($baseDatos->connect_errno) {
    echo "Fallo al conectar Base de datos";
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $query = 'INSERT INTO formulario (nombres_fmr, apellido_paterno_fmr, apellido_materno_fmr, numero_cuenta_fmr, numero_celular_fmr, correo_electronico_fmr, plan_estudios_fmr, id_mtc) VALUES (?, ?, ?, ?, ?, ?, ?, ?)';
    if($statement = $baseDatos->prepare($query)){
    $statement->bind_param("sssssssi", $_POST['nombres'], $_POST['apellidoPaterno'],
    $_POST['apellidoMaterno'], $_POST['numeroCuenta'],$_POST['telefonoCelular'], 
    $_POST['correoElectronico'], $_POST['planEstudio'], $_POST['modalidad']);
    if ($statement->execute()) {
        $mensaje = "Formulario enviado con exito!";
            echo "<script>
            localStorage.setItem('mensaje', '" . addslashes($mensaje) . "');
            window.location.href = 'index.php';
            </script>";
    }else{
        $mensaje = "ERROR, no se pudo enviar el formulario!";
            echo "<script>
            localStorage.setItem('mensaje', '" . addslashes($mensaje) . "');
            window.location.href = 'index.php';
            </script>";
    }
    }
}
?>