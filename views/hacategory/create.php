<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\hacategory */

$this->title = 'เพิ่มหมวดหมู่หลัก';
$this->params['breadcrumbs'][] = ['label' => 'หมวดหมู่หลัก', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="hacategory-create">

    <h1><?= Html::encode($this->title) ?></h1>
    <div class="box box-default">
        <!-- /.box-header -->
        <div class="box-body">
            <?= $this->render('_form', [
                'model' => $model,
            ]) ?>
        </div>
    </div>
</div>