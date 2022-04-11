<?php
/* @var $this yii\web\View */
$this->title = 'ระบบบันทึก ITA โรงพยาบาลน้ำยืน จังหวัดอุบลราชธานี (ปีงบประมาณ 2564)';

use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ListView;
use yii\db\Query;
use app\models\HaDocuments;
use app\models\Group;


?>
<div class="site-index">

  <!-- <div class="jumbotron"> -->
  <!-- <h1>มาตรฐาน HA โรงพยาบาลน้ำยืน</h1> -->
  <!-- </div> -->

  <div class="body-content">
    <div class="row">
      <div class="col-md-3 col-sm-6 col-xs-12">
        <div class="info-box">
          <span class="info-box-icon bg-yellow"><i class="fa fa-files-o"></i></span>

          <div class="info-box-content">
            <span class="info-box-text">Uploads</span>
            <span class="info-box-number pull-left badge bg-blue">
              <?= $model = HaDocuments::find()
                ->count();
              ?>
            </span>
          </div>
          <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
      </div>
      <div class="col-md-3 col-sm-6 col-xs-12">
        <div class="info-box">
          <span class="info-box-icon bg-aqua"><i class="fa fa-user-circle"></i></span>

          <div class="info-box-content">
            <span class="info-box-text">USER</span>
            <span class="info-box-number pull-left badge bg-green">
              <?php echo dektrium\user\models\User::find()->count(); ?>
            </span>
          </div>
          <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
      </div>
      <div class="col-md-3 col-sm-6 col-xs-12">
        <div class="info-box">
          <span class="info-box-icon bg-red"><i class="fa fa-star-o"></i></span>

          <div class="info-box-content">
            <span class="info-box-text">Likes</span>
            <span class="info-box-number pull-left badge bg-red">
              <?= $model = Group::find()
                ->count();
              ?>
            </span>
          </div>
          <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
      </div>
      <!-- /.col -->
      <!-- /.col -->
      <div class="col-md-3 col-sm-6 col-xs-12">
        <div class="info-box">
          <span class="info-box-icon bg-green"><i class="fa fa-flag-o"></i></span>

          <div class="info-box-content">
            <span class="info-box-text">DEMO</span>
            <span class="info-box-number">0</span>
          </div>
        </div>
      </div>
      <!-- /.col -->
      <!-- /.col -->
    </div>

    <div class="nav-tabs-custom">
      <ul class="nav nav-tabs">
        <li class="active"><a href="#tab_1" data-toggle="tab">ปีงบประมาณ 2564 ไตรมาสที่ 1</a></li>
        <li><a href="#tab_2" data-toggle="tab">ปีงบประมาณ 2564 ไตรมาสที่ 2</a></li>
        <li><a href="#tab_3" data-toggle="tab">ปีงบประมาณ 2564 ไตรมาสที่ 3</a></li>
        <li><a href="#tab_4" data-toggle="tab">ปีงบประมาณ 2564 ไตรมาสที่ 4</a></li>
        <li class="pull-right"><a href="#" class="text-muted"><i class="fa fa-gear"></i></a></li>
      </ul>
      <div class="tab-content">
        <div class="tab-pane active" id="tab_1">
          <div class="box-body">
            <div class="row">
              <div class="col-md-12">
                <div class="box box-danger">
                  <div class="box-header with-border">
                    <h3 class="box-title">ตัวชี้วัดที่ 1 การเปิดเผยข้อมูล [EB1 หน่วยงานมีการกำหนดมาตรการ และวางระบบการเผยแพร่ข้อมูลต่อสาธารณะ ผ่านเว็บไซต์ของหน่วยงาน]</h3>
                  </div>
                  <div class="box-body">
                    <?php
                    echo ListView::widget([
                      'dataProvider' => $dataProvider,
                      'itemView' => '/group/_item',
                      'layout' => '{items}',
                    ]);
                    ?>
                  </div>
                </div>
              </div>
              <div class="col-md-12">
                <div class="box box-danger">
                  <div class="box-header with-border">
                    <h3 class="box-title">ตัวชี้วัดที่ 1 การเปิดเผยข้อมูล [EB2 หน่วยงานมีการเปิดเผยข้อมูลข่าวสารที่เป็นปัจจุบัน]</h3>
                  </div>
                  <div class="box-body">
                    <?php
                    echo ListView::widget([
                      'dataProvider' => $had,
                      'itemView' => '/group/_had',
                      'layout' => '{items}',
                    ]);
                    ?>
                  </div>
                </div>
              </div>
              <div class="col-md-12">
                <div class="box box-danger">
                  <div class="box-header with-border">
                    <h3 class="box-title">ตัวชี้วัดที่ 2 การจัดซื้อจัดจ้างและการจัดหาพัสดุ [EB3 หน่วยงานมีรายงานการวิเคราะห์ผลการจัดซื้อจัดจ้างและการจัดหาพัสดุประจำปีงบประมาณ พ.ศ. 2563]</h3>
                  </div>
                  <div class="box-body">
                    <?php
                    echo ListView::widget([
                      'dataProvider' => $ha,
                      'itemView' => '/group/_item',
                      'layout' => '{items}',
                    ]);
                    ?>
                  </div>
                </div>
              </div>
              <div class="col-md-12">
                <div class="box box-danger">
                  <div class="box-header with-border">
                    <h3 class="box-title">ตัวชี้วัดที่ 2 การจัดซื้อจัดจ้างและการจัดหาพัสดุ [EB4 หน่วยงานมีมาตรการ และวางระบบเพื่อส่งเสริมความโปร่งใสในการจัดซื้อจัดจ้างและการจัดหาพัสดุ ปีงบประมาณ พ.ศ. 2564]</h3>
                  </div>
                  <div class="box-body">
                    <?php
                    echo ListView::widget([
                      'dataProvider' => $hadc,
                      'itemView' => '/group/_hadc',
                      'layout' => '{items}',
                    ]);
                    ?>
                  </div>
                </div>
              </div>

              <div class="col-md-12">
                <div class="box box-danger">
                  <div class="box-header with-border">
                    <h3 class="box-title">ตัวชี้วัดที่ 2 การจัดซื้อจัดจ้างและการจัดหาพัสดุ [EB5 หน่วยงานมีการสรุปผลการดำเนินการจัดซื้อจัดจ้างในรอบเดือน ประจำปีงบประมาณ พ.ศ. 2564]</h3>
                  </div>
                  <div class="box-body">
                    <?php
                    echo ListView::widget([
                      'dataProvider' => $hadcc,
                      'itemView' => '/group/_hadcc',
                      'layout' => '{items}',
                    ]);
                    ?>
                  </div>
                </div>
              </div>

              <div class="col-md-12">
                <div class="box box-danger">
                  <div class="box-header with-border">
                    <h3 class="box-title">ตัวชี้วัดที่ 3 การบริหารและพัฒนาทรัพยากรบุคคล [EB8 หน่วยงานมีการรายงานการประเมินและเกี่ยวกับการประเมินผลการปฏิบัติราชการประจำปีของบุคลากรในหน่วยงาน และเปิดเผยผลการปฏิบัติราชการ ระดับดีเด่น และระดับดีมาก ในที่เปิดเผยให้ทราบ รอบปีงบประมาณที่ผ่านมา และรอบปีงบประมาณ]</h3>
                  </div>
                  <div class="box-body">
                    <?php
                    echo ListView::widget([
                      'dataProvider' => $hade,
                      'itemView' => '/group/_hade',
                      'layout' => '{items}',
                    ]);
                    ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /.tab-pane -->
        <div class="tab-pane" id="tab_2">
          <div class="box-body">
            <div class="row">
              <div class="col-md-12">
                <div class="box box-success">
                  <div class="box-header with-border">
                    <h3 class="box-title">ตัวชี้วัดที่ 1 การเปิดเผยข้อมูล</h3>
                  </div>
                  <div class="box-body">
                    <?php
                    echo ListView::widget([
                      'dataProvider' => $indicators1,
                      'itemView' => '/group/_indicators1',
                      'layout' => '{items}',
                    ]);
                    ?>
                  </div>
                </div>
              </div>
              <div class="col-md-12">
                <div class="box box-success">
                  <div class="box-header with-border">
                    <h3 class="box-title">ตัวชี้วัดที่ 2 การจัดซื้อจัดจ้างและการจัดหาพัสดุ</h3>
                  </div>
                  <div class="box-body">
                    <?php
                    echo ListView::widget([
                      'dataProvider' => $indicators2,
                      'itemView' => '/group/_indicators2',
                      'layout' => '{items}',
                    ]);
                    ?>
                  </div>
                </div>
              </div>
              <div class="col-md-12">
                <div class="box box-success">
                  <div class="box-header with-border">
                    <h3 class="box-title">ตัวชี้วัดที่ 3 การบริหารและพัฒนาทรัพยากรบุคคล</h3>
                  </div>
                  <div class="box-body">
                    <?php
                    echo ListView::widget([
                      'dataProvider' => $indicators3,
                      'itemView' => '/group/_indicators3',
                      'layout' => '{items}',
                    ]);
                    ?>
                  </div>
                </div>
              </div>
              <div class="col-md-12">
                <div class="box box-success">
                  <div class="box-header with-border">
                    <h3 class="box-title">ตัวชี้วัดที่ 4 การส่งเสริมความโปร่งใส</h3>
                  </div>
                  <div class="box-body">
                    <?php
                    echo ListView::widget([
                      'dataProvider' => $indicators4,
                      'itemView' => '/group/_indicators4',
                      'layout' => '{items}',
                    ]);
                    ?>
                  </div>
                </div>
              </div>
              <div class="col-md-12">
                <div class="box box-success">
                  <div class="box-header with-border">
                    <h3 class="box-title">ตัวชี้วัดที่ 5 ตัวชี้วัดการรับสินบน</h3>
                  </div>
                  <div class="box-body">
                    <?php
                    echo ListView::widget([
                      'dataProvider' => $indicators5,
                      'itemView' => '/group/_indicators5',
                      'layout' => '{items}',
                    ]);
                    ?>
                  </div>
                </div>
              </div>
              <div class="col-md-12">
                <div class="box box-success">
                  <div class="box-header with-border">
                    <h3 class="box-title">ตัวชี้วัดที่ 6 ตัวชี้วัดการใช้ทรัพย์สินของราชการ</h3>
                  </div>
                  <div class="box-body">
                    <?php
                    echo ListView::widget([
                      'dataProvider' => $indicators6,
                      'itemView' => '/group/_indicators6',
                      'layout' => '{items}',
                    ]);
                    ?>
                  </div>
                </div>
              </div>
              <div class="col-md-12">
                <div class="box box-success">
                  <div class="box-header with-border">
                    <h3 class="box-title">ตัวชี้วัดที่ 7 ตัวชี้วัดการดำเนินงานเพื่อป้องกันการทุจริต</h3>
                  </div>
                  <div class="box-body">
                    <?php
                    echo ListView::widget([
                      'dataProvider' => $indicators7,
                      'itemView' => '/group/_indicators7',
                      'layout' => '{items}',
                    ]);
                    ?>
                  </div>
                </div>
              </div>
              <div class="col-md-12">
                <div class="box box-success">
                  <div class="box-header with-border">
                    <h3 class="box-title">ตัวชี้วัดที่ 8 การป้องกันผลประโยชน์ทับซ้อน</h3>
                  </div>
                  <div class="box-body">
                    <?php
                    echo ListView::widget([
                      'dataProvider' => $indicators8,
                      'itemView' => '/group/_indicators8',
                      'layout' => '{items}',
                    ]);
                    ?>
                  </div>
                </div>
              </div>
              <div class="col-md-12">
                <div class="box box-success">
                  <div class="box-header with-border">
                    <h3 class="box-title">ตัวชี้วัดที่ 9 การเสริมสร้างวัฒนธรรมองค์กร</h3>
                  </div>
                  <div class="box-body">
                    <?php
                    echo ListView::widget([
                      'dataProvider' => $indicators9,
                      'itemView' => '/group/_indicators9',
                      'layout' => '{items}',
                    ]);
                    ?>
                  </div>
                </div>
              </div>

            </div>
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.tab-pane -->
        <div class="tab-pane" id="tab_3">
          <div class="box-body">
            <div class="row">
              <div class="col-md-12">
                <div class="box box-success">
                  <div class="box-header with-border">
                    <h3 class="box-title">ตัวชี้วัดที่ 1 การเปิดเผยข้อมูล</h3>
                  </div>
                  <div class="box-body">
                    <?php
                    echo ListView::widget([
                      'dataProvider' => $indicators3_1,
                      'itemView' => '/group/_indicators3_1',
                      'layout' => '{items}',
                    ]);
                    ?>
                  </div>
                </div>
              </div>
              <div class="col-md-12">
                <div class="box box-success">
                  <div class="box-header with-border">
                    <h3 class="box-title">ตัวชี้วัดที่ 2 การจัดซื้อจัดจ้างและการจัดหาพัสดุ</h3>
                  </div>
                  <div class="box-body">
                    <?php
                    echo ListView::widget([
                      'dataProvider' => $indicators3_2,
                      'itemView' => '/group/_indicators3_2',
                      'layout' => '{items}',
                    ]);
                    ?>
                  </div>
                </div>
              </div>
              <div class="col-md-12">
                <div class="box box-success">
                  <div class="box-header with-border">
                    <h3 class="box-title">ตัวชี้วัดที่ 3 การบริหารและพัฒนาทรัพยากรบุคคล</h3>
                  </div>
                  <div class="box-body">
                    <?php
                    echo ListView::widget([
                      'dataProvider' => $indicators3_3,
                      'itemView' => '/group/_indicators3_3',
                      'layout' => '{items}',
                    ]);
                    ?>
                  </div>
                </div>
              </div>
              <div class="col-md-12">
                <div class="box box-success">
                  <div class="box-header with-border">
                    <h3 class="box-title">ตัวชี้วัดที่ 4 การส่งเสริมความโปร่งใส</h3>
                  </div>
                  <div class="box-body">
                    <?php
                    echo ListView::widget([
                      'dataProvider' => $indicators3_4,
                      'itemView' => '/group/_indicators3_4',
                      'layout' => '{items}',
                    ]);
                    ?>
                  </div>
                </div>
              </div>
              <div class="col-md-12">
                <div class="box box-success">
                  <div class="box-header with-border">
                    <h3 class="box-title">ตัวชี้วัดที่ 5 ตัวชี้วัดการรับสินบน</h3>
                  </div>
                  <div class="box-body">
                    <?php
                    echo ListView::widget([
                      'dataProvider' => $indicators3_5,
                      'itemView' => '/group/_indicators3_5',
                      'layout' => '{items}',
                    ]);
                    ?>
                  </div>
                </div>
              </div>
              <div class="col-md-12">
                <div class="box box-success">
                  <div class="box-header with-border">
                    <h3 class="box-title">ตัวชี้วัดที่ 6 ตัวชี้วัดการใช้ทรัพย์สินของราชการ</h3>
                  </div>
                  <div class="box-body">
                    <?php
                    echo ListView::widget([
                      'dataProvider' => $indicators3_6,
                      'itemView' => '/group/_indicators3_6',
                      'layout' => '{items}',
                    ]);
                    ?>
                  </div>
                </div>
              </div>
              <div class="col-md-12">
                <div class="box box-success">
                  <div class="box-header with-border">
                    <h3 class="box-title">ตัวชี้วัดที่ 7 ตัวชี้วัดการดำเนินงานเพื่อป้องกันการทุจริต</h3>
                  </div>
                  <div class="box-body">
                    <?php
                    echo ListView::widget([
                      'dataProvider' => $indicators3_7,
                      'itemView' => '/group/_indicators3_7',
                      'layout' => '{items}',
                    ]);
                    ?>
                  </div>
                </div>
              </div>
              <div class="col-md-12">
                <div class="box box-success">
                  <div class="box-header with-border">
                    <h3 class="box-title">ตัวชี้วัดที่ 8 การป้องกันผลประโยชน์ทับซ้อน</h3>
                  </div>
                  <div class="box-body">
                    <?php
                    echo ListView::widget([
                      'dataProvider' => $indicators3_8,
                      'itemView' => '/group/_indicators3_8',
                      'layout' => '{items}',
                    ]);
                    ?>
                  </div>
                </div>
              </div>
              <div class="col-md-12">
                <div class="box box-success">
                  <div class="box-header with-border">
                    <h3 class="box-title">ตัวชี้วัดที่ 9 การเสริมสร้างวัฒนธรรมองค์กร</h3>
                  </div>
                  <div class="box-body">
                    <?php
                    echo ListView::widget([
                      'dataProvider' => $indicators3_9,
                      'itemView' => '/group/_indicators3_9',
                      'layout' => '{items}',
                    ]);
                    ?>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
        <!-- /.tab-pane -->
        <div class="tab-pane" id="tab_4">
          <div class="box-body">
            <div class="row">
              <div class="col-md-12">
                <div class="box box-success">
                  <div class="box-header with-border">
                    <h3 class="box-title">ตัวชี้วัดที่ 1 การเปิดเผยข้อมูล</h3>
                  </div>
                  <div class="box-body">
                    <?php
                    echo ListView::widget([
                      'dataProvider' => $indicators4_1,
                      'itemView' => '/group/_indicators4_1',
                      'layout' => '{items}',
                    ]);
                    ?>
                  </div>
                </div>
              </div>
              <div class="col-md-12">
                <div class="box box-success">
                  <div class="box-header with-border">
                    <h3 class="box-title">ตัวชี้วัดที่ 2 การจัดซื้อจัดจ้างและการจัดหาพัสดุ</h3>
                  </div>
                  <div class="box-body">
                    <?php
                    echo ListView::widget([
                      'dataProvider' => $indicators4_2,
                      'itemView' => '/group/_indicators4_2',
                      'layout' => '{items}',
                    ]);
                    ?>
                  </div>
                </div>
              </div>
              <div class="col-md-12">
                <div class="box box-success">
                  <div class="box-header with-border">
                    <h3 class="box-title">ตัวชี้วัดที่ 3 การบริหารและพัฒนาทรัพยากรบุคคล</h3>
                  </div>
                  <div class="box-body">
                    <?php
                    echo ListView::widget([
                      'dataProvider' => $indicators4_3,
                      'itemView' => '/group/_indicators4_3',
                      'layout' => '{items}',
                    ]);
                    ?>
                  </div>
                </div>
              </div>
              <div class="col-md-12">
                <div class="box box-success">
                  <div class="box-header with-border">
                    <h3 class="box-title">ตัวชี้วัดที่ 4 การส่งเสริมความโปร่งใส</h3>
                  </div>
                  <div class="box-body">
                    <?php
                    echo ListView::widget([
                      'dataProvider' => $indicators4_4,
                      'itemView' => '/group/_indicators4_4',
                      'layout' => '{items}',
                    ]);
                    ?>
                  </div>
                </div>
              </div>
              <div class="col-md-12">
                <div class="box box-success">
                  <div class="box-header with-border">
                    <h3 class="box-title">ตัวชี้วัดที่ 5 ตัวชี้วัดการรับสินบน</h3>
                  </div>
                  <div class="box-body">
                    <?php
                    echo ListView::widget([
                      'dataProvider' => $indicators4_5,
                      'itemView' => '/group/_indicators4_5',
                      'layout' => '{items}',
                    ]);
                    ?>
                  </div>
                </div>
              </div>
              <div class="col-md-12">
                <div class="box box-success">
                  <div class="box-header with-border">
                    <h3 class="box-title">ตัวชี้วัดที่ 6 ตัวชี้วัดการใช้ทรัพย์สินของราชการ</h3>
                  </div>
                  <div class="box-body">
                    <?php
                    echo ListView::widget([
                      'dataProvider' => $indicators4_6,
                      'itemView' => '/group/_indicators4_6',
                      'layout' => '{items}',
                    ]);
                    ?>
                  </div>
                </div>
              </div>
              <div class="col-md-12">
                <div class="box box-success">
                  <div class="box-header with-border">
                    <h3 class="box-title">ตัวชี้วัดที่ 7 ตัวชี้วัดการดำเนินงานเพื่อป้องกันการทุจริต</h3>
                  </div>
                  <div class="box-body">
                    <?php
                    echo ListView::widget([
                      'dataProvider' => $indicators4_7,
                      'itemView' => '/group/_indicators4_7',
                      'layout' => '{items}',
                    ]);
                    ?>
                  </div>
                </div>
              </div>
              <div class="col-md-12">
                <div class="box box-success">
                  <div class="box-header with-border">
                    <h3 class="box-title">ตัวชี้วัดที่ 8 การป้องกันผลประโยชน์ทับซ้อน</h3>
                  </div>
                  <div class="box-body">
                    <?php
                    echo ListView::widget([
                      'dataProvider' => $indicators4_8,
                      'itemView' => '/group/_indicators4_8',
                      'layout' => '{items}',
                    ]);
                    ?>
                  </div>
                </div>
              </div>
              <div class="col-md-12">
                <div class="box box-success">
                  <div class="box-header with-border">
                    <h3 class="box-title">ตัวชี้วัดที่ 9 การเสริมสร้างวัฒนธรรมองค์กร</h3>
                  </div>
                  <div class="box-body">
                    <?php
                    echo ListView::widget([
                      'dataProvider' => $indicators4_9,
                      'itemView' => '/group/_indicators4_9',
                      'layout' => '{items}',
                    ]);
                    ?>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
        <!-- /.tab-pane -->
      </div>
      <!-- /.tab-content -->
    </div>



    <!-- <div class="box box-info">
      <div class="box-header with-border">
        <button type="button" class="btn bg-maroon btn-flat margin">
          <h4>ปีงบประมาณ 2564 ไตรมาสที่ 1</h4>
        </button>
        <div class="box-tools pull-right">
          <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
          </button>
          <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
        </div>
      </div>
      <div class="box-footer clearfix">
        <a href="javascript:void(0)" class="btn btn-sm btn-info btn-flat pull-left">Place New Order</a>
        <a href="javascript:void(0)" class="btn btn-sm btn-default btn-flat pull-right">View All Orders</a>
      </div>
    </div> -->





  </div>