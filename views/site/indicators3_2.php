
<?php

use yii\widgets\ListView;
use yii\helpers\Url;

echo ListView::widget([
    'dataProvider' => $indicators1,
    'itemView' => '/group/_indicators3_2',
    'layout' => '{items}',
]);
?>
<br>
<a href="<?= Url::to(['group/index','cat_id' => 30]); ?>" class="btn btn-primary">ตัวชี้วัดที่ 2 การจัดซื้อจัดจ้างและการจัดหาพัสดุ</a>
