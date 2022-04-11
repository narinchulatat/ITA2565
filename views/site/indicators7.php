
<?php

use yii\widgets\ListView;
use yii\helpers\Url;

echo ListView::widget([
    'dataProvider' => $indicators7,
    'itemView' => '/group/_indicators7',
    'layout' => '{items}',
]);
?>
<br>
<a href="<?= Url::to(['group/index','cat_id' => 26]); ?>" class="btn btn-primary">ตัวชี้วัดที่ 7 ตัวชี้วัดการดำเนินงานเพื่อป้องกันการทุจริต</a>
