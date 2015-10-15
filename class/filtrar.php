<?php

class filtrar {
        static function isEmail($valor){
        return filter_var($valor,FILTER_VALIDATE_EMAIL);
        } 
         static function isNumber($valor){
        return filter_var($valor,FILTER_VALIDATE_INT);
        } 
        static function isIp($valor){
        return filter_var($valor,FILTER_VALIDATE_IP);
        } 
        static function isUrl($valor){
        return filter_var($valor,FILTER_VALIDATE_URL);
        }  
        static function isFloat($valor){
        return filter_var($valor,FILTER_VALIDATE_FLOAT);
        } 
        static function isMinLength($valor,$tamano){
        return strlen($valor)>=$tamano;
        } 
        static function isLogin($valor){
        return preg_match('/^[A-Za-z][A-Za-z0-9]{5,9}$/', $valor); 
       } 
    
}
