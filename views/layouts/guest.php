<?php
use yii\helpers\Html;
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Intern Portal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

<nav class="navbar navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="/">Intern Portal</a>

        <div>
            <a href="/site/login" class="btn btn-outline-light btn-sm">Login</a>
        </div>
    </div>
</nav>

<div class="container mt-5 text-center">
    <?= $content ?>
</div>

</body>
</html>