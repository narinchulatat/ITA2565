
<?php

use yii\widgets\ListView;
use yii\helpers\Url;

echo ListView::widget([
    'dataProvider' => $ha,
    'itemView' => '/group/_item',
    'layout' => '{items}',
]);
?>
<br>
<a href="<?= Url::to(['group/index','cat_id' => 15]); ?>" class="btn btn-primary">ตอนที่ II ระบบงานสำคัญของโรงพยาบาล</a>
