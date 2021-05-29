<?php
    header("Content-Type: application-json; charset=utf-8");

    $obj = new stdClass();
    $obj ->nombre = (string) "Jaime";
    $obj ->edad = (int) 27;
    $obj ->hobbies = (array) ["Videojuegos", "Ultimate", "Musica", "Ejercicio"];
    $obj ->saludar = function (object $arg): string{
            //Aca van los parametros de la funcion, el primero($arg) es requerido, y string $a="a" seria opcional
        return <<<MENSAJE
            Hola ${!${''} = $arg->nombre} como estas?
        MENSAJE;
    };
    $obj ->mensaje = function (){
        $arg= (func_num_args()) ?
         (object) func_get_args()[0] 
         : (object) array(
             'Nombre' => (string)'Obligatorio'
         );
        return $arg;
        // if (func_num_args()) {//func_num_args me devuelve el numero de argumentos
        //     //$arg = func_get_args();// func_get_args me devuelve los argumentos en un array
        //     return $arg;  
        // }else{
        //     return null;
        // }
        
    };
    // print_r(($obj->saludar) ((object) array("nombre"=>"Juan")));
    print_r(($obj->mensaje)(array('Nombre'=>"Jaime", "edad" => 27)));
    // $json = (string) json_encode($obj);
    // $json2 = (array) json_decode($json);
    // print_r($json);
    // echo "<br>"; 
    // print_r($json2);

?>