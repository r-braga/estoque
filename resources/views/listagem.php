<html>
<body>
    <h1></h1>
    <table>
       <?php foreach ($produtos as $p): ?>
        <tr>
            <td><?= $p->nome ?></td>
            <td><?= $p->valor ?></td>
            <td><?= $p->descricao ?></td>
            <td><?= $p->quantidade ?></td>
        </tr>
        <?php endforeach ?>
    </table>
</body>
</html>

