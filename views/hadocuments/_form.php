<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\widgets\FileInput;
use yii\helpers\Url;
use app\models\HaCategory;
use app\models\Group;
use yii\helpers\ArrayHelper;
use kartik\widgets\DepDrop;
use app\models\HaDocuments;

/* @var $this yii\web\View */
/* @var $model app\models\hadocuments */
/* @var $form yii\widgets\ActiveForm */
?>
<?php
$upfileCat = HaCategory::find()->all();
$listData = ArrayHelper::map($upfileCat, 'id', 'name');

$upfileHa = Group::find()->all();
$listData2 = ArrayHelper::map($upfileHa, 'id', 'name');
?>
<div class="hadocuments-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]) ?>

    <?= $form->field($model, 'ref')->hiddenInput()->label(false); ?>

    <?= $form->field($model, 'cat_id')->dropdownList(
        ArrayHelper::map(
            HaCategory::find()->all(),
            'id',
            'name'
        ),
        [
            'id' => 'ddl-cat_id',
            'prompt' => 'เลือกหมวดหมู่หลัก'
        ]
    ); ?>

    <?php
    // = $form->field($model, 'group_id')->widget(DepDrop::classname(), [
    //     'data' => [],
    //     'pluginOptions' => [
    //         'depends' => ['ddl-cat_id'],
    //         'placeholder' => 'เลือกหมวดหมู่ย่อย...',
    //         'url' => Url::to(['/hadocuments/get-group'])
    //     ]
    // ]); 
    ?>

    <?= $form->field($model, 'group_id')->widget(DepDrop::classname(), [
        'options' => ['id' => 'ddl-group'],
        'data' => $group,
        'pluginOptions' => [
            'depends' => ['ddl-cat_id'],
            'placeholder' => 'เลือกหมวดหมู่ย่อย',
            'url' => Url::to(['/hadocuments/get-group'])
        ]
    ]); 
    ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>

    <!-- <?= $form->field($model, 'covenant')->textInput(['maxlength' => true]) ?> -->

    <?= $form->field($model, 'docs[]')->widget(FileInput::classname(), [
        'options' => [
            'multiple' => true
        ],
        'pluginOptions' => [
            'initialPreview' => $model->initialPreview($model->docs, 'docs', 'file'),
            'initialPreviewConfig' => $model->initialPreview($model->docs, 'docs', 'config'),
            'allowedFileExtensions' => ['pdf', 'doc', 'docx', 'xls', 'xlsx'],
            'showPreview' => true,
            'showCaption' => true,
            'showRemove' => true,
            'showUpload' => false,
            'overwriteInitial' => false
        ]
    ]); ?>

    <!-- <?= $form->field($model, 'create_date')->textInput() ?> -->

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>