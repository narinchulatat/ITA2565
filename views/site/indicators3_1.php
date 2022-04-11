
<?php

use yii\widgets\ListView;
use yii\helpers\Url;

echo ListView::widget([
    'dataProvider' => $indicators1,
    'itemView' => '/group/_indicators3_1',
    'layout' => '{items}',
]);
?>
<br>
<a href="<?= Url::to(['group/index','cat_id' => 29]); ?>" class="btn btn-primary">ตัวชี้วัดที่ 1 การเปิดเผยข้อมูล</a>
