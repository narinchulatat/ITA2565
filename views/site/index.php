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
        <li class="active"><a href="#tab_1" data-toggle="tab">แบบประเมินไตรมาสที่ 1</a></li>
        <li><a href="#tab_2" data-toggle="tab">แบบประเมินไตรมาสที่ 2</a></li>
        <li><a href="#tab_3" data-toggle="tab">แบบประเมินไตรมาสที่ 3</a></li>
        <li><a href="#tab_4" data-toggle="tab">แบบประเมินไตรมาสที่ 4</a></li>
        <li class="pull-right"><a href="#" class="text-muted"><i class="fa fa-gear"></i></a></li>
      </ul>
      <div class="tab-content">
        <div class="tab-pane active" id="tab_1">
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

        <div class="tab-pane" id="tab_2">
          <div class="box-body">
            <div class="row">
              <div class="col-md-12">
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