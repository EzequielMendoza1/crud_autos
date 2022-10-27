<?php 
    function conexion() {
        $servidor = 'localhost';
        $usuario = 'ezequielmendoza';
        $password = 'EzeMen02Amk';
        $bd = 'autos';
        $puerto = '3306';
        //abre una nueva coneccion al servidor de mysql
        
        return mysqli_connect(
            $servidor,
            $usuario,
            $password,
            $bd,
            $puerto
        );
    }
?>