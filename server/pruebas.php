<?php
      require('./conn/conn.php');

      $con = new ConectorBD();
      $con->initConexion("calendario");
      $user = 'juan@hotmail.com';
      $password = 'prueba';
      //$sql = "SELECT contrasena FROM usuarios WHERE usuario='".$user."'";
      $result=$con->datosUsuario($user);
      $contrasena = $result->fetch_array();
      $contrasenas=$contrasena['contrasena'];
      if(password_verify($password,$contrasena['contrasena'])){
        $respuesta['msg'] = "OK";
      }else{
        $respuesta['msg'] = "INVALIDA";
      }  
    
      echo json_encode($respuesta);

?>
