<?php
        require('./conn/conn.php');

        $con = new ConectorBD();
        if($con->initConexion("calendario")=="OK"){
            $respuesta = $con->consultarEventos();
            
            $rows = array();
            while($r = mysqli_fetch_assoc($respuesta)) {
                $rows[] = $r;
            }
            $php_response=array("msg"=>"OK","eventos"=>$rows);   
            echo json_encode($php_response);
        
            $con->cerrarConexion();
        }else {
            echo "Se presentó un error en la conexión";
        }
 ?>
