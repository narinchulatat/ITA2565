
<?php

use yii\widgets\ListView;
use yii\helpers\Url;

echo ListView::widget([
    'dataProvider' => $indicators1,
    'itemView' => '/group/_indicators3_3',
    'layout' => '{items}',
]);
?>
<br>
<a href="<?= Url::to(['group/index','cat_id' => 31]); ?>" class="btn btn-primary">ตัวชี้วัดที่ 3 การบริหารและพัฒนาทรัพยากรบุคคล</a>
