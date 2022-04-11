
<?php

use yii\widgets\ListView;
use yii\helpers\Url;

echo ListView::widget([
    'dataProvider' => $indicators1,
    'itemView' => '/group/_indicators3_6',
    'layout' => '{items}',
]);
?>
<br>
<a href="<?= Url::to(['group/index','cat_id' => 34]); ?>" class="btn btn-primary">ตัวชี้วัดที่ 6 ตัวชี้วัดการใช้ทรัพย์สินของราชการ</a>
