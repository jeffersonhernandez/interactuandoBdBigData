<?php
      require('conn/conn.php');

      $con = new ConectorBD();
      
      if ($con->initConexion('calendario')=='OK') {
    
        $usuariouno['usuario'] = "jose@hotmail.com";
        $usuariouno['contrasena'] = password_hash('prueba', PASSWORD_DEFAULT);
        $usuariouno['nombre'] = "jose perez";
        $usuariouno['fechaNacimiento'] = "2000-11-23";

        $usuariodos['usuario'] = "juan@hotmail.com";
        $usuariodos['contrasena'] = password_hash('prueba', PASSWORD_DEFAULT);;
        $usuariodos['nombre'] = "juan perez";
        $usuariodos['fechaNacimiento'] = "2000-11-23";

        $usuariotres['usuario'] = "pedro@hotmail.com";
        $usuariotres['contrasena'] = password_hash('prueba', PASSWORD_DEFAULT);
        $usuariotres['nombre'] = "pedro pablo";
        $usuariotres['fechaNacimiento'] = "2000-12-23";

        $con->insertData('usuarios', $usuariodos);
        $con->insertData('usuarios', $usuariotres);

        if ($con->insertData('usuarios', $usuariouno)) {
          echo "Se insertaron los datos correctamente";
        }else echo "Se ha producido un error en la inserción";
    
        $con->cerrarConexion();
    
      }else {
        echo "Se presentó un error en la conexión";
      }
    
 ?>
