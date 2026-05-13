<?php $render('header'); ?>

<h1>Usuários</h1>
<?php
    foreach ($usuarios as $usuario){
        echo $usuario['nome'];
    }
?>

<?php $render('footer'); ?>