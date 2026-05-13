<?php

namespace src\Controllers;

use \core\Controller;
use \src\models\Usuario;

class UsuarioController extends Controller
{

    public function index()
    {
        $usuarios = Usuario::retornaTodosUsuarios();
        $this->render('usuarios', ['usuarios' => $usuarios]);
    }

    public function form()
    {
        $this->render('form');
    }
}
