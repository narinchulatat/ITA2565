
<?php

use yii\widgets\ListView;
use yii\helpers\Url;

echo ListView::widget([
    'dataProvider' => $indicators4,
    'itemView' => '/group/_indicators4',
    'layout' => '{items}',
]);
?>
<br>
<a href="<?= Url::to(['group/index','cat_id' => 23]); ?>" class="btn btn-primary">ตัวชี้วัดที่ 4 การส่งเสริมความโปร่งใส</a>
