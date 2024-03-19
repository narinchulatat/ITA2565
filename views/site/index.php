<?php
/* @var $this yii\web\View */
$this->title = 'ระบบจัดเก็บเอกสาร (Integrity and Transparency Assessment: ITA) โรงพยาบาลน้ำยืน จังหวัดอุบลราชธานี (ปีงบประมาณ 2567)';

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
                    MOIT1 หน่วยงานมีการวางระบบโดยการกำหนดมาตรการการเผยแพร่ข้อมูลต่อสาธารณะ ผ่านเว็บไซต์ของหน่วยงาน</h4>
                </div>
                <div class="panel box box-success">
                  <div class="box-header with-border">
                    <h3 class="box-title">1. คำสั่ง / ประกาศ ที่ระบุกรอบแนวทาง</h3>
                  </div>
                  <div class="box-body">
                    <?php
                    echo ListView::widget([
                      'dataProvider' => $indicators111,
                      'itemView' => '/group/_indicators111',
                      'layout' => '{items}',
                    ]);
                    ?>
                  </div>
                </div>
              </div>
              <div class="col-md-12">
                <div class="panel box box-success">
                  <div class="box-header with-border">
                    <h3 class="box-title">2. รายงานผลการกำกับติดตามการเผยแพร่ข้อมูลต่อสาธารณะผ่านเว็บไซต์ของหน่วยงานในปีที่ผ่านมา (ของปีงบประมาณ พ.ศ. 2566)</h3>
                  </div>
                  <div class="box-body">
                    <?php
                    echo ListView::widget([
                      'dataProvider' => $indicators112,
                      'itemView' => '/group/_indicators112',
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
                      'dataProvider' => $indicators113,
                      'itemView' => '/group/_indicators113',
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
                      'dataProvider' => $indicators114,
                      'itemView' => '/group/_indicators114',
                      'layout' => '{items}',
                    ]);
                    ?>
                  </div>
                </div>
              </div>

              <div class="col-md-12">
                <div class="callout callout-success">
                  <h4><i class="fa fa-check-square"></i>
                    MOIT3 หน่วยงานมีรายงานการวิเคราะห์ผลการจัดซื้อจัดจ้างและการจัดหาพัสดุ ของปีงบประมาณ พ.ศ. 2566</h4>
                </div>
                <div class="panel box box-success">
                  <div class="box-header with-border">
                    <h3 class="box-title">รายงานการวิรายงานการวิเคราะห์ผลการจัดซื้อจัดจ้างและการจัดหาพัสดุประจำปีงบประมาณ พ.ศ. 2565</h3>
                  </div>
                  <div class="box-body">
                    <?php
                    echo ListView::widget([
                      'dataProvider' => $indicators115,
                      'itemView' => '/group/_indicators115',
                      'layout' => '{items}',
                    ]);
                    ?>
                  </div>
                </div>
              </div>

              <div class="col-md-12">
                <div class="callout callout-success">
                  <h4><i class="fa fa-check-square"></i>
                    MOIT4 หน่วยงานมีการวางระบบการจัดซื้อจัดจ้างและการจัดหาพัสดุ ประจำปีงบประมาณ พ.ศ. 2567</h4>
                </div>
                <div class="panel box box-success">
                  <div class="box-header with-border">
                    <h3 class="box-title">ข้อ 1. ประกาศเผยแพร่แผนการจัดซื้อจัดจ้างและการจัดหาพัสดุ ประจำปีของหน่วยงาน ภายใน 30 วันทำการระบุวันที่ที่ได้รับการจัดสรรงบประมาณในช่องคำอธิบายชี้แจงประกอบหลักฐาน วันที่ที่ได้ทำการประกาศเผยแพร่ให้ชัดเจน</h3>
                  </div>
                  <div class="box-body">
                    <?php
                    echo ListView::widget([
                      'dataProvider' => $indicators116,
                      'itemView' => '/group/_indicators116',
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
                      'dataProvider' => $indicators117,
                      'itemView' => '/group/_indicators117',
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
                      'dataProvider' => $indicators118,
                      'itemView' => '/group/_indicators118',
                      'layout' => '{items}',
                    ]);
                    ?>
                  </div>
                </div>
              </div>

              <div class="col-md-12">
                <div class="callout callout-success">
                  <h4><i class="fa fa-check-square"></i>
                    MOIT5 หน่วยงานมีการสรุปผลการจัดซื้อจัดจ้างและการจัดหาพัสดุรายเดือน ประจำปีงบประมาณ พ.ศ. 2567</h4>
                </div>
                <div class="panel box box-success">
                  <div class="box-header with-border">
                    <h3 class="box-title">ไตรมาสที่ 1 หน่วยงานวาง link จำนวน 3 link (Link ละ 1 เดือน)</h3>
                  </div>
                  <div class="box-body">
                    <?php
                    echo ListView::widget([
                      'dataProvider' => $indicators119,
                      'itemView' => '/group/_indicators119',
                      'layout' => '{items}',
                    ]);
                    ?>
                  </div>
                </div>
              </div>
              <div class="col-md-12">
                <div class="panel box box-success">
                  <div class="box-header with-border">
                    <h3 class="box-title">2. มีแบบสรุปผลการดำเนินการจัดซื้อจัดจ้างในรอบเดือน (แบบ สขร. 1) ไตรมาสที่ 1 เดือนตุลาคม 2566-เดือนธันวาคม 2566</h3>
                  </div>
                  <div class="box-body">
                    <?php
                    echo ListView::widget([
                      'dataProvider' => $indicators120,
                      'itemView' => '/group/_indicators120',
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
                    MOIT1 หน่วยงานมีการวางระบบโดยการกำหนดมาตรการการเผยแพร่ข้อมูลต่อสาธารณะ ผ่านเว็บไซต์ของหน่วยงาน</h4>
                </div>
                <div class="panel box box-success">
                  <div class="box-header with-border">
                    <h3 class="box-title">1. คำสั่ง / ประกาศ ที่ระบุกรอบแนวทาง</h3>
                  </div>
                  <div class="box-body">
                    <?php
                    echo ListView::widget([
                      'dataProvider' => $indicators111,
                      'itemView' => '/group/_indicators111',
                      'layout' => '{items}',
                    ]);
                    ?>
                  </div>
                </div>
              </div>
              <div class="col-md-12">
                <div class="panel box box-success">
                  <div class="box-header with-border">
                    <h3 class="box-title">2. รายงานผลการกำกับติดตามการเผยแพร่ข้อมูลต่อสาธารณะผ่านเว็บไซต์ของหน่วยงานในปีที่ผ่านมา (ของปีงบประมาณ พ.ศ. 2566)</h3>
                  </div>
                  <div class="box-body">
                    <?php
                    echo ListView::widget([
                      'dataProvider' => $indicators112,
                      'itemView' => '/group/_indicators112',
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
                      'dataProvider' => $indicators113,
                      'itemView' => '/group/_indicators113',
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
                      'dataProvider' => $indicators114,
                      'itemView' => '/group/_indicators114',
                      'layout' => '{items}',
                    ]);
                    ?>
                  </div>
                </div>
              </div>

              <div class="col-md-12">
                <div class="callout callout-success">
                  <h4><i class="fa fa-check-square"></i>
                    MOIT3 หน่วยงานมีรายงานการวิเคราะห์ผลการจัดซื้อจัดจ้างและการจัดหาพัสดุ ของปีงบประมาณ พ.ศ. 2566</h4>
                </div>
                <div class="panel box box-success">
                  <div class="box-header with-border">
                    <h3 class="box-title">รายงานการวิรายงานการวิเคราะห์ผลการจัดซื้อจัดจ้างและการจัดหาพัสดุประจำปีงบประมาณ พ.ศ. 2565</h3>
                  </div>
                  <div class="box-body">
                    <?php
                    echo ListView::widget([
                      'dataProvider' => $indicators115,
                      'itemView' => '/group/_indicators115',
                      'layout' => '{items}',
                    ]);
                    ?>
                  </div>
                </div>
              </div>

              <div class="col-md-12">
                <div class="callout callout-success">
                  <h4><i class="fa fa-check-square"></i>
                    MOIT4 หน่วยงานมีการวางระบบการจัดซื้อจัดจ้างและการจัดหาพัสดุ ประจำปีงบประมาณ พ.ศ. 2567</h4>
                </div>
                <div class="panel box box-success">
                  <div class="box-header with-border">
                    <h3 class="box-title">ข้อ 1. ประกาศเผยแพร่แผนการจัดซื้อจัดจ้างและการจัดหาพัสดุ ประจำปีของหน่วยงาน ภายใน 30 วันทำการระบุวันที่ที่ได้รับการจัดสรรงบประมาณในช่องคำอธิบายชี้แจงประกอบหลักฐาน วันที่ที่ได้ทำการประกาศเผยแพร่ให้ชัดเจน</h3>
                  </div>
                  <div class="box-body">
                    <?php
                    echo ListView::widget([
                      'dataProvider' => $indicators116,
                      'itemView' => '/group/_indicators116',
                      'layout' => '{items}',
                    ]);
                    ?>
                  </div>
                </div>
              </div>

              <div class="col-md-12">
                <div class="callout callout-success">
                  <h4><i class="fa fa-check-square"></i>
                    MOIT5 หน่วยงานมีการสรุปผลการจัดซื้อจัดจ้างและการจัดหาพัสดุรายเดือน ประจำปีงบประมาณ พ.ศ. 2567</h4>
                </div>
                <div class="panel box box-success">
                  <div class="box-header with-border">
                    <h3 class="box-title">ไตรมาสที่ 1 หน่วยงานวาง link จำนวน 3 link (Link ละ 1 เดือน)</h3>
                  </div>
                  <div class="box-body">
                    <?php
                    echo ListView::widget([
                      'dataProvider' => $indicators121,
                      'itemView' => '/group/_indicators121',
                      'layout' => '{items}',
                    ]);
                    ?>
                  </div>
                </div>
              </div>
              <div class="col-md-12">
                <div class="panel box box-success">
                  <div class="box-header with-border">
                    <h3 class="box-title">2. มีแบบสรุปผลการดำเนินการจัดซื้อจัดจ้างในรอบเดือน (แบบ สขร. 1) ไตรมาสที่ 1 เดือนตุลาคม 2566-เดือนธันวาคม 2566</h3>
                  </div>
                  <div class="box-body">
                    <?php
                    echo ListView::widget([
                      'dataProvider' => $indicators122,
                      'itemView' => '/group/_indicators122',
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
                      'dataProvider' => $indicators123,
                      'itemView' => '/group/_indicators123',
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
                      'dataProvider' => $indicators124,
                      'itemView' => '/group/_indicators124',
                      'layout' => '{items}',
                    ]);
                    ?>
                  </div>
                </div>
              </div>

              <div class="col-md-12">
                <div class="callout callout-success">
                  <h4><i class="fa fa-check-square"></i>
                    MOIT7 หน่วยงานมีการรายงานการประเมินผลการปฏิบัติราชการของบุคลากรในหน่วยงาน และเปิดเผยผลการปฏิบัติราชการ ระดับดีเด่น และระดับดีมาก ในที่เปิดเผยให้ทราบ ของปีงบประมาณ พ.ศ. 2566 และปีงบประมาณ พ.ศ. 2567</h4>
                </div>
                <div class="panel box box-success">
                  <div class="box-header with-border">
                    <h3 class="box-title">ไตรมาสที่ 2 รอบสอง ของปีงบประมาณ พ.ศ. 2566 (1 เมษายน 2566-30 กันยายน 2566)</h3>
                  </div>
                  <div class="box-body">
                    <?php
                    echo ListView::widget([
                      'dataProvider' => $indicators125,
                      'itemView' => '/group/_indicators125',
                      'layout' => '{items}',
                    ]);
                    ?>
                  </div>
                </div>
              </div>
              <div class="col-md-12">
                <div class="panel box box-success">
                  <div class="box-header with-border">
                    <h3 class="box-title">- รอบสอง ของปีงบประมาณ พ.ศ. 2566 (1 เมษายน 2566-30 กันยายน 2566)</h3>
                  </div>
                  <div class="box-body">
                    <?php
                    echo ListView::widget([
                      'dataProvider' => $indicators126,
                      'itemView' => '/group/_indicators126',
                      'layout' => '{items}',
                    ]);
                    ?>
                  </div>
                </div>
              </div>

              <div class="col-md-12">
                <div class="callout callout-success">
                  <h4><i class="fa fa-check-square"></i>
                    MOIT8 หลักฐานที่แสดงถึงการอบรมให้ความรู้แก่เจ้าหน้าที่ภายในหน่วยงานเกี่ยวกับ การเสริมสร้างและพัฒนาทางด้านจริยธรรมและการมีวินัยรวมทั้งการป้องกันมิให้กระทำผิดวินัย</h4>
                </div>
                <div class="panel box box-success">
                  <div class="box-header with-border">
                    <h3 class="box-title">1. มีหลักฐานการอบรมให้ความรู้แก่เจ้าหน้าที่ภายในหน่วยงานเกี่ยวกับการเสริมสร้างและพัฒนาทางด้านจริยธรรมและการมีวินัยรวมทั้งการป้องกันมิให้กระทำผิดวินัย ในรูปแบบการอบรม ณ สถานที่จัดการอบรม (On-site) หรือรูปแบบการอบรมผ่านสื่ออิเล็กทรอนิกส์ (Online) แล้วแต่กรณี และมีการขออนุญาตนำไปเผยแพร่บนเว็บไซต์ของหน่วยงาน ประกอบด้วย</h3>
                  </div>
                  <div class="box-body">
                    <?php
                    echo ListView::widget([
                      'dataProvider' => $indicators127,
                      'itemView' => '/group/_indicators127',
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
                      'dataProvider' => $indicators128,
                      'itemView' => '/group/_indicators128',
                      'layout' => '{items}',
                    ]);
                    ?>
                  </div>
                </div>
              </div>

              <div class="col-md-12">
                <div class="callout callout-success">
                  <h4><i class="fa fa-check-square"></i>
                    MOIT10 หน่วยงานมีสรุปผลการดำเนินงานเรื่องร้องเรียนการปฏิบัติงานหรือการให้บริการ ของเจ้าหน้าที่ภายในหน่วยงาน และเรื่องร้องเรียนการทุจริตและประพฤติมิชอบ</h4>
                </div>
                <div class="panel box box-success">
                  <div class="box-header with-border">
                    <h3 class="box-title">ไตรมาสที่ 2 (สรุปผลการดำเนินงานฯ รอบ 6 เดือน)</h3>
                  </div>
                  <div class="box-body">
                    <?php
                    echo ListView::widget([
                      'dataProvider' => $indicators129,
                      'itemView' => '/group/_indicators129',
                      'layout' => '{items}',
                    ]);
                    ?>
                  </div>
                </div>
              </div>
              <div class="col-md-12">
                <div class="panel box box-success">
                  <div class="box-header with-border">
                    <h3 class="box-title">2. มีรายงานสรุปผลการดำเนินงานเรื่องร้องเรียนตามข้อ (1) และข้อ (2) รอบ 6 เดือน ที่มีการวิเคราะห์ปัญหา / อุปสรรคและแนวทางแก้ไข (แนบตามข้อ 1.) รอบ 6 เดือน (1 ตุลาคม 2566-31 มีนาคม 2567) ประกอบด้วย</h3>
                  </div>
                  <div class="box-body">
                    <?php
                    echo ListView::widget([
                      'dataProvider' => $indicators130,
                      'itemView' => '/group/_indicators130',
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
                    <h3 class="box-title">1. มีหลักฐานการจัดโครงการ / กิจกรรม ที่เปิดโอกาสให้ผู้มีส่วนได้ส่วนเสียมีโอกาสเข้ามามีส่วนร่วมในการดำเนินงานตามภารกิจของหน่วยงาน ที่ดำเนินการตั้งแต่วันที่ 1 ตุลาคม 2566 ถึงวันที่ 31 สิงหาคม 2567</h3>
                  </div>
                  <div class="box-body">
                    <?php
                    echo ListView::widget([
                      'dataProvider' => $indicators131,
                      'itemView' => '/group/_indicators131',
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
                    <h3 class="box-title">ไตรมาสที่ 2</h3>
                  </div>
                  <div class="box-body">
                    <?php
                    echo ListView::widget([
                      'dataProvider' => $indicators132,
                      'itemView' => '/group/_indicators132',
                      'layout' => '{items}',
                    ]);
                    ?>
                  </div>
                </div>
              </div>

              <div class="col-md-12">
                <div class="callout callout-success">
                  <h4><i class="fa fa-check-square"></i>
                    MOIT13 หน่วยงานประเมินการดำเนินการตามแนวทางปฏิบัติของหน่วยงาน ในปีงบประมาณ พ.ศ. 2566-2567 ตามประกาศกระทรวงสาธารณสุข เรื่อง เกณฑ์จริยธรรมการจัดซื้อจัดหา และการส่งเสริมการขายยาและเวชภัณฑ์ที่มิใช่ยาของกระทรวงสาธารณสุข พ.ศ. 2564</h4>
                </div>
                <div class="panel box box-success">
                  <div class="box-header with-border">
                    <h3 class="box-title">หลักฐานที่แสดงถึงหน่วยงานประเมินการดำเนินการตามแนวทางปฏิบัติของหน่วยงาน ในปีงบประมาณ พ.ศ. 2566-2567 ตามประกาศกระทรวงสาธารณสุข เรื่อง เกณฑ์จริยธรรมการจัดซื้อจัดหาและการส่งเสริมการขายยาและเวชภัณฑ์ที่มิใช่ยาของกระทรวงสาธารณสุข พ.ศ. 2564</h3>
                  </div>
                  <div class="box-body">
                    <?php
                    echo ListView::widget([
                      'dataProvider' => $indicators133,
                      'itemView' => '/group/_indicators133',
                      'layout' => '{items}',
                    ]);
                    ?>
                  </div>
                </div>
              </div>

              <div class="col-md-12">
                <div class="callout callout-success">
                  <h4><i class="fa fa-check-square"></i>
                    MOIT14 หน่วยงานมีแนวทางปฏิบัติเกี่ยวกับการใช้ทรัพย์สินของราชการ และมีขั้นตอนการขออนุญาตเพื่อยืมทรัพย์สินของราชการไปใช้ปฏิบัติในหน่วยงานที่ถูกต้อง</h4>
                </div>
                <div class="panel box box-success">
                  <div class="box-header with-border">
                    <h3 class="box-title">หน่วยงานมีการจัดทำแนวทางปฏิบัติเกี่ยวกับการใช้ทรัพย์สินของราชการที่ถูกต้อง และมีขั้นตอนการขออนุญาตเพื่อยืมทรัพย์สินของราชการไปใช้ปฏิบัติในหน่วยงาน</h3>
                  </div>
                  <div class="box-body">
                    <?php
                    echo ListView::widget([
                      'dataProvider' => $indicators134,
                      'itemView' => '/group/_indicators134',
                      'layout' => '{items}',
                    ]);
                    ?>
                  </div>
                </div>
              </div>

              <div class="col-md-12">
                <div class="callout callout-success">
                  <h4><i class="fa fa-check-square"></i>
                    MOIT15 หน่วยงานมีแผนปฏิบัติการป้องกัน ปราบปรามการทุจริตและประพฤติมิชอบ และแผนปฏิบัติการส่งเสริมคุณธรรมของชมรมจริยธรรม ประจำปีงบประมาณ พ.ศ. 2567</h4>
                </div>
                <div class="panel box box-success">
                  <div class="box-header with-border">
                    <h3 class="box-title">1. แผนปฏิบัติการป้องกัน ปราบปรามการทุจริตและประพฤติมิชอบของหน่วยงาน ประจำปีงบประมาณ พ.ศ. 2567</h3>
                  </div>
                  <div class="box-body">
                    <?php
                    echo ListView::widget([
                      'dataProvider' => $indicators135,
                      'itemView' => '/group/_indicators135',
                      'layout' => '{items}',
                    ]);
                    ?>
                  </div>
                </div>
              </div>
              <div class="col-md-12">
                <div class="panel box box-success">
                  <div class="box-header with-border">
                    <h3 class="box-title">2. แผนปฏิบัติการส่งเสริมคุณธรรมของชมรมจริยธรรมของหน่วยงาน ประจำปีงบประมาณ พ.ศ. 2567</h3>
                  </div>
                  <div class="box-body">
                    <?php
                    echo ListView::widget([
                      'dataProvider' => $indicators136,
                      'itemView' => '/group/_indicators136',
                      'layout' => '{items}',
                    ]);
                    ?>
                  </div>
                </div>
              </div>

              <div class="col-md-12">
                <div class="callout callout-success">
                  <h4><i class="fa fa-check-square"></i>
                    MOIT16 หน่วยงานมีรายงานผลการดำเนินงานตามแผนปฏิบัติการป้องกัน ปราบปรามการทุจริต และประพฤติมิชอบ ประจำปีงบประมาณ พ.ศ. 2567 และรายงานผลการดำเนินงาน ตามแผนปฏิบัติการส่งเสริมคุณธรรมของชมรมจริยธรรมของหน่วยงาน ประจำปีงบประมาณ พ.ศ. 2567</h4>
                </div>
                <div class="panel box box-success">
                  <div class="box-header with-border">
                    <h3 class="box-title">รอบไตรมาสที่ 2</h3>
                  </div>
                  <div class="box-header with-border">
                    <h3 class="box-title">1. รายงานผลการดำเนินงานตามแผนปฏิบัติการป้องกัน ปราบปรามการทุจริต และประพฤติมิชอบของหน่วยงาน ประจำปีงบประมาณ พ.ศ. 2567 (รอบ 6 เดือน)</h3>
                  </div>
                  <div class="box-body">
                    <?php
                    echo ListView::widget([
                      'dataProvider' => $indicators137,
                      'itemView' => '/group/_indicators137',
                      'layout' => '{items}',
                    ]);
                    ?>
                  </div>
                </div>
              </div>
              <div class="col-md-12">
                <div class="panel box box-success">
                  <div class="box-header with-border">
                    <h3 class="box-title">2. รายงานผลการดำเนินงานตามแผนปฏิบัติการส่งเสริมคุณธรรมของชมรมจริยธรรมของหน่วยงาน ประจำปีงบประมาณ พ.ศ. 2567 (รอบ 6 เดือน)</h3>
                  </div>
                  <div class="box-body">
                    <?php
                    echo ListView::widget([
                      'dataProvider' => $indicators138,
                      'itemView' => '/group/_indicators138',
                      'layout' => '{items}',
                    ]);
                    ?>
                  </div>
                </div>
              </div>

              <div class="col-md-12">
                <div class="callout callout-success">
                  <h4><i class="fa fa-check-square"></i>
                    MOIT17 หน่วยงานมีการประเมินความเสี่ยงการทุจริต ประจำปีงบประมาณ พ.ศ. 2567 อย่างเป็นระบบ</h4>
                </div>
                <div class="panel box box-success">
                  <div class="box-header with-border">
                    <h3 class="box-title">ไตรมาสที่ 2</h3>
                  </div>
                  <div class="box-body">
                    <?php
                    echo ListView::widget([
                      'dataProvider' => $indicators139,
                      'itemView' => '/group/_indicators139',
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
                      'dataProvider' => $indicators140,
                      'itemView' => '/group/_indicators140',
                      'layout' => '{items}',
                    ]);
                    ?>
                  </div>
                </div>
              </div>

              <div class="col-md-12">
                <div class="callout callout-success">
                  <h4><i class="fa fa-check-square"></i>
                    MOIT19 หน่วยงานมีการรายงานผลการส่งเสริมการปฏิบัติตามประมวลจริยธรรมข้าราชการพลเรือน กรณีการเรี่ยไรและกรณีการให้หรือรับของขวัญหรือประโยชน์อื่นใด ประจำปีงบประมาณ พ.ศ. 2567</h4>
                </div>
                <div class="panel box box-success">
                  <div class="box-header with-border">
                    <h3 class="box-title">ไตรมาสที่ 2</h3>
                  </div>
                  <div class="box-body">
                    <?php
                    echo ListView::widget([
                      'dataProvider' => $indicators141,
                      'itemView' => '/group/_indicators141',
                      'layout' => '{items}',
                    ]);
                    ?>
                  </div>
                </div>
              </div>

              <div class="col-md-12">
                <div class="callout callout-success">
                  <h4><i class="fa fa-check-square"></i>
                    MOIT20 หน่วยงานมีการอบรมให้ความรู้ภายในหน่วยงานเรื่องผลประโยชน์ทับซ้อน โดยใช้หลักสูตร ต้านทุจริตศึกษา (Anti-Corruption Education) กระทรวงสาธารณสุข (ฉบับปรับปรุง) พ.ศ. 2565</h4>
                </div>
                <div class="panel box box-success">
                  <div class="box-header with-border">
                    <h3 class="box-title">หน่วยงาน ส่งหลักฐานที่แสดงถึงการอบรมให้ความรู้ เรื่องผลประโยชน์ทับซ้อนในหลักสูตรต้านทุจริตศึกษา (Anti-Corruption Education) กระทรวงสาธารณสุข (ฉบับปรับปรุง) พ.ศ. 2565 มีรายละเอียด ดังนี้</h3>
                  </div>
                  <div class="box-header with-border">
                    <h3 class="box-title">1. มีหลักฐานโครงการอบรมเรื่องผลประโยชน์ทับซ้อนโดยใช้หลักสูตรต้านทุจริตศึกษา (Anti-Corruption Education) กระทรวงสาธารณสุข ภายใต้พันธสัญญา : สาธารณสุข ซื่อสัตย์ โปร่งใส ตื่นรู้ สู้ทุจริต จิตพอเพียง ประจำปีงบประมาณ พ.ศ. 2567</h3>
                  </div>
                  <div class="box-body">
                    <?php
                    echo ListView::widget([
                      'dataProvider' => $indicators142,
                      'itemView' => '/group/_indicators142',
                      'layout' => '{items}',
                    ]);
                    ?>
                  </div>
                </div>
              </div>

              <div class="col-md-12">
                <div class="callout callout-success">
                  <h4><i class="fa fa-check-square"></i>
                    MOIT21 หน่วยงานมีการเผยแพร่เจตจำนงสุจริตของการปฏิบัติหน้าที่ราชการ และนโยบายที่เคารพ สิทธิมนุษยชนและศักดิ์ศรีของผู้ปฏิบัติงานและของผู้บริหารต่อสาธารณชน</h4>
                </div>
                <div class="panel box box-success">
                  <div class="box-header with-border">
                    <h3 class="box-title">ไตรมาสที่ 2</h3>
                  </div>
                  <div class="box-body">
                    <?php
                    echo ListView::widget([
                      'dataProvider' => $indicators143,
                      'itemView' => '/group/_indicators143',
                      'layout' => '{items}',
                    ]);
                    ?>
                  </div>
                </div>
              </div>

              <div class="col-md-12">
                <div class="callout callout-success">
                  <h4><i class="fa fa-check-square"></i>
                    MOIT22 หน่วยงานมีแนวปฏิบัติที่เคารพสิทธิมนุษยชนและศักดิ์ศรีของผู้ปฏิบัติงาน และรายงาน การป้องกันและแก้ไขปัญหาการล่วงละเมิดหรือคุกคามทางเพศในการทำงาน ประจำปีงบประมาณ พ.ศ. 2567</h4>
                </div>
                <div class="panel box box-success">
                  <div class="box-header with-border">
                    <h3 class="box-title">ไตรมาสที่ 2</h3>
                  </div>
                  <div class="box-body">
                    <?php
                    echo ListView::widget([
                      'dataProvider' => $indicators144,
                      'itemView' => '/group/_indicators144',
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
              <div class="col-md-12">
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- END TAB3 -->


      <!-- TAB4 -->
      <div class="tab-pane" id="tab_4">
        <div class="box-body">
          <div class="row">
            <div class="col-md-12">
            </div>
          </div>
        </div>
      </div>

    </div>