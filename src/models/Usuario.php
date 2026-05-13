<?php
namespace src\models;
use \core\Model;

class Usuario extends Model {
    public static function retornaTodosUsuarios(){
        return self::select()->get();
    }
}