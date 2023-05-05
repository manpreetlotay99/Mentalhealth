<?php

use yii\helpers\Html;

/* @var $this \yii\web\View */
/* @var $content string */
?>
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown user-menu">
            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
                <img src="<?= $directoryAsset ?>/img/avatar5.png" class="user-image img-circle elevation-2" alt="User Image">
                <span class="d-none d-md-inline"><?php echo Yii::$app->user->identity->fullName; ?></span>
            </a>
            <?= Html::a(
                "<i class=\"fa fa-sign-out\"></i> Logout (" . Yii::$app->user->identity->fullName . ")",
                ['/site/logout'],
                ['data-method' => 'post', 'class' => 'dropdown-item']
            ) ?>
        </li>
    </ul>
</nav>