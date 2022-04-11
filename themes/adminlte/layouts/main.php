<?php
use yii\helpers\Html;

/* @var $this \yii\web\View */
/* @var $content string */
if (Yii::$app->controller->action->id === 'login') {
    echo $this->render(
        'main-login',
        ['content' => $content]
    );
} else {

    if (class_exists('backend\assets\AppAsset')) {
        backend\assets\AppAsset::register($this);
    } else {
        app\assets\AppAsset::register($this);
    }

    dmstr\web\AdminLteAsset::register($this);

    $directoryAsset = Yii::$app->assetManager->getPublishedUrl('@vendor/almasaeed2010/adminlte/dist');
    ?>
    <?php $this->beginPage() ?>
    <!DOCTYPE html>
    <html lang="<?= Yii::$app->language ?>">
    <head>
        <link rel="shortcut icon" href="<?php echo Yii::$app->request->baseUrl; ?>/favicon.ico" type="image/x-icon" />
        <meta charset="<?= Yii::$app->charset ?>"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?= Html::csrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>

        <link href='https://fonts.googleapis.com/css?family=Kanit:400,300&subset=thai,latin' rel='stylesheet' type='text/css'>
        <style>
            body {
                font-family: 'Kanit', sans-serif;
            }

            h1 {
                font-family: 'Kanit', sans-serif;
            }

            h2 {
                font-family: 'Kanit', sans-serif;
            }

            h3 {
                font-family: 'Kanit', sans-serif;
            }

            h4 {
                font-family: 'Kanit', sans-serif;
            }

            h5 {
                font-family: 'Kanit', sans-serif;
            }

            div {
                font-family: 'Kanit', sans-serif;
            }

            /* a {
                color: #009587;
            } */

            h5.thick {
                font-weight: bold;
            }
        </style>        
    </head>
    <body class="skin-blue sidebar-mini">
    <?php $this->beginBody() ?>
    <div class="wrapper">

        <?= $this->render(
            'header.php',
            ['directoryAsset' => $directoryAsset]
        ) ?>

        <?= $this->render(
            'left.php',
            ['directoryAsset' => $directoryAsset]
        )
        ?>

        <?= $this->render(
            'content.php',
            ['content' => $content, 'directoryAsset' => $directoryAsset]
        ) ?>

    </div>

    <?php $this->endBody() ?>
    </body>
    </html>
    <?php $this->endPage() ?>
<?php } ?>
