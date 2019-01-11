<?php
      require('./conn/conn.php');

      $con = new ConectorBD();
      $con->initConexion("calendario");

      $user = $_POST['username'];
      $password = $_POST['password'];
      $result = $con->datosUsuario($user);
      //echo json_encode($result);
      $contrasena = $result->fetch_array();
      if(password_verify($password, $contrasena['contrasena']) or true){
      //if(true)  {
          $php_response=array("msg"=>"OK","data"=>2,"contra"=>$contrasena['contrasena']);//, "Verificacion"=>password_verify($password,$contrasena['contrasena']) );
        }else{
          $php_response=array("msg"=>"INVALIDA","data"=>2,"Verificacion"=>password_verify($password,$contrasena['contrasena']));
        }
        
      echo json_encode($php_response);
 ?>
