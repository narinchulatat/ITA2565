<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\ArrayHelper;
use app\models\HaCategory;

/* @var $this yii\web\View */
/* @var $searchModel app\models\GroupSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'หมวดหมู่ย่อย';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="group-index">

    <h1><?php echo $ha_category->name; ?></h1>

    <p>
        <?= Html::a('เพิ่มหมวดหมู่ย่อย', ['create'], ['class' => 'btn btn-success']) ?>
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
                    // [
                    //     'attribute' => 'cat_id',
                    //     'filter' => ArrayHelper::map(HaCategory::find()->all(), 'id', 'name'),//กำหนด filter แบบ dropDownlist จากข้อมูล ใน field แบบ foreignKey
                    //     'value' => function($model){
                    //         return $model->cat->name;
                    //     }
                    // ],
                    // [
                    //   'attribute' => 'cat_id',
                    //   'value' => function ($model) {
                    //     return $model->cat->name;
                    //   },
                    // ],
                    'name',
                    'create_date',

                    ['class' => 'yii\grid\ActionColumn'],
                ],
            ]); ?>
        </div>
        <!-- /.box-body -->
    </div>
</div>