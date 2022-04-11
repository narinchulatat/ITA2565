
<?php

use yii\widgets\ListView;
use yii\helpers\Url;

echo ListView::widget([
    'dataProvider' => $had,
    'itemView' => '/group/_had',
    'layout' => '{items}',
]);
?>
<br>
<a href="<?= Url::to(['group/index','cat_id' => 3]); ?>" class="btn btn-primary">ข่าวจัดซื้อจัดจ้างทั้งหมด</a>
