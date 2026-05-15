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

    public function salvar(){
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            if(isset($nome) && isset($email) && isset($senha)){
                $nome = $_POST['nome'];
                $email = $_POST['email'];
                $senha = $_POST['senha'];
                Usuario::criarUsuario([
                    'nome' => $nome,
                    'email' => $email,
                    'senha' => $senha
                ]);
                $this->redirect('/usuarios');
            }
            echo "Erro";
        }

    }
}
