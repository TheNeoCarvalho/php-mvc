<?php $render('header'); ?>

<h1>Usuários</h1>
<table class="w-full text-left">
    <tr class="bg-black text-white">
        <td class="py-2 px-6">#</td>
        <td class="py-2 px-6">Nome</td>
        <td class="py-2 px-6">Email</td>
    </tr>

    <?php
    foreach ($usuarios as $usuario) {
        echo '
        <tr>
            <td class="py-2 px-6">' . $usuario['id'] . '</td>
            <td class="py-2 px-6">' . $usuario['nome'] . '</td>
            <td class="py-2 px-6">' . $usuario['email'] . '</td>
        </tr>';
    }
    ?>
</table>

<?php $render('footer'); ?>