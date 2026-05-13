<?php $render('header'); ?>

<h1>Cadastro de usuário</h1>

<form action="/usuario" method="POST">
    <input class="border-1 block my-2 mx-2" type="text" name="nome">
    <input class="border-1 block my-2 mx-2" type="email" name="email">
    <input class="border-1 block my-2 mx-2" type="password" name="senha">
    <input class="border-1 block my-2 mx-2" type="submit" value="Cadastrar">
</form>

<?php $render('footer'); ?>