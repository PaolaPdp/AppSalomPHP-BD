<?php

    function obtener_servicio(){
        try {
             //importar las credenciales
                require 'database.php';

             //consulta SQL

             $sql = "select * from servicios limit 7;";

             //realizar la consulta
            
             $consulta = mysqli_query($db, $sql);
             return $consulta;

             //Acceder a los resultados
            echo "<pre>";
            var_dump(mysqli_fetch_assoc($consulta));
            echo "</pre>";
             
            
        } catch (\Throwable $th) {
            var_dump($th);
        }
    }

    obtener_servicio();
?>