<?php

use yii\helpers\Html;

?>

<h2>All Articles</h2>

<br>
<div>
    <h4>Displays all articles</h4>
</div>
<br><br>

<table class="table table-bordered">

    <thead>

        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Description</th>
            <th>Rating</th>
            <th>Created On</th>
            <th>Actions</th>
        </tr>

    </thead>

    <tbody>

        <?php foreach ($query as $value) { ?>

            <tr>

                <td><?= $value['id'] ?></td>

                <td><?= $value['title'] ?></td>

                <td><?= $value['description'] ?></td>

                <td><?= $value['rating'] ?></td>

                <td><?= $value['created_on'] ?></td>

                <td>

                    <?= Html::a('Edit', ['update', 'id' => $value['id']], ['class' => 'btn btn-primary btn-sm']) ?>

                    <?= Html::a(
                        'Delete',
                        ['delete', 'id' => $value['id']],
                        [
                            'class' => 'btn btn-danger btn-sm',
                            'data' => [
                                'confirm' => 'Are you sure?',
                                'method' => 'post',
                            ],
                        ]
                    ) ?>

                </td>

            </tr>

        <?php } ?>

    </tbody>

</table>