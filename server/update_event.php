<?php
     require('./conn/conn.php');
    
     if(isset($_POST['id'])){
         $id=$_POST['id'];
     }else{
         return "Sin id";
     }
     $start = $_POST['start_date'];
     $end = $_POST['end_date'];
     $con = new ConectorBD();
     $con->initConexion("calendario");
     
     $sql=$con->actualizarEvento($id, $start, $end);
     $php_response=array("msg"=>"OK","data"=>2,"id"=>$id, "sql"=>$sql, "start"=>$start, "end"=>$end); 
     echo json_encode($php_response);
 ?>
