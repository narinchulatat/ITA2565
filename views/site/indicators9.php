
<?php

use yii\widgets\ListView;
use yii\helpers\Url;

echo ListView::widget([
    'dataProvider' => $indicators9,
    'itemView' => '/group/_indicators9',
    'layout' => '{items}',
]);
?>
<br>
<a href="<?= Url::to(['group/index','cat_id' => 28]); ?>" class="btn btn-primary">ตัวชี้วัดที่ 9 การเสริมสร้างวัฒนธรรมองค์กร</a>
