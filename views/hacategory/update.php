<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\hacategory */

$this->title = 'แก้ไขหมวดหมู่หลัก: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'หมวดหมู่หลัก', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="hacategory-update">

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