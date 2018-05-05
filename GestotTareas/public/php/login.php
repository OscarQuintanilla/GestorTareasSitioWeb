<?php
    include("conexion.php");
	$mail = $_POST["txtMail"];
    $contra = $_POST["txtContra"];
    $consulta = "select * from usuarios where correo = '$mail' and password ='$contra'";
    $result = $conexion->query($consulta);
    if($result->num_rows > 0){
        $registro=$result->fetch_assoc();
        session_start();
        $_SESSION['Logeado'] = true;
        $_SESSION['usuario'] = $mail;
        header('location: ../html/tareas.php');
    }else{
?>
    <script type="text/javascript">
        localStorage.setItem('failSesion', 'true');
        window.location.href = "http://127.0.0.1/Shamy/index.html"; 
    </script>
<?php
    }
?>