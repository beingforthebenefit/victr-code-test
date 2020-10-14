<h1>The 30 Most Popular PHP Projects on GitHub</h1>

<table>
    <thead>
        <tr>
            <th>Name</th>
            <th>Description</th>
            <th>Stars</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($model as $repository) { ?>
            <tr>
                <td>
                    <a href="?id=<?= $repository['repositoryId'] ?>">
                        <?= $repository['name'] ?>
                    </a>
                </td>
                <td>
                    <?= $repository['description'] ?>
                </td>
                <td>
                    <?= $repository['stars'] ?>
                </td>
            </tr>
        <?php } ?>
    </tbody>
</table>