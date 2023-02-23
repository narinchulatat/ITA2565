<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\HaCategory;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model app\models\group */
/* @var $form yii\widgets\ActiveForm */
?>
<?php
$upfileCat = HaCategory::find()->where('id BETWEEN "70" AND "96"')->all();
$listData = ArrayHelper::map($upfileCat, 'id', 'name');
?>
<div class="group-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'cat_id')->dropDownList($listData); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
