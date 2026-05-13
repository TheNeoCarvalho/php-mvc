<?php

use core\Router;

$router = new Router();

$router->get('/', 'HomeController@index');
$router->get('/sobre/{nome}', 'HomeController@sobreP');
$router->get('/sobre', 'HomeController@sobre');

$router->get('/contato', 'ContatoController@index');

//Listar usuários
$router->get('/usuarios', 'UsuarioController@index');
//Exibir um usuário
$router->get('/usuario/mostar/{id}', 'UsuarioController@mostrar');
//Formulario para criar um usuário
$router->get('/form', 'UsuarioController@form');
//Criar um usuário
$router->post('/usuario', 'UsuarioController@criar');
//Atualizar um usuário
$router->put('/usuario/atualizar/{id}', 'UsuarioController@atualizar');
//Deletar um usuário
$router->delete('/usuairo/deletar/{id}', 'UsuarioController@deletar');