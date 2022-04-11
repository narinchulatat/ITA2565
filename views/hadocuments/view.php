<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\hadocuments */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'เอกสาร HA', 'url' => ['admin']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="hadocuments-view">

  <h1></h1>

  <p>
    <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
    <?= Html::a('Delete', ['delete', 'id' => $model->id], [
      'class' => 'btn btn-danger',
      'data' => [
        'confirm' => 'Are you sure you want to delete this item?',
        'method' => 'post',
      ],
    ]) ?>
  </p>

  <div class="box box-primary">
    <div class="box-header with-border">
      <h2 class="box-title"><?= Html::encode($this->title) ?></h2>

      <div class="box-tools pull-right">
        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
        </button>
        <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
      </div>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
      <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
          // 'id',
          // 'ref',
          [
            'attribute' => 'cat_id',
            'value' => function ($model) {
              return $model->cat->name;
            },
          ],
          [
            'attribute' => 'group_id',
            'value' => function ($model) {
              return $model->group->name;
            },
          ],
          'title',
          'description:ntext',
          // 'covenant',
          ['attribute' => 'docs', 'value' => $model->listDownloadFiles('docs'), 'format' => 'html'],
          'create_date',
          // 'cat_id',
          // 'group_id',
        ],
      ]) ?>
    </div>
    <!-- /.box-body -->
  </div>
</div>