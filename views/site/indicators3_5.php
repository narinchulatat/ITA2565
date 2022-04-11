
<?php

use yii\widgets\ListView;
use yii\helpers\Url;

echo ListView::widget([
    'dataProvider' => $indicators1,
    'itemView' => '/group/_indicators3_5',
    'layout' => '{items}',
]);
?>
<br>
<a href="<?= Url::to(['group/index','cat_id' => 33]); ?>" class="btn btn-primary">ตัวชี้วัดที่ 5 ตัวชี้วัดการรับสินบน</a>
