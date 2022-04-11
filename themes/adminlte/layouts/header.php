<?php

use yii\helpers\Html;

/* @var $this \yii\web\View */
/* @var $content string */
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

<header class="main-header">

    <?= Html::a('<span class="logo-mini">ITA</span><span class="logo-lg"><div>ITA โรงพยาบาลน้ำยืน</div><span>', Yii::$app->homeUrl, ['class' => 'logo']) ?>

    <nav class="navbar navbar-static-top" role="navigation">

        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
            <span class="sr-only">Toggle navigation</span>
        </a>

        <div class="navbar-custom-menu">

            <ul class="nav navbar-nav">
                <!-- User Account: style can be found in dropdown.less -->

                <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <img src="<?= $directoryAsset ?>/img/user2-160x160.jpg" class="user-image" alt="User Image" />
                        <span class="hidden-xs"><?= $name ?></span>
                    </a>
                    <ul class="dropdown-menu">
                        <!-- User image -->
                        <li class="user-header">
                            <img src="<?= $directoryAsset ?>/img/user2-160x160.jpg" class="img-circle" alt="User Image" />

                            <p>
                                <?= $name ?>
                            </p>
                        </li>
                        <!-- Menu Footer-->
                        <li class="user-footer">
                            <div class="pull-left">
                              <?=Html::a('Profile', ['/user/profile'], ['class' => 'btn btn-default btn-flat']);?>
                                <!-- <a href="/user/profile" class="btn btn-default btn-flat">Profile</a> -->
                            </div>
                            <div class="pull-right">
                              <?=
                              Html::a(
                                      'ออกจากระบบ', ['/user/security/logout'], ['data-method' => 'post', 'class' => 'btn btn-default btn-flat']
                              )
                              ?>
                            </div>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
</header>
