<?php
    class conectar{
        //variables
        private $servidor="localhost";
        private $usuario="root";
        private $bd="login";
        private $clave="";

        /*Funcion que realiza la conexion*/
 		public function conexion(){
            $conexion=mysqli_connect($this->servidor,
                                    $this->usuario,
                                    $this->clave,
                                    $this->bd);
                                    if ($conexion->connect_error) {
                         die("Conexión fallida: " . $conexion->connect_error);
            }
            return $conexion;
        }
        /*Funcion para entrar a la pagina*/ 
        public function entrar($bdlink,$usu,$clave){
                $consulta="SELECT id,Usuario,Clave
                      FROM datos
                      WHERE Usuario='".$usu."'
                      AND Clave='".$clave."'";
                $result= mysqli_query($bdlink,$consulta);
                return $result;
        }
        /*Registrar nuevo usuario*/
        public function registrar($bdlink,$usu,$clave){
            $consulta="INSERT INTO datos(Usuario,Clave) 
                Values('$usu','$clave')";
            $result=mysqli_query($bdlink,$consulta);
            return $result;
        }
        /*Funcion para Mostrar el listado de ingredientes*/
        public function ConsultaIngredientes($bdlink){
            $consulta= "SELECT * FROM comidas";
        $result= mysqli_query($bdlink,$consulta);
        return $result;
      }
      public function creaDetalles($bdlink,$id){
        $consulta="INSERT INTO detalles(id_usuario,nombre,peso,altura,sexo,fech_nacimiento,enfermedad) VALUES('$id','','','','','','')";
        $result=mysqli_query($bdlink,$consulta);
        return $result;
    }
    public function consultaDetalles($bdlink,$id){
        $consulta="SELECT * FROM detalles WHERE id_usuario='$id'";
        $result= mysqli_query($bdlink,$consulta);
        return $result;
    }
    public function actualizaDetalles($bdlink,$id,$usu,$peso,$altura,$sexo,$fech_nacimiento,$enfermedad){
        $consulta="UPDATE detalles SET 
        nombre='$usu',peso='$peso',altura='$altura',sexo='$sexo',fech_nacimiento='$fech_nacimiento',enfermedad='$enfermedad' 
        WHERE id_usuario='$id'";
        $result=mysqli_query($bdlink,$consulta);
        return $result;
    }
}
?>