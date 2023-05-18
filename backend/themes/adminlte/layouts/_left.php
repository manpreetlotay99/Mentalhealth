<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <?php // echo \yii\helpers\Html::a('<img class="brand-image img-circle elevation-3" src="' . ($directoryAsset . '/img/logo.png') . '" alt="APP"><span class="brand-text font-weight-light">' . Yii::$app->name . '</span>', Yii::$app->homeUrl, ['class' => 'brand-link']) ?>
    <?= \yii\helpers\Html::a('<span class="brand-text font-weight-light">' . Yii::$app->name . '</span>', Yii::$app->homeUrl, ['class' => 'brand-link']) ?>
    <div class="sidebar">

        <nav class="mt-2">
            <?= \backend\widgets\Menu::widget(
                [
                    'options' => ['class' => 'nav nav-pills nav-sidebar flex-column', 'data-widget' => 'treeview'],
                    'items' => [
                        ['label' => 'Dashboard', 'iconType' => 'fas', 'icon' => 'tachometer-alt', 'url' => ['/site/index']],
                        ['label' => 'CMS', 'iconType' => 'fas', 'icon' => 'list', 'url' => ['/cms']],
                        ['label' => 'Wellness Resources', 'iconType' => 'fas', 'icon' => 'list', 'url' => ['/wellness-resource/index']],
                        ['label' => 'Patient Info', 'iconType' => 'fas', 'icon' => 'list', 'url' => ['/patient-info']],
                        ['label' => 'Appointments', 'iconType' => 'fas', 'icon' => 'list', 'url' => ['/appointment']],
                        ['label' => 'Medical Records', 'iconType' => 'fas', 'icon' => 'list', 'url' => ['/medical-record']],
                        ['label' => 'Testimonials', 'iconType' => 'fas', 'icon' => 'list', 'url' => ['/testimonial']],
                        ['label' => 'Users', 'iconType' => 'fas', 'icon' => 'list', 'url' => ['/user']],
                        ['label' => 'Login', 'url' => ['site/login'], 'visible' => Yii::$app->user->isGuest],
                       [
                           'label' => 'Some tools',
                           'icon' => 'share',
                           'url' => '#',
                           'items' => [
                               ['label' => 'Gii', 'iconType' => 'far', 'icon' => 'file-code', 'url' => ['/'],],
                               ['label' => 'Debug', 'icon' => 'tachometer-alt', 'url' => ['/'],],
                               [
                                   'label' => 'Level One',
                                   'iconType' => 'far',
                                   'icon' => 'circle',
                                   'url' => '#',
                                   'items' => [
                                       ['label' => 'Level Two', 'iconType' => 'far', 'icon' => 'dot-circle', 'url' => '#',],
                                       [
                                           'label' => 'Level Two',
                                           'iconType' => 'far',
                                           'icon' => 'dot-circle',
                                           'url' => '#',
                                           'items' => [
                                               ['label' => 'Level Three', 'icon' => 'dot-circle', 'url' => '#',],
                                               ['label' => 'Level Three', 'icon' => 'dot-circle', 'url' => '#',],
                                           ],
                                       ],
                                   ],
                               ],
                           ],
                       ],
                    ],
                ]
            ) ?>
        </nav>

    </div>

</aside>
