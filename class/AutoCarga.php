<?php

class AutoCarga {
    static function cargar($clases){
        $clases = str_replace("\\", "/", $clases);
        $archivo = "class/" . $clases . ".php";
        require $archivo;       
    }
}
spl_autoload_register('AutoCarga::cargar');
