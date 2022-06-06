<?php session_start();?>
<?php include "../config/db.php";?>

<?php
  if(isset($_POST['login'])) {
    $usuario = $_POST['usuario'];
    $password = $_POST['password'];
    
    $query = $conexion -> prepare("SELECT * FROM usuarios WHERE usuario=:usuario and password=:password"); 
    $query->bindParam(':usuario',$usuario);
    $query->bindParam(':password',$password);
    $query->execute();
    $resultado = $query->fetch(PDO::FETCH_ASSOC);
    
    $user_name = null;
    $user_password = null;
    
    if($resultado){
        $user_id = $resultado['id'];
        $user_name = $resultado['usuario'];
        $user_password = $resultado['password'];
        $user_firstname = $resultado['nombre'];
        $user_lastname = $resultado['apellido'];
        $user_role = $resultado['rol'];
    }
  }

  if($usuario == $user_name && $password == $user_password){

    $_SESSION['usuario'] = $user_name;
    // $_SESSION['db_first_name'] = $db_first_name;
    $_SESSION['nombre'] = $user_firstname;
    $_SESSION['apellido'] = $user_lastname;
    $_SESSION['rol'] = $user_role;
    // header("Location: ../admin");
    header("Location: ../Admin/index.php");
  } else {
    header("Location: ../index.php");
  }
?>