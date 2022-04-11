<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\group */

$this->title = 'เพิ่มหมวดหมู่ย่อย';
$this->params['breadcrumbs'][] = ['label' => 'Groups', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="group-create">

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