<div class="body-header__wrap">
    <h1 class="body__header">The 30 Most Popular PHP Projects on GitHub</h1>
</div>

<div class="nav-link__wrap">
    <a class="base__link" href="/?a=update">
        Update Table
    </a>
</div>

<div class="body-table__wrap">
    <table class="body__table">
        <thead class="body-table__head">
            <tr class="body-table-head__row">
                <th class="body-table-head__cell">Name</th>
                <th class="body-table-head__cell">Description</th>
                <th class="body-table-head__cell">Stars</th>
            </tr>
        </thead>
        <tbody class="body-table__body">
            <?php foreach ($model as $repository) { ?>
                <tr class="body-table-body__row">
                    <td class="body-table-body__cell">
                        <a class="base__link" href="?id=<?= $repository['repositoryId'] ?>">
                            <?= $repository['name'] ?>
                        </a>
                    </td>
                    <td class="body-table-body__cell">
                        <?= $repository['description'] ?>
                    </td>
                    <td class="body-table-body__cell">
                        <?= $repository['stars'] ?>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>