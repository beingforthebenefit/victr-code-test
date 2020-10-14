<h1>Details for <?= $model['name'] ?></h1>

<a href="/"><- back</a>

<table>
    <?php foreach ($model as $key => $value) { ?>
        <tr>
            <td><?= $key ?></td>
            <td><?= $value ?></td>
        </tr>
    <?php } ?>
</table>