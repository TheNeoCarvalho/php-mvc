<?php

namespace src\models;

use \core\Model;

class Usuario extends Model
{
    public static function retornaTodosUsuarios()
    {
        return self::select()->get();
    }

    public static function criarUsuario($dados)
    {
        return self::insert($dados)->execute();
    }

    public static function deletar($id)
    {
        return self::delete()->where('id', '=', $id)->execute();
    }
}
