<?php

use yii\bootstrap\Html;
use yii\helpers\Url;

// $command3 = Yii::$app->db->createCommand("SELECT company FROM setting WHERE id='1'");
// $company = $command3->queryScalar();
//
// $command4 = Yii::$app->db->createCommand("SELECT photo FROM setting WHERE id='1'");
// $logo = $command4->queryScalar();
if (Yii::$app->user->isGuest) {
    $name='Guest';
    $username='Guest';
 }else{
 $user_id = Yii::$app->user->identity->id;
 $command3 = Yii::$app->db->createCommand("SELECT name FROM profile WHERE user_id='$user_id'");
 $name = $command3->queryScalar();

 $username = Yii::$app->user->identity->username;
 }

?>

<aside class="main-sidebar">

    <section class="sidebar">

        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?= Yii::getAlias('@web') . '/images/moph.png' ?>" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">

                <?php if (Yii::$app->user->isGuest) { ?>

                    <a href="#"><i class="fa fa-circle text-red"></i> Offline</a>
                <?php } else { ?>
                    <p><?= $name ?></p>
                    <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                <?php } ?>


            </div>
        </div>

        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search..." />
                <span class="input-group-btn">
                    <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i>
                    </button>
                </span>
            </div>
        </form>
        <!-- /.search form -->

        <?= dmstr\widgets\Menu::widget(
            [
                'options' => ['class' => 'sidebar-menu tree', 'data-widget' => 'tree'],
                'items' => [
                    ['label' => 'Menu', 'options' => ['class' => 'header']],
                    ['label' => 'หน้าหลัก', 'icon' => 'home', 'url' => ['/site/index']],
                    ['label' => 'เกี่ยวกับ', 'icon' => 'dashboard', 'url' => ['/site/about']],
                    // ['label' => 'Login', 'url' => ['/user/security/login'], 'visible' => Yii::$app->user->isGuest],
                    [
                        'label' => 'จัดการเว็บไซต์', 'icon' => 'cog', 'visible' => !Yii::$app->user->isGuest,
                        'items' => [
                            ['label' => 'หมวดหมู่หลัก', 'icon' => 'circle-o text-aqua', 'url' => ['/hacategory/index'], 'visible' => !Yii::$app->user->isGuest],
                            ['label' => 'หมวดหมู่ย่อย', 'icon' => 'circle-o text-aqua', 'url' => ['/group/index'], 'visible' => !Yii::$app->user->isGuest],
                            ['label' => 'อัพโหลดไฟล์', 'icon' => 'circle-o text-aqua', 'url' => ['/hadocuments/admin'], 'visible' => !Yii::$app->user->isGuest],
                        ],
                    ],
                    // [
                    //     'label' => 'จัดการเว็บไซต์', 'icon' => 'cog', 'visible' => !Yii::$app->user->isGuest,
                    //     'items' => [
                    //         ['label' => 'หมวดหมู่', 'icon' => 'circle-o text-aqua', 'url' => ['/newscategory/index'], 'visible' => !Yii::$app->user->isGuest],
                    //         ['label' => 'หัวข้อ', 'icon' => 'circle-o text-aqua', 'url' => ['/news/admin'], 'visible' => !Yii::$app->user->isGuest],
                    //     ],
                    // ],
                    Yii::$app->user->isGuest ?
                        ['label' => 'เข้าสู่ระบบ', 'icon' => 'sign-in text-green', 'url' => ['/user/security/login']] : [
                            'label' => 'ยินดีต้อนรับ (' . Yii::$app->user->identity->username . ')',
                            'items' => [
                                ['label' => 'โพรไฟล์', 'icon' => 'user', 'url' => ['/user/profile']],
                                ['label' => 'จัดการผู้ใช้', 'icon' => 'user-secret', 'url' => ['/user/admin/index']],
                            ]
                        ],
                ],
            ]
        ) ?>
        <ul class="sidebar-menu tree" data-widget="tree">
            <!-- <li class="header"></li> -->
            <?php
            if (Yii::$app->user->isGuest) {
                ?>
                <li>
                    <!-- <a href="<?= Url::to('index.php?r=user/security/login') ?>">
                                    <i class="fa fa-sign-in text-green"></i> <span>เข้าสูระบบ</span>
                                </a> -->
                </li>
            <?php } else { ?>
                <li>
                    <?php
                    echo Html::a(
                        '<i class="fa fa-sign-out text-red"></i>ออกจากระบบ',
                        ['/user/security/logout'],
                        [
                            'data' => [
                                'icon' => 'fa fa-sign-out text-red',
                                'method' => 'post',
                            ],
                        ]
                    );
                    ?>
                </li>
            <?php } ?>
        </ul>
    </section>

</aside>
