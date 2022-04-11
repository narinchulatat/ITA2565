<?php
use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\grid\GridView;
use yii\helpers\Url;
use yii\helpers\HtmlPurifier;
use app\models\Group;

?>
<?php
$baseUrl = Yii::getAlias('@web');
$basePath = Yii::getAlias('@webroot');
$time = time();
?>
<div class="clearfix hidden-xs media">
  <div class="media-body">
    <a href="<?= Url::to(['/hadocuments/index', 'group_id' => $model->id]); ?>" style="text-decoration:none">
      <ul>
        <li>
          <h5 class="thick"><?php echo $model->name; ?></h5>
        </li>
      </ul>
    </a>
  </div>
</div>
<div class="clearfix visible-xs">
  <a href="<?= Url::to(['/hadocuments/index', 'group_id' => $model->id]); ?>" style="text-decoration:none">
    <ul>
      <li>
        <h5 class="thick"><?php echo $model->name; ?></h5>
      </li>
    </ul>
  </a>
</div>