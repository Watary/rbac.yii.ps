<?php
    use mdm\admin\components\MenuHelper;
    use yii\bootstrap\Nav;
?>
<aside class="main-sidebar">

    <section class="sidebar">

        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?= Yii::$app->getUser()->identity->getAvatar() ?>" class="img-circle" alt="User Image"/>
            </div>
            <div class="pull-left info">
                <p><?= Yii::$app->getUser()->identity->username ?></p>

                <!-- <a href="#"><i class="fa fa-circle text-success"></i> Online</a> -->
            </div>
        </div>

        <!-- search form -->
        <!-- <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search..."/>
              <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
            </div>
        </form>
        <!-- /.search form -->

        <?= dmstr\widgets\Menu::widget(
            [
                'options' => ['class' => 'sidebar-menu'],
                'items' => [
                    ['label' => 'Menu Yii2', 'options' => ['class' => 'header']],
                    ['label' => 'Home', 'icon' => 'home', 'url' => ['/admin']],
                    ['label' => 'Post', 'icon' => 'list-alt', 'url' => ['/admin/post']],
                    ['label' => 'User', 'icon' => 'id-card', 'url' => ['/admin/user']],
                    [
                        'label' => 'RBAC',
                        'url' => ['/rbac'],
                        'icon' => 'users',
                        'items' => [
                            ['label' => 'Users', 'icon' => 'users', 'url' => ['/rbac/user']],
                            ['label' => 'Assignment', 'url' => ['/rbac/assignment']],
                            ['label' => 'Roles', 'url' => ['/rbac/role']],
                            ['label' => 'Permission', 'url' => ['/rbac/permission']],
                            ['label' => 'Routes', 'url' => ['/rbac/route']],
                            ['label' => 'Rules', 'url' => ['/rbac/rule']],
                            ['label' => 'Menus', 'url' => ['/rbac/menu']],
                        ],
                    ],
                    ['label' => 'Gii', 'icon' => 'file-code-o', 'url' => ['/gii']],
                    ['label' => 'Debug', 'icon' => 'dashboard', 'url' => ['/debug']],

                    ['label' => 'Login', 'url' => ['site/login'], 'visible' => Yii::$app->user->isGuest],

                ],
            ]
        ) ?>

        <?= Nav::widget(
            [
                'options' => ['class' => 'sidebar-menu'],
                'items' => MenuHelper::getAssignedMenu(Yii::$app->user->id)
            ]
        ) ?>

    </section>

</aside>
