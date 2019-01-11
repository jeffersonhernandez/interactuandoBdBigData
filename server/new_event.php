<?php
    
    require('./conn/conn.php');
    
    if(isset($_POST['titulo'])){
        $titulo=$_POST['titulo'];
    }else{
        return "Sin titulo";
    }
    $start_date=$_POST['start_date'];
    $end_date=$_POST['end_date'];
    $end_hour=$_POST['end_hour'];
    $start_hour=$_POST['start_hour'];

    $con = new ConectorBD();
    $con->initConexion("calendario");
       // $datos['usuario_id'] = "'".$_SESSION['id']."'";
        $datos['title'] = $titulo;
        $datos['start'] = $start_date;
        $datos['end'] = $end_date;
        $datos['horaFin'] = $end_hour;
        $datos['horaInicio'] = $start_hour;
        $sql=$con->insertData('eventos', $datos);
        $resul = $con->ejecutarQuery("SELECT AUTO_INCREMENT from information_schema.TABLES where TABLE_SCHEMA='calendario' and TABLE_NAME='eventos'");
        $id = $resul->fetch_array();
        $php_response=array("msg"=>"OK","data"=>2,"titulo"=>$titulo,"start"=>$start_date,"end"=>$end_date,"inicio"=>$start_hour, "fin"=>$end_hour, "sql"=>$sql, "id"=>$id["AUTO_INCREMENT"]-1); 
        echo json_encode($php_response);
 ?>
