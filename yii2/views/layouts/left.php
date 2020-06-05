<aside class="main-sidebar">

    <section class="sidebar">
        <!-- search form -->
        <!-- /.search form -->

        <?= dmstr\widgets\Menu::widget(
            [
                'options' => ['class' => 'sidebar-menu tree', 'data-widget'=> 'tree'],
                'items' => [
                    ['label' => 'Меню', 'options' => ['class' => 'header']],
                    ['label' => 'Главная', 'icon' => 'home', 'url' => ['/admin/default/index']],
                    ['label' => 'Абоненты', 'icon' => 'address-book', 'url' => ['/admin/sippeers/index']],
                    ['label' => 'Правила звонков', 'icon' => 'phone', 'url' => ['/admin/extensions/index']],
                    ['label' => 'Статистика звонков', 'icon' => 'book', 'url' => ['/admin/cdr/index']],
                    ['label' => 'Управление доступом', 'icon' => 'expeditedssl', 'url' => ['/rbac/default/index']],
                    ['label' => 'Login', 'url' => ['site/login'], 'visible' => Yii::$app->user->isGuest],
                    [
                        'label' => 'Дополнительно',
                        'icon' => 'share',
                        'url' => '#',
                        'items' => [
                            ['label' => 'Gii', 'icon' => 'file-code-o', 'url' => ['/gii'],],
                            ['label' => 'Debug', 'icon' => 'dashboard', 'url' => ['/debug'],],
                            /*[
                                'label' => 'Level One',
                                'icon' => 'circle-o',
                                'url' => '#',
                                'items' => [
                                    ['label' => 'Level Two', 'icon' => 'circle-o', 'url' => '#',],
                                    [
                                        'label' => 'Level Two',
                                        'icon' => 'circle-o',
                                        'url' => '#',
                                        'items' => [
                                            ['label' => 'Level Three', 'icon' => 'circle-o', 'url' => '#',],
                                            ['label' => 'Level Three', 'icon' => 'circle-o', 'url' => '#',],
                                        ],
                                    ],
                                ],
                                
                            ],
                            */
                        ],
                    ],
                ],
            ]
        ) ?>

    </section>

</aside>
