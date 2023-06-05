<!-- 
    Crie um array associativo com chaves com valores de nomes, e valores com uma pontuação;
    Ordene os dados do maior para o menor;
    Exiba uma lista, simulando um ranking em HTML.
-->

<?php
$ranking = [
    "João" => 100,
    "Maria" => 200,
    "José" => 300,
    "Pedro" => 400,
    "Ana" => 500
];

arsort($ranking);

?>


<table>
    <thead>
        <tr>
            <th>Nome</th>
            <th>Pontuação</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($ranking as $nome => $pontuacao) : ?>
        <tr>
            <td><?= $nome ?></td>
            <td><?= $pontuacao ?></td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>