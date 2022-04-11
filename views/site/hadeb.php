
<?php

use yii\widgets\ListView;
use yii\helpers\Url;

echo ListView::widget([
    'dataProvider' => $hadeb,
    'itemView' => '/group/_hadeb',
    'layout' => '{items}',
]);
?>
<br>
<a href="<?= Url::to(['group/index','cat_id' => 8]); ?>" class="btn btn-primary">นโยบายและแผนงานทั้งหมด</a>
