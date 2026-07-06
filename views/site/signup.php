<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\University;

/** @var yii\web\View $this */
/** @var app\models\Interns $model */
/** @var ActiveForm $form */

?>

<div class="interns-create">

    <?php $form = ActiveForm::begin(); ?>

    <div class="row">
        <div class="col-md-6">
            <?= $form->field($model, 'first_name')->label('First Name')->textInput(['placeholder' => 'Enter first name']) ?>
        </div>

        <div class="col-md-6">
            <?= $form->field($model, 'last_name')->label('Last Name')->textInput(['placeholder' => 'Enter last name']) ?>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <?= $form->field($model, 'username')->label('Username')->textInput(['placeholder' => 'Enter username']) ?>
        </div>

        <div class="col-md-6">
            <?= $form->field($model, 'email')->label('Email')->textInput(['placeholder' => 'Enter email']) ?>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <?= $form->field($model, 'password_hash')->passwordInput()->label('Password')->textInput(['placeholder' => 'Enter password']) ?>
        </div>

        <div class="col-md-6">
            <?= $form->field($model, 'university_id')->dropDownList(
                ArrayHelper::map(
                    University::find()->all(),
                    'id',
                    'university_name'
                ),
                ['prompt' => 'Select University']
            )->label('University') ?>
        </div>
    </div>

    <br>

    <div class="row">
        <div class="form-group">
            <?= Html::submitButton('Sign Up', ['class' => 'btn btn-secondary']) ?>
        </div>
    </div>

    <?php ActiveForm::end(); ?>

</div>