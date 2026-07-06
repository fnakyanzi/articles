<?php

/** @var yii\web\View $this */
/** @var yii\bootstrap5\ActiveForm $form */
/** @var app\models\LoginForm $model */

use yii\bootstrap5\ActiveForm;
use yii\bootstrap5\Html;

$this->title = 'Intern Login';

$htmlIcon = <<<HTML
{label}<div class="input-group"><span class="input-group-text" aria-hidden="true">%s</span>{input}</div>{error}{hint}
HTML;

$labelOptions = ['class' => 'form-label fw-semibold small'];
?>

<div class="site-login d-flex align-items-center justify-content-center py-5">

    <div class="card border-0 overflow-hidden login-split-card">

        <div class="row g-0">

            <!-- Left Panel -->
            <div class="col-md-5 d-none d-md-flex login-brand-panel text-white">

                <div class="d-flex flex-column justify-content-center p-5 w-100">

                    <!-- IMAGE ADDED HERE -->
                    <div class="text-center mb-4">
                        <?= Html::img(
                            '@web/images/intern_login_illustration.svg',
                            [
                                'alt' => 'Intern Portal',
                                'class' => 'img-fluid',
                                'style' => 'max-height:180px;'
                            ]
                        ) ?>
                    </div>

                    <h2 class="fw-bold mb-3">
                        Intern Portal
                    </h2>

                    <p class="opacity-75 mb-0">
                        Login to access your internship dashboard, reports and profile.
                    </p>

                </div>

            </div>

            <!-- Right Panel -->
            <div class="col-md-7">

                <div class="p-4 p-lg-5">

                    <div class="text-center mb-4">

                        <h2 class="fw-bold">
                            Intern Login
                        </h2>

                        <p class="text-body-secondary">
                            Enter your username and password.
                        </p>

                    </div>

                    <?php $form = ActiveForm::begin([
                        'id' => 'login-form'
                    ]); ?>

                    <?= $form->field($model, 'username')->textInput([
                        'placeholder' => 'Username'
                    ]) ?>

                    <?= $form->field($model, 'password')->passwordInput([
                        'placeholder' => 'Password'
                    ]) ?>

                    <div class="d-grid mt-3">
                        <?= Html::submitButton('Login', [
                            'class' => 'btn btn-success'
                        ]) ?>
                    </div>

                    <?php ActiveForm::end(); ?>

                    <div class="text-center mt-4">

                        <p class="text-body-secondary">
                            Don't have an account?
                            <?= Html::a('Sign Up', ['site/signup']) ?>
                        </p>

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>