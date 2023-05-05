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
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                <?= Html::a(
                    "<i class=\"fa fa-pencil-square-o\"></i> Update Profile",
                    ['/user/update-profile'],['class' => 'dropdown-item']
                ) ?>
                <div class="dropdown-divider"></div>
                <?= Html::a(
                    "<i class=\"fa fa-key\"></i> Change Password",
                    ['/user/change-password'],['class' => 'dropdown-item']
                ) ?>
                <div class="dropdown-divider"></div>
                <?= Html::a(
                    "<i class=\"fa fa-sign-out\"></i> Logout (" . Yii::$app->user->identity->fullName . ")",
                    ['/site/logout'],
                    ['data-method' => 'post','class' => 'dropdown-item']
                ) ?>
            </div>
        </li>
    </ul>
</nav>
