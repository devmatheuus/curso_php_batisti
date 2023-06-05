<!-- 
    Crie um array associativo com nomes e idades;
    Imprima estes dados em uma tabela HTML;
    Dica: utilize as tags do elemento table
-->

<?php
$pessoas = [
    "João" => 20,
    "Maria" => 30,
    "José" => 40,
    "Pedro" => 50,
    "Ana" => 60

];
?>


<table>
    <tr>
        <th>Nome</th>
        <th>Idade</th>
    </tr>
    <?php foreach ($pessoas as $nome => $idade) : ?>
    <tr>
        <td><?= $nome ?></td>
        <td><?= $idade ?></td>
    </tr>

    <?php endforeach ?>
</table>