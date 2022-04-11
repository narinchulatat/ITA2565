
<?php

use yii\widgets\ListView;
use yii\helpers\Url;

echo ListView::widget([
    'dataProvider' => $indicators1,
    'itemView' => '/group/_indicators4_7',
    'layout' => '{items}',
]);
?>
<br>
<a href="<?= Url::to(['group/index','cat_id' => 44]); ?>" class="btn btn-primary">ตัวชี้วัดที่ 7 ตัวชี้วัดการดำเนินงานเพื่อป้องกันการทุจริต</a>
