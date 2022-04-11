
<?php

use yii\widgets\ListView;
use yii\helpers\Url;

echo ListView::widget([
    'dataProvider' => $indicators5,
    'itemView' => '/group/_indicators5',
    'layout' => '{items}',
]);
?>
<br>
<a href="<?= Url::to(['group/index','cat_id' => 24]); ?>" class="btn btn-primary">ตัวชี้วัดที่ 5 ตัวชี้วัดการรับสินบน</a>
