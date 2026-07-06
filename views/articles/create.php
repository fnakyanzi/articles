<?php

use yii\widgets\ActiveForm;

use yii\helpers\Html;

/** @var app\models\Articles $article */

$form = ActiveForm::begin();
?>

<?= $form->field($article, 'title') ?>

<?= $form->field($article, 'description')->textarea(['rows' => 4]) ?>

<?= $form->field($article, 'rating')->dropDownList([
    1 => '1',
    2 => '2',
    3 => '3',
    4 => '4',
    5 => '5',
], ['prompt' => 'Select Rating']) ?>

<br>
<div>
    <?= Html::submitButton('Save Article', ['class' => 'btn btn-success']) ?>
</div>


<?php ActiveForm::end(); ?>
