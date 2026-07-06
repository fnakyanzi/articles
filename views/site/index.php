<?php

$this->title = "Welcome";

use yii\helpers\Html;

?>

<?= Html::img('@web/images/welcome.png', [
    'alt' => 'Background', 
    'style' => '
        position: fixed; 
        top: 0; 
        left: 0; 
        width: 100vw; 
        height: 100vh; 
        object-fit: cover; 
        z-index: -2;
    '
]) ?>

<div style="
    position: fixed; 
    top: 0; 
    left: 0; 
    width: 100vw; 
    height: 100vh; 
    background-color: rgba(0, 0, 0, 0.5); 
    z-index: -1;
"></div>

<div class="position-relative text-white" style="z-index: 1; padding: 100px 20px; text-shadow: 1px 1px 4px rgba(0,0,0,0.7);">

    <h1 class="mb-3 text-white fw-bold">Welcome to Intern Portal</h1>

    <p class="text-light fs-5 mb-4">
        A simple system for managing interns, universities, and activities.
    </p>

    <div class="d-flex align-items-center gap-3">
        <?= Html::a(
            'Login',
            ['site/login'],
            ['class' => 'btn btn-success btn-lg px-4']
        ) ?>
        
        <span class="fs-5 text-light">or</span>
        
        <?= Html::a(
            'Get Started',
            ['site/signup'],
            ['class' => 'btn btn-outline-light btn-lg px-4']
        ) ?>
    </div>

</div>