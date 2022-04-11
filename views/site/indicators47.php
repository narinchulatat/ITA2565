
<?php

use yii\widgets\ListView;
use yii\helpers\Url;

echo ListView::widget([
    'dataProvider' => $indicators47,
    'itemView' => '/group/_indicators47',
    'layout' => '{items}',
]);
?>
<br>
<a href="<?= Url::to(['group/index','cat_id' => 23]); ?>" class="btn btn-primary">ตัวชี้วัดที่ 9 การเสริมสร้างวัฒนธรรมองค์กร</a>
