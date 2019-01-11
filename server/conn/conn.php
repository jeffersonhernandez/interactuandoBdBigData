<?php

    class ConectorBD
    {
      private $host = 'localhost';
      private $user = 'root';
      private $password = '';
      private $conexion;
  
      function initConexion($nombre_db){
        $this->conexion = new mysqli($this->host, $this->user, $this->password, $nombre_db);
        if ($this->conexion->connect_error) {
          return "Error:" . $this->conexion->connect_error;
        }else {
          return "OK";
        }
      }

      function datosUsuario($user){
        $sql = "SELECT contrasena FROM usuarios WHERE usuario='".$user."'";
        return $this->ejecutarQuery($sql);
      }
  
      function newTable($nombre_tbl, $campos){
        $sql = 'CREATE TABLE '.$nombre_tbl.' (';
        $length_array = count($campos);
        $i = 1;
        foreach ($campos as $key => $value) {
          $sql .= $key.' '.$value;
          if ($i!= $length_array) {
            $sql .= ', ';
          }else {
            $sql .= ');';
          }
          $i++;
        }
        return $this->ejecutarQuery($sql);
      }
  
      function ejecutarQuery($query){  
        return $this->conexion->query($query);
      }
  
      function cerrarConexion(){
        $this->conexion->close();
      }
  
      function nuevaRestriccion($tabla, $restriccion){
        $sql = 'ALTER TABLE '.$tabla.' '.$restriccion;
        return $this->ejecutarQuery($sql);
      }
  
      function nuevaRelacion($from_tbl, $to_tbl, $from_field, $to_field){
        $sql = 'ALTER TABLE '.$from_tbl.' ADD FOREIGN KEY ('.$from_field.') REFERENCES '.$to_tbl.'('.$to_field.');';
        return $this->ejecutarQuery($sql);
      }
  
      function insertData($tabla, $data){
        $sql = 'INSERT INTO '.$tabla.' (';
        $i = 1;
        foreach ($data as $key => $value) {
          $sql .= $key;
          if ($i<count($data)) {
            $sql .= ', ';
          }else $sql .= ')';
          $i++;
        }
        $sql .= ' VALUES (';
        $i = 1;
        foreach ($data as $key => $value) {
          $sql .= "'".$value."'";
          if ($i<count($data)) {
            $sql .= ', ';
          }else $sql .= ');';
          $i++;
        }
        
        return $this->ejecutarQuery($sql);
        //return $sql;
      }
  
      function consultarEventos(){
        /*$result = mysqli_query($con, "SELECT title, star, fechaFin usuario_id='".$id."'"");
        while($row = mysqli_fetch_assoc($result))
        $test[] = $row; 
        print json_encode($test);   */
        $sql = "SELECT * FROM eventos";
        return $this->ejecutarQuery($sql);
      }

      function eliminarEvento($id){
        $sql = "DELETE FROM eventos WHERE id =".$id."";
        return $this->ejecutarQuery($sql);
        //return $sql;
      }

      function actualizarEvento($id, $start, $end){
        $sql = "UPDATE eventos SET start = '".$start."', end ='".$start."' WHERE id ='".$id."'";
        return $this->ejecutarQuery($sql);
      }

    }
?>