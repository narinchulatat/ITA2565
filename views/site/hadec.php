
<?php

use yii\widgets\ListView;
use yii\helpers\Url;

echo ListView::widget([
    'dataProvider' => $hadec,
    'itemView' => '/group/_hadec',
    'layout' => '{items}',
]);
?>
<br>
<a href="<?= Url::to(['group/index','cat_id' => 9]); ?>" class="btn btn-primary">นโยบายและแผนงานทั้งหมด</a>
