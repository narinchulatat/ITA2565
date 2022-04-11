<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\HacategorySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'หมวดหมู่หลัก';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="hacategory-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('เพิ่มหมวดหมู่หลัก', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php 
    ?>
    <div class="box box-default">
        <!-- /.box-header -->
        <div class="box-body">
            <?= GridView::widget([
                'dataProvider' => $dataProvider,
                'filterModel' => $searchModel,
                'columns' => [
                    ['class' => 'yii\grid\SerialColumn'],

                    // 'id',
                    'name',
                    'create_date',

                    ['class' => 'yii\grid\ActionColumn'],
                ],
            ]); ?>
        </div>
    </div>
</div>