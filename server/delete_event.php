<?php
    require('./conn/conn.php');
    
    if(isset($_POST['id'])){
        $id=$_POST['id'];
    }else{
        return "Sin id";
    }
    $con = new ConectorBD();
    $con->initConexion("calendario");
    $datos['id'] = $id;
    $sql=$con->eliminarEvento($id);
    $php_response=array("msg"=>"OK","data"=>2,"id"=>$id, "sql"=>$sql); 
    echo json_encode($php_response);
 ?>
