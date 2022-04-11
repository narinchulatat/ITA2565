<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\modeles\hadocuments;
use yii\helpers\Url;
use yii\widgets\DetailView;
use yii\db\Query;
use yii\helpers\HtmlPurifier;
use fedemotta\datatables\DataTables;

/* @var $this yii\web\View */
/* @var $searchModel app\models\HadocumentsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'เอกสาร ITA';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="hadocuments-index">

  <!-- <h1><?php echo $ha->name; ?></h1> -->

  <p>
    <?= Html::a('เพิ่มเอกสาร', ['create'], ['class' => 'btn btn-success']) ?>
  </p>

  <?php
  ?>

  <!-- <h3 class="panel-title"><i class="glyphicon glyphicon-list-alt"></i> <?php echo $ha->name; ?>
      <p /> -->
  <div class="box box-primary">
    <div class="box-header with-border">
      <h3 class="box-title">เอกสาร ITA</h3>

      <div class="box-tools pull-right">
        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
        </button>
        <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
      </div>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
      <?= DataTables::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
          ['class' => 'yii\grid\SerialColumn'],

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
          // 'description:ntext',
          // 'covenant',
          ['attribute' => 'docs', 'value' => function ($model) {
            return $model->listDownloadFiles('docs');
          }, 'format' => 'html'],
          //'create_date',
          //'cat_id',
          //'group_id',

          // ['class' => 'yii\grid\ActionColumn'],
          [
              'header'=>'แก้ไข/ลบ',
              'class' => 'yii\grid\ActionColumn',
              'options' => ['style' => 'width:10%;'],
              'template' => '{update} {delete}',
              'buttons' => [
                  'update' => function($url, $model, $key) {

                      return Html::a('<i class="glyphicon glyphicon-pencil"></i>', ['update','id'=>$model->id], ['class' => 'btn btn-warning btn-xs']);
                  },

                  'delete' => function($url, $model, $key) {

                      return Html::a('<i class="glyphicon glyphicon-trash"></i>',  ['delete','id'=>$model->id], [
                                  'title' => Yii::t('yii', 'Delete'),
                                  'data-confirm' => Yii::t('yii', 'Are you sure you want to delete this item?'),
                                  'data-method' => 'post',
                                  'data-pjax' => '0',
                                  'class' => 'btn btn-danger btn-xs'
                      ]);
                  }
              ]
          ],
        ],
      ]); ?>
    </div>
    <!-- /.box-body -->
  </div>
</div>
