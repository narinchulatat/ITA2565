
<?php

use yii\widgets\ListView;
use yii\helpers\Url;

echo ListView::widget([
    'dataProvider' => $hadc,
    'itemView' => '/group/_hadc',
    'layout' => '{items}',
]);
?>
<br>
<a href="<?= Url::to(['group/index','cat_id' => 4]); ?>" class="btn btn-primary">นโยบายและแผนงานทั้งหมด</a>
