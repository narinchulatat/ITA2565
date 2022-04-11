
<?php

use yii\widgets\ListView;
use yii\helpers\Url;

echo ListView::widget([
    'dataProvider' => $indicators1,
    'itemView' => '/group/_indicators3_4',
    'layout' => '{items}',
]);
?>
<br>
<a href="<?= Url::to(['group/index','cat_id' => 32]); ?>" class="btn btn-primary">ตัวชี้วัดที่ 4 การส่งเสริมความโปร่งใส</a>
