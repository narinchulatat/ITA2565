
<?php

use yii\widgets\ListView;
use yii\helpers\Url;

echo ListView::widget([
    'dataProvider' => $indicators8,
    'itemView' => '/group/_indicators8',
    'layout' => '{items}',
]);
?>
<br>
<a href="<?= Url::to(['group/index','cat_id' => 27]); ?>" class="btn btn-primary">ตัวชี้วัดที่ 8 การป้องกันผลประโยชน์ทับซ้อน</a>
