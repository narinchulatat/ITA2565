
<?php

use yii\widgets\ListView;
use yii\helpers\Url;

echo ListView::widget([
    'dataProvider' => $indicators88,
    'itemView' => '/group/_indicators88',
    'layout' => '{items}',
]);
?>
<br>
<a href="<?= Url::to(['group/index','cat_id' => 88]); ?>" class="btn btn-primary">ตัวชี้วัดที่ 1 การเปิดเผยข้อมูล</a>
