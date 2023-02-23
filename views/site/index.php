<?php
/* @var $this yii\web\View */
$this->title = 'ระบบจัดเก็บเอกสาร (Integrity and Transparency Assessment: ITA) โรงพยาบาลน้ำยืน จังหวัดอุบลราชธานี (ปีงบประมาณ 2566)';

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
        <li><a href="#tab_1" data-toggle="tab">แบบประเมินไตรมาสที่ 1</a></li>
        <li class="active"><a href="#tab_2" data-toggle="tab">แบบประเมินไตรมาสที่ 2</a></li>
        <li><a href="#tab_3" data-toggle="tab">แบบประเมินไตรมาสที่ 3</a></li>
        <li><a href="#tab_4" data-toggle="tab">แบบประเมินไตรมาสที่ 4</a></li>
        <li class="pull-right"><a href="#" class="text-muted"><i class="fa fa-gear"></i></a></li>
      </ul>
      <div class="tab-content">
        <div class="tab-pane" id="tab_1">
          <div class="box-body">
            <div class="row">
              <div class="col-md-12">
                <div class="callout callout-success">
                  <h4><i class="fa fa-check-square"></i>
                    MOIT1 หน่วยงานมีการกำหนดมาตรการ และวางระบบการเผยแพร่ข้อมูลต่อสาธารณะผ่านเว็บไซต์ ของหน่วยงาน</h4>
                </div>
                <div class="panel box box-success">
                  <div class="box-header with-border">
                    <h3 class="box-title">1. คำสั่ง / กรอบแนวทาง</h3>
                  </div>
                  <div class="box-body">
                    <?php
                    echo ListView::widget([
                      'dataProvider' => $indicators60,
                      'itemView' => '/group/_indicators60',
                      'layout' => '{items}',
                    ]);
                    ?>
                  </div>
                </div>
              </div>
              <div class="col-md-12">
                <div class="panel box box-success">
                  <div class="box-header with-border">
                    <h3 class="box-title">2. รายงานผลการกำกับติดตามการเผยแพร่ข้อมูลต่อสาธารณะผ่านเว็บไซต์ของหน่วยงานในปีที่ผ่านมา (ปีงบประมาณ พ.ศ. 2564)</h3>
                  </div>
                  <div class="box-body">
                    <?php
                    echo ListView::widget([
                      'dataProvider' => $indicators61,
                      'itemView' => '/group/_indicators61',
                      'layout' => '{items}',
                    ]);
                    ?>
                  </div>
                </div>
              </div>


              <div class="col-md-12">
                <div class="callout callout-success">
                  <h4><i class="fa fa-check-square"></i>
                    MOIT2 หน่วยงานมีการเปิดเผยข้อมูลข่าวสารที่เป็นปัจจุบัน</h4>
                </div>
                <div class="panel box box-success">
                  <div class="box-header with-border">
                    <h3 class="box-title">1. ข้อมูลพื้นฐานที่เป็นปัจจุบัน ประกอบด้วย</h3>
                  </div>
                  <div class="box-body">
                    <?php
                    echo ListView::widget([
                      'dataProvider' => $indicators62,
                      'itemView' => '/group/_indicators62',
                      'layout' => '{items}',
                    ]);
                    ?>
                  </div>
                </div>
              </div>
              <div class="col-md-12">
                <div class="panel box box-success">
                  <div class="box-header with-border">
                    <h3 class="box-title">18. ข้อมูลการจัดซื้อจัดจ้าง ประกอบด้วย</h3>
                  </div>
                  <div class="box-body">
                    <?php
                    echo ListView::widget([
                      'dataProvider' => $indicators63,
                      'itemView' => '/group/_indicators63',
                      'layout' => '{items}',
                    ]);
                    ?>
                  </div>
                </div>
              </div>

              <div class="col-md-12">
                <div class="callout callout-success">
                  <h4><i class="fa fa-check-square"></i>
                    MOIT3 หน่วยงานมีรายงานการวิเคราะห์ผลการจัดซื้อจัดจ้างและการจัดหาพัสดุประจำปีงบประมาณ พ.ศ. 2565</h4>
                </div>
                <div class="panel box box-success">
                  <div class="box-header with-border">
                    <h3 class="box-title">รายงานการวิเคราะห์ผลการจัดซื้อจัดจ้างและการจัดหาพัสดุประจำปีงบประมาณ พ.ศ. 2565</h3>
                  </div>
                  <div class="box-body">
                    <?php
                    echo ListView::widget([
                      'dataProvider' => $indicators64,
                      'itemView' => '/group/_indicators64',
                      'layout' => '{items}',
                    ]);
                    ?>
                  </div>
                </div>
              </div>

              <div class="col-md-12">
                <div class="callout callout-success">
                  <h4><i class="fa fa-check-square"></i>
                    MOIT4 หน่วยงานวางระบบเพื่อส่งเสริมความโปร่งใสในการจัดซื้อจัดจ้างและการจัดหาพัสดุ ประจำปีงบประมาณ พ.ศ. 2566</h4>
                </div>
                <div class="panel box box-success">
                  <div class="box-header with-border">
                    <h3 class="box-title">ข้อ 1. ประกาศเผยแพร่แผนการจัดซื้อจัดจ้างและการจัดหาพัสดุ ประจำปีของหน่วยงาน ภายใน 30 วันทำการระบุวันที่ที่ได้รับการจัดสรรงบประมาณในช่องคำอธิบายชี้แจงประกอบหลักฐาน วันที่ที่ได้ทำการประกาศเผยแพร่ให้ชัดเจน</h3>
                  </div>
                  <div class="box-body">
                    <?php
                    echo ListView::widget([
                      'dataProvider' => $indicators65,
                      'itemView' => '/group/_indicators65',
                      'layout' => '{items}',
                    ]);
                    ?>
                  </div>
                </div>
              </div>

              <div class="col-md-12">
                <div class="panel box box-success">
                  <div class="box-header with-border">
                    <h3 class="box-title">ข้อ 2. รายงานผลของแผนการจัดซื้อจัดจ้างและการจัดหาพัสดุประจำปีของหน่วยงาน ตามรอบระยะเวลา ที่กำหนด 2.1 งบลงทุน ทุกไตรมาส 2.2 งบดำเนินงาน ทุกไตรมาส</h3>
                  </div>
                  <div class="box-body">
                    <?php
                    echo ListView::widget([
                      'dataProvider' => $indicators66,
                      'itemView' => '/group/_indicators66',
                      'layout' => '{items}',
                    ]);
                    ?>
                  </div>
                </div>
              </div>

              <div class="col-md-12">
                <div class="panel box box-success">
                  <div class="box-header with-border">
                    <h3 class="box-title">ข้อ 3. การป้องกันผู้ที่มีหน้าที่ดำเนินการในการจัดซื้อจัดจ้างเป็นผู้มีส่วนได้ส่วนเสียกับผู้ยื่นข้อเสนอหรือคู่สัญญา</h3>
                  </div>
                  <div class="box-body">
                    <?php
                    echo ListView::widget([
                      'dataProvider' => $indicators67,
                      'itemView' => '/group/_indicators67',
                      'layout' => '{items}',
                    ]);
                    ?>
                  </div>
                </div>
              </div>

              <div class="col-md-12">
                <div class="callout callout-success">
                  <h4><i class="fa fa-check-square"></i>
                    MOIT5 หน่วยงานมีการสรุปผลการจัดซื้อจัดจ้างและการจัดหาพัสดุรายเดือน ประจำปีงบประมาณ พ.ศ. 2566</h4>
                </div>
                <div class="panel box box-success">
                  <div class="box-header with-border">
                    <h3 class="box-title">ไตรมาสที่ 1 หน่วยงานวาง link จำนวน 3 link (Link ละ 1 เดือน)</h3>
                  </div>
                  <div class="box-body">
                    <?php
                    echo ListView::widget([
                      'dataProvider' => $indicators68,
                      'itemView' => '/group/_indicators68',
                      'layout' => '{items}',
                    ]);
                    ?>
                  </div>
                </div>
              </div>
              <div class="col-md-12">
                <div class="panel box box-success">
                  <div class="box-header with-border">
                    <h3 class="box-title">2. มีแบบสรุปผลการดำเนินการจัดซื้อจัดจ้างในรอบเดือน (แบบ สขร. 1) ไตรมาสที่ 1 เดือนตุลาคม 2565-เดือนธันวาคม 2565</h3>
                  </div>
                  <div class="box-body">
                    <?php
                    echo ListView::widget([
                      'dataProvider' => $indicators69,
                      'itemView' => '/group/_indicators69',
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


        <!-- tab_2 -->

        <div class="tab-pane active" id="tab_2">
          <div class="box-body">
            <div class="row">
              <div class="col-md-12">
                <div class="callout callout-success">
                  <h4><i class="fa fa-check-square"></i>
                    MOIT1 หน่วยงานมีการกำหนดมาตรการ และวางระบบการเผยแพร่ข้อมูลต่อสาธารณะผ่านเว็บไซต์ ของหน่วยงาน</h4>
                </div>
                <div class="panel box box-success">
                  <div class="box-header with-border">
                    <h3 class="box-title">1. คำสั่ง / กรอบแนวทาง</h3>
                  </div>
                  <div class="box-body">
                    <?php
                    echo ListView::widget([
                      'dataProvider' => $indicators60,
                      'itemView' => '/group/_indicators60',
                      'layout' => '{items}',
                    ]);
                    ?>
                  </div>
                </div>
              </div>
              <div class="col-md-12">
                <div class="panel box box-success">
                  <div class="box-header with-border">
                    <h3 class="box-title">2. รายงานผลการกำกับติดตามการเผยแพร่ข้อมูลต่อสาธารณะผ่านเว็บไซต์ของหน่วยงานในปีที่ผ่านมา (ปีงบประมาณ พ.ศ. 2564)</h3>
                  </div>
                  <div class="box-body">
                    <?php
                    echo ListView::widget([
                      'dataProvider' => $indicators61,
                      'itemView' => '/group/_indicators61',
                      'layout' => '{items}',
                    ]);
                    ?>
                  </div>
                </div>
              </div>


              <div class="col-md-12">
                <div class="callout callout-success">
                  <h4><i class="fa fa-check-square"></i>
                    MOIT2 หน่วยงานมีการเปิดเผยข้อมูลข่าวสารที่เป็นปัจจุบัน</h4>
                </div>
                <div class="panel box box-success">
                  <div class="box-header with-border">
                    <h3 class="box-title">1. ข้อมูลพื้นฐานที่เป็นปัจจุบัน ประกอบด้วย</h3>
                  </div>
                  <div class="box-body">
                    <?php
                    echo ListView::widget([
                      'dataProvider' => $indicators62,
                      'itemView' => '/group/_indicators62',
                      'layout' => '{items}',
                    ]);
                    ?>
                  </div>
                </div>
              </div>
              <div class="col-md-12">
                <div class="panel box box-success">
                  <div class="box-header with-border">
                    <h3 class="box-title">18. ข้อมูลการจัดซื้อจัดจ้าง ประกอบด้วย</h3>
                  </div>
                  <div class="box-body">
                    <?php
                    echo ListView::widget([
                      'dataProvider' => $indicators63,
                      'itemView' => '/group/_indicators63',
                      'layout' => '{items}',
                    ]);
                    ?>
                  </div>
                </div>
              </div>

              <div class="col-md-12">
                <div class="callout callout-success">
                  <h4><i class="fa fa-check-square"></i>
                    MOIT3 หน่วยงานมีรายงานการวิเคราะห์ผลการจัดซื้อจัดจ้างและการจัดหาพัสดุประจำปีงบประมาณ พ.ศ. 2565</h4>
                </div>
                <div class="panel box box-success">
                  <div class="box-header with-border">
                    <h3 class="box-title">รายงานการวิเคราะห์ผลการจัดซื้อจัดจ้างและการจัดหาพัสดุประจำปีงบประมาณ พ.ศ. 2565</h3>
                  </div>
                  <div class="box-body">
                    <?php
                    echo ListView::widget([
                      'dataProvider' => $indicators64,
                      'itemView' => '/group/_indicators64',
                      'layout' => '{items}',
                    ]);
                    ?>
                  </div>
                </div>
              </div>

              <div class="col-md-12">
                <div class="callout callout-success">
                  <h4><i class="fa fa-check-square"></i>
                    MOIT4 หน่วยงานวางระบบเพื่อส่งเสริมความโปร่งใสในการจัดซื้อจัดจ้างและการจัดหาพัสดุ ประจำปีงบประมาณ พ.ศ. 2566</h4>
                </div>
                <div class="panel box box-success">
                  <div class="box-header with-border">
                    <h3 class="box-title">ข้อ 1. ประกาศเผยแพร่แผนการจัดซื้อจัดจ้างและการจัดหาพัสดุ ประจำปีของหน่วยงาน ภายใน 30 วันทำการระบุวันที่ที่ได้รับการจัดสรรงบประมาณในช่องคำอธิบายชี้แจงประกอบหลักฐาน วันที่ที่ได้ทำการประกาศเผยแพร่ให้ชัดเจน</h3>
                  </div>
                  <div class="box-body">
                    <?php
                    echo ListView::widget([
                      'dataProvider' => $indicators65,
                      'itemView' => '/group/_indicators65',
                      'layout' => '{items}',
                    ]);
                    ?>
                  </div>
                </div>
              </div>

              <div class="col-md-12">
                <div class="panel box box-success">
                  <div class="box-header with-border">
                    <h3 class="box-title">ข้อ 2. รายงานผลของแผนการจัดซื้อจัดจ้างและการจัดหาพัสดุประจำปีของหน่วยงาน ตามรอบระยะเวลา ที่กำหนด 2.1 งบลงทุน ทุกไตรมาส 2.2 งบดำเนินงาน ทุกไตรมาส</h3>
                  </div>
                  <div class="box-body">
                    <?php
                    echo ListView::widget([
                      'dataProvider' => $indicators66,
                      'itemView' => '/group/_indicators66',
                      'layout' => '{items}',
                    ]);
                    ?>
                  </div>
                </div>
              </div>

              <div class="col-md-12">
                <div class="panel box box-success">
                  <div class="box-header with-border">
                    <h3 class="box-title">ข้อ 3. การป้องกันผู้ที่มีหน้าที่ดำเนินการในการจัดซื้อจัดจ้างเป็นผู้มีส่วนได้ส่วนเสียกับผู้ยื่นข้อเสนอหรือคู่สัญญา</h3>
                  </div>
                  <div class="box-body">
                    <?php
                    echo ListView::widget([
                      'dataProvider' => $indicators67,
                      'itemView' => '/group/_indicators67',
                      'layout' => '{items}',
                    ]);
                    ?>
                  </div>
                </div>
              </div>

              <div class="col-md-12">
                <div class="callout callout-success">
                  <h4><i class="fa fa-check-square"></i>
                    MOIT5 หน่วยงานมีการสรุปผลการจัดซื้อจัดจ้างและการจัดหาพัสดุรายเดือน ประจำปีงบประมาณ พ.ศ. 2566</h4>
                </div>
                <div class="panel box box-success">
                  <div class="box-header with-border">
                    <h3 class="box-title">ไตรมาสที่ 1 หน่วยงานวาง link จำนวน 3 link (Link ละ 1 เดือน)</h3>
                  </div>
                  <div class="box-body">
                    <?php
                    echo ListView::widget([
                      'dataProvider' => $indicators68,
                      'itemView' => '/group/_indicators68',
                      'layout' => '{items}',
                    ]);
                    ?>
                  </div>
                </div>
              </div>
              <div class="col-md-12">
                <div class="panel box box-success">
                  <div class="box-header with-border">
                    <h3 class="box-title">2. มีแบบสรุปผลการดำเนินการจัดซื้อจัดจ้างในรอบเดือน (แบบ สขร. 1) ไตรมาสที่ 1 เดือนตุลาคม 2565-เดือนธันวาคม 2565</h3>
                  </div>
                  <div class="box-body">
                    <?php
                    echo ListView::widget([
                      'dataProvider' => $indicators69,
                      'itemView' => '/group/_indicators69',
                      'layout' => '{items}',
                    ]);
                    ?>
                  </div>
                </div>
              </div>
              <div class="col-md-12">
                <div class="panel box box-success">
                  <div class="box-header with-border">
                    <h3 class="box-title">ไตรมาสที่ 2 หน่วยงานวาง link จำนวน 3 link (Link ละ 1 เดือน)</h3>
                  </div>
                  <div class="box-body">
                    <?php
                    echo ListView::widget([
                      'dataProvider' => $indicators70,
                      'itemView' => '/group/_indicators70',
                      'layout' => '{items}',
                    ]);
                    ?>
                  </div>
                </div>
              </div>

              <div class="col-md-12">
                <div class="panel box box-success">
                  <div class="box-header with-border">
                    <h3 class="box-title">2. มีแบบสรุปผลการดำเนินการจัดซื้อจัดจ้างในรอบเดือน (แบบ สขร. 1) ไตรมาสที่ 2 เดือนมกราคม 2566 - เดือนมีนาคม 2566</h3>
                  </div>
                  <div class="box-body">
                    <?php
                    echo ListView::widget([
                      'dataProvider' => $indicators71,
                      'itemView' => '/group/_indicators71',
                      'layout' => '{items}',
                    ]);
                    ?>
                  </div>
                </div>
              </div>

              <div class="col-md-12">
                <div class="callout callout-success">
                  <h4><i class="fa fa-check-square"></i>
                    MOIT6 ผู้บริหารแสดงนโยบายการบริหารและพัฒนาทรัพยากรบุคคล</h4>
                </div>
                <div class="panel box box-success">
                  <div class="box-header with-border">
                    <h3 class="box-title">1. นโยบายการบริหารทรัพยากรบุคคล</h3>
                  </div>
                  <div class="box-body">
                    <?php
                    echo ListView::widget([
                      'dataProvider' => $indicators72,
                      'itemView' => '/group/_indicators72',
                      'layout' => '{items}',
                    ]);
                    ?>
                  </div>
                </div>
              </div>
              <div class="col-md-12">
                <div class="panel box box-success">
                  <div class="box-header with-border">
                    <h3 class="box-title">2. แผนการบริหารทรัพยากรบุคคลของหน่วยงาน</h3>
                  </div>
                  <div class="box-body">
                    <?php
                    echo ListView::widget([
                      'dataProvider' => $indicators73,
                      'itemView' => '/group/_indicators73',
                      'layout' => '{items}',
                    ]);
                    ?>
                  </div>
                </div>
              </div>

              <div class="col-md-12">
                <div class="callout callout-success">
                  <h4><i class="fa fa-check-square"></i>
                    MOIT7 หน่วยงานมีการรายงานการประเมินและเกี่ยวกับการประเมินผลการปฏิบัติราชการ ของบุคลากรในหน่วยงาน และเปิดเผยผลการปฏิบัติราชการ ระดับดีเด่น และระดับดีมาก ในที่เปิดเผยให้ทราบปีงบประมาณ พ.ศ. 2565 และปีงบประมาณ พ.ศ. 2566</h4>
                </div>
                <div class="panel box box-success">
                  <div class="box-header with-border">
                    <h3 class="box-title">ไตรมาสที่ 2 รอบสอง ของปีงบประมาณ พ.ศ. 2565 (1 เมษายน 2565-30 กันยายน 2565)</h3>
                  </div>
                  <div class="box-body">
                    <?php
                    echo ListView::widget([
                      'dataProvider' => $indicators74,
                      'itemView' => '/group/_indicators74',
                      'layout' => '{items}',
                    ]);
                    ?>
                  </div>
                </div>
              </div>
              <div class="col-md-12">
                <div class="panel box box-success">
                  <div class="box-header with-border">
                    <h3 class="box-title">- รอบสอง ของปีงบประมาณ พ.ศ. 2565 (1 เมษายน 2565-30 กันยายน 2565)</h3>
                  </div>
                  <div class="box-body">
                    <?php
                    echo ListView::widget([
                      'dataProvider' => $indicators75,
                      'itemView' => '/group/_indicators75',
                      'layout' => '{items}',
                    ]);
                    ?>
                  </div>
                </div>
              </div>
              <div class="col-md-12">
                <div class="panel box box-success">
                  <div class="box-header with-border">
                    <h3 class="box-title">ไตรมาสที่ 3 รอบแรก ของปีงบประมาณ พ.ศ. 2566 (1 ตุลาคม 2565-31 มีนาคม 2566)</h3>
                  </div>
                  <div class="box-body">
                    <?php
                    echo ListView::widget([
                      'dataProvider' => $indicators76,
                      'itemView' => '/group/_indicators76',
                      'layout' => '{items}',
                    ]);
                    ?>
                  </div>
                </div>
              </div>
              <div class="col-md-12">
                <div class="panel box box-success">
                  <div class="box-header with-border">
                    <h3 class="box-title">- รอบแรก ของปีงบประมาณ พ.ศ. 2566 (1 ตุลาคม 2565-31 มีนาคม 2566)</h3>
                  </div>
                  <div class="box-body">
                    <?php
                    echo ListView::widget([
                      'dataProvider' => $indicators77,
                      'itemView' => '/group/_indicators77',
                      'layout' => '{items}',
                    ]);
                    ?>
                  </div>
                </div>
              </div>

              <div class="col-md-12">
                <div class="callout callout-success">
                  <h4><i class="fa fa-check-square"></i>
                    MOIT8 หน่วยงานมีการอบรมให้ความรู้แก่เจ้าหน้าที่ภายในหน่วยงานเกี่ยวกับการเสริมสร้าง และพัฒนาทางด้านจริยธรรม และการรักษาวินัย รวมทั้งการป้องกันมิให้กระทำผิดวินัย</h4>
                </div>
                <div class="panel box box-success">
                  <div class="box-header with-border">
                    <h3 class="box-title">MOIT8 หลักฐานที่แสดงถึงการอบรมให้ความรู้แก่เจ้าหน้าที่ภายในหน่วยงานเกี่ยวกับ การเสริมสร้างและพัฒนาทางด้านจริยธรรมและการมีวินัยรวมทั้งการป้องกันมิให้กระทำผิดวินัย</h3>
                    <h5 class="box-title">MOIT8 1. มีหลักฐานการอบรมให้ความรู้แก่เจ้าหน้าที่ภายในหน่วยงานเกี่ยวกับการเสริมสร้าง และพัฒนาทางด้านจริยธรรมและการมีวินัยรวมทั้งการป้องกันมิให้กระทำผิดวินัย 1. ในรูปแบบการอบรม ณ สถานที่จัดการอบรม (On-site) หรือรูปแบบการอบรม ผ่านสื่ออิเล็กทรอนิกส์ (Online) แล้วแต่กรณี และมีการขออนุญาตนำไปเผยแพร่ บนเว็บไซต์ของหน่วยงาน ประกอบด้วย</h5>
                  </div>
                  <div class="box-body">
                    <?php
                    echo ListView::widget([
                      'dataProvider' => $indicators78,
                      'itemView' => '/group/_indicators78',
                      'layout' => '{items}',
                    ]);
                    ?>
                  </div>
                </div>
              </div>
              <div class="col-md-12">
                <div class="callout callout-success">
                  <h4><i class="fa fa-check-square"></i>
                    MOIT9 หน่วยงานมีแนวปฏิบัติการจัดการเรื่องร้องเรียน และช่องทางการร้องเรียน</h4>
                </div>
                <div class="panel box box-success">
                  <div class="box-header with-border">
                    <h3 class="box-title">หลักฐานที่แสดงถึงแนวปฏิบัติการจัดการเรื่องร้องเรียนของหน่วยงาน</h3>
                  </div>
                  <div class="box-body">
                    <?php
                    echo ListView::widget([
                      'dataProvider' => $indicators79,
                      'itemView' => '/group/_indicators79',
                      'layout' => '{items}',
                    ]);
                    ?>
                  </div>
                </div>
              </div>
              <div class="col-md-12">
                <div class="callout callout-success">
                  <h4><i class="fa fa-check-square"></i>
                    MOIT10 หน่วยงานมีข้อมูลเชิงสถิติเรื่องร้องเรียน</h4>
                </div>
                <div class="panel box box-success">
                  <div class="box-header with-border">
                    <h3 class="box-title">ไตรมาสที่ 2 (สรุปผลการดำเนินงานฯ รอบ 6 เดือน)</h3>
                  </div>
                  <div class="box-body">
                    <?php
                    echo ListView::widget([
                      'dataProvider' => $indicators80,
                      'itemView' => '/group/_indicators80',
                      'layout' => '{items}',
                    ]);
                    ?>
                  </div>
                </div>
              </div>
              <div class="col-md-12">
                <div class="panel box box-success">
                  <div class="box-header with-border">
                    <h3 class="box-title">2. มีรายงานสรุปผลการดำเนินงานเรื่องร้องเรียนตามข้อ (1) และข้อ (2) รอบ 6 เดือน ที่มีการวิเคราะห์ปัญหา / อุปสรรคและแนวทางแก้ไข (แนบตามข้อ 1.) รอบ 6 เดือน (1 ตุลาคม 2565-31 มีนาคม 2566) ประกอบด้วย</h3>
                  </div>
                  <div class="box-body">
                    <?php
                    echo ListView::widget([
                      'dataProvider' => $indicators81,
                      'itemView' => '/group/_indicators81',
                      'layout' => '{items}',
                    ]);
                    ?>
                  </div>
                </div>
              </div>
              <div class="col-md-12">
                <div class="panel box box-success">
                  <div class="box-header with-border">
                    <h3 class="box-title">ไตรมาสที่ 4 (สรุปผลการดำเนินงานฯ รอบ 12 เดือน)</h3>
                  </div>
                  <div class="box-body">
                    <?php
                    echo ListView::widget([
                      'dataProvider' => $indicators82,
                      'itemView' => '/group/_indicators82',
                      'layout' => '{items}',
                    ]);
                    ?>
                  </div>
                </div>
              </div>

              <div class="col-md-12">
                <div class="callout callout-success">
                  <h4><i class="fa fa-check-square"></i>
                    MOIT11 หน่วยงานของท่านเปิดโอกาสให้ผู้มีส่วนได้ส่วนเสียมีโอกาสเข้ามามีส่วนร่วมในการดำเนินงาน ตามภารกิจของหน่วยงาน</h4>
                </div>
                <div class="panel box box-success">
                  <div class="box-header with-border">
                    <h3 class="box-title"> 1. มีหลักฐานการการจัดโครงการ / กิจกรรม ที่เปิดโอกาสให้ผู้มีส่วนได้ส่วนเสีย มีโอกาสเข้ามามีส่วนร่วมในการดำเนินงานตามภารกิจของหน่วยงาน ที่ดำเนินการ ตั้งแต่วันที่ 1 ตุลาคม 2565 ถึงวันที่ 31 สิงหาคม 2566</h3>
                  </div>
                  <div class="box-body">
                    <?php
                    echo ListView::widget([
                      'dataProvider' => $indicators83,
                      'itemView' => '/group/_indicators83',
                      'layout' => '{items}',
                    ]);
                    ?>
                  </div>
                </div>
              </div>
              <div class="col-md-12">
                <div class="callout callout-success">
                  <h4><i class="fa fa-check-square"></i>
                    MOIT12 หน่วยงานมีมาตรการ “การป้องกันการรับสินบน” ที่เป็นระบบ</h4>
                </div>
                <div class="panel box box-success">
                  <div class="box-header with-border">
                    <h3 class="box-title">ไตรมาสที่ 2 หรือไตรมาสที่ 3</h3>
                  </div>
                  <div class="box-body">
                    <?php
                    echo ListView::widget([
                      'dataProvider' => $indicators84,
                      'itemView' => '/group/_indicators84',
                      'layout' => '{items}',
                    ]);
                    ?>
                  </div>
                </div>
              </div>
              <div class="col-md-12">
                <div class="callout callout-success">
                  <h4><i class="fa fa-check-square"></i>
                    MOIT13 หน่วยงานประเมินการดำเนินการตามแนวทางปฏิบัติของหน่วยงาน ในปีงบประมาณ พ.ศ. 2565-2566 ตามเกณฑ์จริยธรรมการจัดซื้อจัดหาและการส่งเสริมการขายยาและเวชภัณฑ์ที่มิใช่ยา ของกระทรวงสาธารณสุข พ.ศ. 2564</h4>
                </div>
                <div class="panel box box-success">
                  <div class="box-header with-border">
                    <h3 class="box-title">หลักฐานที่แสดงถึงการประเมินการดำเนินการตามแนวทางปฏิบัติของหน่วยงาน ประจำปีงบประมาณ พ.ศ. 2566 ตามประกาศกระทรวงสาธารณสุขว่าด้วยเกณฑ์จริยธรรมการจัดซื้อจัดหา และการส่งเสริมการขายยาและเวชภัณฑ์ที่มิใช่ยาของกระทรวงสาธารณสุข พ.ศ. 2564</h3>
                  </div>
                  <div class="box-body">
                    <?php
                    echo ListView::widget([
                      'dataProvider' => $indicators85,
                      'itemView' => '/group/_indicators85',
                      'layout' => '{items}',
                    ]);
                    ?>
                  </div>
                </div>
              </div>
              <div class="col-md-12">
                <div class="callout callout-success">
                  <h4><i class="fa fa-check-square"></i>
                    MOIT14 หน่วยงานมีการจัดทำแนวทางปฏิบัติเกี่ยวกับการใช้ทรัพย์สินของราชการที่ถูกต้อง และมีขั้นตอนการขออนุญาตเพื่อยืมทรัพย์สินของราชการไปใช้ปฏิบัติในหน่วยงาน</h4>
                </div>
                <div class="panel box box-success">
                  <div class="box-header with-border">
                    <h3 class="box-title">หน่วยงานมีการจัดทำแนวทางปฏิบัติเกี่ยวกับการใช้ทรัพย์สินของราชการที่ถูกต้อง และมีขั้นตอนการขออนุญาตเพื่อยืมทรัพย์สินของราชการไปใช้ปฏิบัติในหน่วยงาน</h3>
                  </div>
                  <div class="box-body">
                    <?php
                    echo ListView::widget([
                      'dataProvider' => $indicators86,
                      'itemView' => '/group/_indicators86',
                      'layout' => '{items}',
                    ]);
                    ?>
                  </div>
                </div>
              </div>
              <div class="col-md-12">
                <div class="callout callout-success">
                  <h4><i class="fa fa-check-square"></i>
                    MOIT15 หน่วยงานมีแผนปฏิบัติการป้องกัน ปราบปรามการทุจริตและประพฤติมิชอบ และแผนปฏิบัติการส่งเสริมคุณธรรมของชมรมจริยธรรม ประจำปีงบประมาณ พ.ศ. 2566</h4>
                </div>
                <div class="panel box box-success">
                  <div class="box-header with-border">
                    <h3 class="box-title">1. แผนปฏิบัติการป้องกัน ปราบปรามการทุจริตและประพฤติมิชอบของหน่วยงาน ประจำปีงบประมาณ พ.ศ. 2566</h3>
                  </div>
                  <div class="box-body">
                    <?php
                    echo ListView::widget([
                      'dataProvider' => $indicators87,
                      'itemView' => '/group/_indicators87',
                      'layout' => '{items}',
                    ]);
                    ?>
                  </div>
                </div>
              </div>
              <div class="col-md-12">
                <div class="panel box box-success">
                  <div class="box-header with-border">
                    <h3 class="box-title">2. แผนปฏิบัติการส่งเสริมคุณธรรมของชมรมจริยธรรมของหน่วยงาน ประจำปีงบประมาณ พ.ศ. 2566</h3>
                  </div>
                  <div class="box-body">
                    <?php
                    echo ListView::widget([
                      'dataProvider' => $indicators88,
                      'itemView' => '/group/_indicators88',
                      'layout' => '{items}',
                    ]);
                    ?>
                  </div>
                </div>
              </div>
              <div class="col-md-12">
                <div class="callout callout-success">
                  <h4><i class="fa fa-check-square"></i>
                    MOIT16 หน่วยงานมีรายงานผลการดำเนินงานตามแผนปฏิบัติการป้องกัน ปราบปรามการทุจริต และประพฤติมิชอบ ประจำปีงบประมาณ พ.ศ. 2566 และแผนปฏิบัติการส่งเสริมคุณธรรม ของชมรมจริยธรรมของหน่วยงาน ประจำปีงบประมาณ พ.ศ. 2566</h4>
                </div>
                <div class="panel box box-success">
                  <div class="box-header with-border">
                    <h3 class="box-title">1. รายงานผลการดำเนินงานตามแผนปฏิบัติการป้องกัน ปราบปรามการทุจริต และประพฤติมิชอบของหน่วยงาน ประจำปีงบประมาณ พ.ศ. 2566 (รอบ 6 เดือน)</h3>
                  </div>
                  <div class="box-body">
                    <?php
                    echo ListView::widget([
                      'dataProvider' => $indicators89,
                      'itemView' => '/group/_indicators89',
                      'layout' => '{items}',
                    ]);
                    ?>
                  </div>
                </div>
              </div>
              <div class="col-md-12">
                <div class="panel box box-success">
                  <div class="box-header with-border">
                    <h3 class="box-title">2. รายงานผลการดำเนินงานตามแผนปฏิบัติการส่งเสริมคุณธรรมของชมรมจริยธรรมของหน่วยงาน ประจำปีงบประมาณ พ.ศ. 2566 (รอบ 6 เดือน)</h3>
                  </div>
                  <div class="box-body">
                    <?php
                    echo ListView::widget([
                      'dataProvider' => $indicators90,
                      'itemView' => '/group/_indicators90',
                      'layout' => '{items}',
                    ]);
                    ?>
                  </div>
                </div>
              </div>
              <div class="col-md-12">
                <div class="callout callout-success">
                  <h4><i class="fa fa-check-square"></i>
                    MOIT17 หน่วยงานมีการประเมินความเสี่ยงการทุจริต ประจำปีงบประมาณ พ.ศ. 2566 อย่างเป็นระบบ</h4>
                </div>
                <div class="panel box box-success">
                  <div class="box-header with-border">
                    <h3 class="box-title">ไตรมาสที่ 2</h3>
                  </div>
                  <div class="box-body">
                    <?php
                    echo ListView::widget([
                      'dataProvider' => $indicators91,
                      'itemView' => '/group/_indicators91',
                      'layout' => '{items}',
                    ]);
                    ?>
                  </div>
                </div>
              </div>
              <div class="col-md-12">
                <div class="callout callout-success">
                  <h4><i class="fa fa-check-square"></i>
                    MOIT18 หน่วยงานมีการปฏิบัติตามมาตรการป้องกันการทุจริต (การควบคุมความเสี่ยงการทุจริต)</h4>
                </div>
                <div class="panel box box-success">
                  <div class="box-header with-border">
                    <h3 class="box-title">ไตรมาสที่ 2</h3>
                  </div>
                  <div class="box-body">
                    <?php
                    echo ListView::widget([
                      'dataProvider' => $indicators92,
                      'itemView' => '/group/_indicators92',
                      'layout' => '{items}',
                    ]);
                    ?>
                  </div>
                </div>
              </div>
              <div class="col-md-12">
                <div class="callout callout-success">
                  <h4><i class="fa fa-check-square"></i>
                    MOIT19 หน่วยงานมีการรายงานผลการส่งเสริมการปฏิบัติตามประมวลจริยธรรมข้าราชการพลเรือน กรณีการเรี่ยไรและกรณีการให้หรือรับของขวัญหรือประโยชน์อื่นใด ประจำปีงบประมาณ พ.ศ. 2566</h4>
                </div>
                <div class="panel box box-success">
                  <div class="box-header with-border">
                    <h3 class="box-title">ไตรมาสที่ 2</h3>
                  </div>
                  <div class="box-body">
                    <?php
                    echo ListView::widget([
                      'dataProvider' => $indicators93,
                      'itemView' => '/group/_indicators93',
                      'layout' => '{items}',
                    ]);
                    ?>
                  </div>
                </div>
              </div>
              <div class="col-md-12">
                <div class="callout callout-success">
                  <h4><i class="fa fa-check-square"></i>
                    MOIT20 หน่วยงานมีการอบรมให้ความรู้ภายในหน่วยงาน เรื่อง ผลประโยชน์ทับซ้อนในหลักสูตร ต้านทุจริตศึกษา (Anti-Corruption Education) กระทรวงสาธารณสุข (ฉบับปรับปรุง) พ.ศ. 2565</h4>
                </div>
                <div class="panel box box-success">
                  <div class="box-header with-border">
                    <h3 class="box-title"> 1. มีหลักฐานการอบรมให้ความรู้เรื่อง ผลประโยชน์ทับซ้อนในหลักสูตรต้านทุจริตศึกษา (Anti-Corruption Education) กระทรวงสาธารณสุข (ฉบับปรับปรุง) พ.ศ. 2565 ให้แก่บุคลากรในหน่วยงาน และมีการขออนุญาตนำไปเผยแพร่บนเว็บไซต์ของหน่วยงาน</h3>
                  </div>
                  <div class="box-body">
                    <?php
                    echo ListView::widget([
                      'dataProvider' => $indicators94,
                      'itemView' => '/group/_indicators94',
                      'layout' => '{items}',
                    ]);
                    ?>
                  </div>
                </div>
              </div>
              <div class="col-md-12">
                <div class="callout callout-success">
                  <h4><i class="fa fa-check-square"></i>
                    MOIT21 หน่วยงานมีการเผยแพร่เจตจำนงสุจริตของการปฏิบัติหน้าที่ราชการ และนโยบายที่เคารพ สิทธิมนุษยชนและศักดิ์ศรีของผู้ปฏิบัติงานและของผู้บริหาร ต่อสาธารณชน</h4>
                </div>
                <div class="panel box box-success">
                  <div class="box-header with-border">
                    <h3 class="box-title"> ไตรมาส 2</h3>
                  </div>
                  <div class="box-body">
                    <?php
                    echo ListView::widget([
                      'dataProvider' => $indicators95,
                      'itemView' => '/group/_indicators95',
                      'layout' => '{items}',
                    ]);
                    ?>
                  </div>
                </div>
              </div>
              <div class="col-md-12">
                <div class="callout callout-success">
                  <h4><i class="fa fa-check-square"></i>
                    MOIT22 หน่วยงานมีแนวปฏิบัติที่เคารพสิทธิมนุษยชนและศักดิ์ศรีของผู้ปฏิบัติงาน และรายงานการป้องกันและแก้ไขปัญหาการล่วงละเมิดหรือคุกคามทางเพศในการทำงาน</h4>
                </div>
                <div class="panel box box-success">
                  <div class="box-header with-border">
                    <h3 class="box-title"> ไตรมาส 2</h3>
                  </div>
                  <div class="box-body">
                    <?php
                    echo ListView::widget([
                      'dataProvider' => $indicators95,
                      'itemView' => '/group/_indicators95',
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



        <!-- TAB 3 -->

        <div class="tab-pane" id="tab_3">
          <div class="box-body">
            <div class="row">

            </div>
          </div>
        </div>

        <!-- END TAB3 -->


        <!-- TAB4 -->
        <div class="tab-pane" id="tab_4">
          <div class="box-body">
            <div class="row">

            </div>
          </div>
        </div>
      </div>
    </div>

  </div>