
<?php

use yii\widgets\ListView;
use yii\helpers\Url;

echo ListView::widget([
    'dataProvider' => $indicators1,
    'itemView' => '/group/_indicators4_3',
    'layout' => '{items}',
]);
?>
<br>
<a href="<?= Url::to(['group/index','cat_id' => 40]); ?>" class="btn btn-primary">ตัวชี้วัดที่ 3 การบริหารและพัฒนาทรัพยากรบุคคล</a>
