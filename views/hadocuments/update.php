<?php

use yii\helpers\Html;
use app\models\HaDocuments;

/* @var $this yii\web\View */
/* @var $model app\models\hadocuments */

$this->title = 'Update Hadocuments: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Hadocuments', 'url' => ['admin']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="hadocuments-update">
    <div class="box box-primary">
        <div class="box-header with-border">
            <h2 class="box-title">
                <?= Html::encode($this->title) ?>
            </h2>

            <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
            </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <?= $this->render('_form', [
                'model' => $model,
                'group' => $group
            ]) ?>
        </div>
        <!-- /.box-body -->
    </div>
</div>
