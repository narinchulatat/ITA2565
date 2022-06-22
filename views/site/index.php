<?php
/* @var $this yii\web\View */
$this->title = 'ระบบจัดเก็บเอกสาร (Integrity and Transparency Assessment: ITA) โรงพยาบาลน้ำยืน จังหวัดอุบลราชธานี (ปีงบประมาณ 2565)';

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
        <li><a href="#tab_2" data-toggle="tab">แบบประเมินไตรมาสที่ 2</a></li>
        <li class="active"><a href="#tab_3" data-toggle="tab">แบบประเมินไตรมาสที่ 3</a></li>
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
                      'dataProvider' => $dataProvider,
                      'itemView' => '/group/_item',
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
                      'dataProvider' => $had,
                      'itemView' => '/group/_had',
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
                      'dataProvider' => $ha,
                      'itemView' => '/group/_item',
                      'layout' => '{items}',
                    ]);
                    ?>
                  </div>
                </div>
              </div>
              <div class="col-md-12">
                <div class="panel box box-success">
                  <div class="box-header with-border">
                    <h3 class="box-title">17. ข้อมูลการจัดซื้อจัดจ้าง ประกอบด้วย</h3>
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
                <div class="callout callout-success">
                  <h4><i class="fa fa-check-square"></i>
                    MOIT3 หน่วยงานมีรายงานการวิเคราะห์ผลการจัดซื้อจัดจ้างและการจัดหาพัสดุประจำปีงบประมาณ พ.ศ. 2564</h4>
                </div>
                <div class="panel box box-success">
                  <div class="box-header with-border">
                    <h3 class="box-title">รายงานการวิเคราะห์ผลการจัดซื้อจัดจ้างและการจัดหาพัสดุประจำปีงบประมาณ พ.ศ. 2564</h3>
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
                <div class="callout callout-success">
                  <h4><i class="fa fa-check-square"></i>
                    MOIT4 หน่วยงานวางระบบเพื่อส่งเสริมความโปร่งใสในการจัดซื้อจัดจ้างและการจัดหาพัสดุ ประจำปีงบประมาณ พ.ศ. 2565</h4>
                </div>
                <div class="panel box box-success">
                  <div class="box-header with-border">
                    <h3 class="box-title">ข้อ 1. ประกาศเผยแพร่แผนการจัดซื้อจัดจ้างและการจัดหาพัสดุ ประจำปีของหน่วยงาน ภายใน 30 วันทำการระบุวันที่ที่ได้รับการจัดสรรงบประมาณในช่องคำอธิบายชี้แจงประกอบหลักฐาน วันที่ที่ได้ทำการประกาศเผยแพร่ให้ชัดเจน</h3>
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

              <div class="col-md-12">
                <div class="panel box box-success">
                  <div class="box-header with-border">
                    <h3 class="box-title">ข้อ 2. รายงานผลของแผนการจัดซื้อจัดจ้างและการจัดหาพัสดุประจำปีของหน่วยงาน ตามรอบระยะเวลา ที่กำหนด 2.1 งบลงทุน ทุกไตรมาส 2.2 งบดำเนินงาน ทุกไตรมาส</h3>
                  </div>
                  <div class="box-body">
                    <?php
                    echo ListView::widget([
                      'dataProvider' => $hadea,
                      'itemView' => '/group/_hadea',
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
                      'dataProvider' => $hadeb,
                      'itemView' => '/group/_hadeb',
                      'layout' => '{items}',
                    ]);
                    ?>
                  </div>
                </div>
              </div>

              <div class="col-md-12">
                <div class="callout callout-success">
                  <h4><i class="fa fa-check-square"></i>
                    MOIT5 หน่วยงานมีการสรุปผลการจัดซื้อจัดจ้างและการจัดหาพัสดุรายเดือน ประจำปีงบประมาณ พ.ศ. 2565</h4>
                </div>
                <div class="panel box box-success">
                  <div class="box-header with-border">
                    <h3 class="box-title">ไตรมาสที่ 1 เดือนตุลาคม - เดือนธันวาคม 2564</h3>
                  </div>
                  <div class="box-body">
                    <?php
                    echo ListView::widget([
                      'dataProvider' => $hadec,
                      'itemView' => '/group/_hadec',
                      'layout' => '{items}',
                    ]);
                    ?>
                  </div>
                </div>
              </div>
              <div class="col-md-12">
                <div class="panel box box-success">
                  <div class="box-header with-border">
                    <h3 class="box-title">2. แบบสรุปผลการจัดหาพัสดุในแต่ละรอบเดือน (แบบ สขร. 1) ไตรมาสที่ 1 เดือน ตุลาคม ถึง ธันวาคม ดังนี้</h3>
                  </div>
                  <div class="box-body">
                    <?php
                    echo ListView::widget([
                      'dataProvider' => $haded,
                      'itemView' => '/group/_haded',
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
                <div class="box box-success box-solid">
                  <div class="box-header with-border">
                    <h3 class="box-title">ตัวชี้วัดที่ 1 การเปิดเผยข้อมูล</h3>
                  </div>
                  <div class="box-body">

                    <div class="box-group">
                      <div class="panel box box-success">
                        <div class="box-header with-border">
                          <h4 class="box-title">
                            MOIT1 | 1. คำสั่ง / กรอบแนวทาง
                          </h4>
                        </div>
                        <div class="panel-collapse collapse in">
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
                    </div>

                    <div class="box-group">
                      <div class="panel box box-success">
                        <div class="box-header with-border">
                          <h4 class="box-title">
                            MOIT1 | 2. รายงานผลการกำกับติดตามการเผยแพร่ข้อมูลต่อสาธารณะผ่านเว็บไซต์ของหน่วยงานในปีที่ผ่านมา (ปีงบประมาณ พ.ศ. 2564)
                          </h4>
                        </div>
                        <div class="panel-collapse collapse in">
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
                    </div>

                    <div class="box-group">
                      <div class="panel box box-success">
                        <div class="box-header with-border">
                          <h4 class="box-title">
                            MOIT2 | 1. ข้อมูลพื้นฐานที่เป็นปัจจุบัน ประกอบด้วย
                          </h4>
                        </div>
                        <div class="panel-collapse collapse in">
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
                    </div>

                    <div class="box-group">
                      <div class="panel box box-success">
                        <div class="box-header with-border">
                          <h4 class="box-title">
                            MOIT2 | 17. ข้อมูลการจัดซื้อจัดจ้าง ประกอบด้วย
                          </h4>
                        </div>
                        <div class="panel-collapse collapse in">
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
                    </div>

                  </div>
                </div>
              </div>

              <div class="col-md-12">
                <div class="box box-success box-solid">
                  <div class="box-header with-border">
                    <h3 class="box-title">ตัวชี้วัดที่ 2 การจัดซื้อจัดจ้างและการจัดหาพัสดุ</h3>
                  </div>
                  <div class="box-body">

                    <div class="box-group">
                      <div class="panel box box-success">
                        <div class="box-header with-border">
                          <h4 class="box-title">
                            MOIT3 | รายงานการวิเคราะห์ผลการจัดซื้อจัดจ้างและการจัดหาพัสดุประจำปีงบประมาณ พ.ศ. 2564
                          </h4>
                        </div>
                        <div class="panel-collapse collapse in">
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
                    </div>

                    <div class="box-group">
                      <div class="panel box box-success">
                        <div class="box-header with-border">
                          <h4 class="box-title">
                            MOIT4 | ข้อ 1. ประกาศเผยแพร่แผนการจัดซื้อจัดจ้างและการจัดหาพัสดุ ประจำปีของหน่วยงาน ภายใน 30 วันทำการระบุวันที่ที่ได้รับการจัดสรรงบประมาณในช่องคำอธิบายชี้แจงประกอบหลักฐาน วันที่ที่ได้ทำการประกาศเผยแพร่ให้ชัดเจน
                          </h4>
                        </div>
                        <div class="panel-collapse collapse in">
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

                    <div class="box-group">
                      <div class="panel box box-success">
                        <div class="box-header with-border">
                          <h4 class="box-title">
                            MOIT4 | ข้อ 2. รายงานผลของแผนการจัดซื้อจัดจ้างและการจัดหาพัสดุประจำปีของหน่วยงาน ตามรอบระยะเวลา ที่กำหนด 2.1 งบลงทุน ทุกไตรมาส 2.2 งบดำเนินงาน ทุกไตรมาส
                          </h4>
                        </div>
                        <div class="panel-collapse collapse in">
                          <div class="box-body">
                            <?php
                            echo ListView::widget([
                              'dataProvider' => $indicators18,
                              'itemView' => '/group/_indicators18',
                              'layout' => '{items}',
                            ]);
                            ?>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="box-group">
                      <div class="panel box box-success">
                        <div class="box-header with-border">
                          <h4 class="box-title">
                            MOIT4 | ข้อ 3. การป้องกันผู้ที่มีหน้าที่ดำเนินการในการจัดซื้อจัดจ้างเป็นผู้มีส่วนได้ส่วนเสียกับผู้ยื่นข้อเสนอหรือคู่สัญญา
                          </h4>
                        </div>
                        <div class="panel-collapse collapse in">
                          <div class="box-body">
                            <?php
                            echo ListView::widget([
                              'dataProvider' => $hadeb,
                              'itemView' => '/group/_hadeb',
                              'layout' => '{items}',
                            ]);
                            ?>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="box-group">
                      <div class="panel box box-success">
                        <div class="box-header with-border">
                          <h4 class="box-title">
                            <p class="text-red"><span class="label label-success"><i class="fa fa-tag"> ไตรมาสที่ 2</i></span></p>
                            MOIT5 | หน่วยงานมีการสรุปผลการจัดซื้อจัดจ้างและการจัดหาพัสดุรายเดือน ประจำปีงบประมาณ พ.ศ. 2565
                          </h4>
                        </div>
                        <div class="panel-collapse collapse in">
                          <div class="box-body">
                            <?php
                            echo ListView::widget([
                              'dataProvider' => $indicators20,
                              'itemView' => '/group/_indicators20',
                              'layout' => '{items}',
                            ]);
                            ?>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="box-group">
                      <div class="panel box box-success">
                        <div class="box-header with-border">
                          <h4 class="box-title">
                            MOIT5 | 2. มีแบบสรุปผลการดำเนินการจัดซื้อจัดจ้างในรอบเดือน (แบบ สขร. 1) ไตรมาสที่ 2 เดือนมกราคม 2565 - เดือนมีนาคม 2565 ดังนี้
                          </h4>
                        </div>
                        <div class="panel-collapse collapse in">
                          <div class="box-body">
                            <?php
                            echo ListView::widget([
                              'dataProvider' => $indicators21,
                              'itemView' => '/group/_indicators21',
                              'layout' => '{items}',
                            ]);
                            ?>
                          </div>
                        </div>
                      </div>
                    </div>

                  </div>
                </div>
              </div>


              <div class="col-md-12">
                <div class="box box-success box-solid">
                  <div class="box-header with-border">
                    <h3 class="box-title">ตัวชี้วัดที่ 3 การบริหารและพัฒนาทรัพยากรบุคคล</h3>
                  </div>
                  <div class="box-body">
                    <div class="box-group">

                      <div class="panel box box-success">
                        <div class="box-header with-border">
                          <h4 class="box-title">
                            MOIT6 | 1. นโยบายการบริหารทรัพยากรบุคคล
                          </h4>
                        </div>
                        <div class="panel-collapse collapse in">
                          <div class="box-body">
                            <?php
                            echo ListView::widget([
                              'dataProvider' => $indicators22,
                              'itemView' => '/group/_indicators22',
                              'layout' => '{items}',
                            ]);
                            ?>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="box-group">

                      <div class="panel box box-success">
                        <div class="box-header with-border">
                          <h4 class="box-title">
                            MOIT6 | 2. แผนการบริหารทรัพยากรบุคคลของหน่วยงาน
                          </h4>
                        </div>
                        <div class="panel-collapse collapse in">
                          <div class="box-body">
                            <?php
                            echo ListView::widget([
                              'dataProvider' => $indicators23,
                              'itemView' => '/group/_indicators23',
                              'layout' => '{items}',
                            ]);
                            ?>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="box-group" id="accordion">

                      <div class="panel box box-success">
                        <div class="box-header with-border">
                          <h4 class="box-title">
                            MOIT7 | กรณีหน่วยงานใช้คำสั่งเดิม ที่มีผลใช้บังคับในปัจจุบัน
                          </h4>
                        </div>
                        <div class="panel-collapse collapse in">
                          <div class="box-body">
                            <?php
                            echo ListView::widget([
                              'dataProvider' => $indicators24,
                              'itemView' => '/group/_indicators24',
                              'layout' => '{items}',
                            ]);
                            ?>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="box-group">

                      <div class="panel box box-success">
                        <div class="box-header with-border">
                          <h4 class="box-title">
                            MOIT7 | กรณีที่หน่วยงานมีการปรับปรุงประกาศมาตรการการบริหารผลการปฏิบัติงานและการดำเนินการกับเจ้าหน้าที่ผู้มีผลสัมฤทธิ์การปฏิบัติงานต่ำ ปีงบประมาณ พ.ศ. 2565
                          </h4>
                        </div>
                        <div class="panel-collapse collapse in">
                          <div class="box-body">
                            <?php
                            echo ListView::widget([
                              'dataProvider' => $indicators25,
                              'itemView' => '/group/_indicators25',
                              'layout' => '{items}',
                            ]);
                            ?>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="box-group">
                      <div class="panel box box-success">
                        <div class="box-header with-border">
                          <h4 class="box-title">
                            MOIT8 | ไตรมาสที่ 2 หลักฐานประกาศรายงานการประเมินผล ฯ รอบ 2 ปีงบประมาณ พ.ศ. 2564 (1 เมษายน 2564 – 30 กันยายน 2564)
                          </h4>
                        </div>
                        <div class="panel-collapse collapse in">
                          <div class="box-body">
                            <?php
                            echo ListView::widget([
                              'dataProvider' => $indicators26,
                              'itemView' => '/group/_indicators26',
                              'layout' => '{items}',
                            ]);
                            ?>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="box-group">
                      <div class="panel box box-success">
                        <div class="box-header with-border">
                          <h4 class="box-title">
                            MOIT8 | ไตรมาสที่ 3 (รอบ 1 ปีงบประมาณ พ.ศ. 2565 (1 ตุลาคม 2564 – 31 มีนาคม 2565)
                          </h4>
                        </div>
                        <div class="panel-collapse collapse in">
                          <div class="box-body">
                            <?php
                            echo ListView::widget([
                              'dataProvider' => $indicators27,
                              'itemView' => '/group/_indicators27',
                              'layout' => '{items}',
                            ]);
                            ?>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="box-group">
                      <div class="panel box box-success">
                        <div class="box-header with-border">
                          <h4 class="box-title">
                            MOIT9 | 1. มีหลักฐานการอบรมให้ความรู้แก่เจ้าหน้าที่ภายในหน่วยงานเกี่ยวกับการเสริมสร้าง และพัฒนาทางด้านจริยธรรมและการมีวินัยรวมทั้งการป้องกันมิให้กระทำผิดวินัย ในรูปแบบการอบรมปกติ(On site) และ / หรือ รูปแบบการอบรมอิเล็กทรอนิกส์ (On air) มีการขออนุญาตนำเผยแพร่บนเว็บไซต์ของหน่วยงาน ประกอบด้วย
                          </h4>
                        </div>
                        <div class="panel-collapse collapse in">
                          <div class="box-body">
                            <?php
                            echo ListView::widget([
                              'dataProvider' => $indicators28,
                              'itemView' => '/group/_indicators28',
                              'layout' => '{items}',
                            ]);
                            ?>
                          </div>
                        </div>
                      </div>
                    </div>

                  </div>
                </div>
              </div>



              <div class="col-md-12">
                <div class="box box-success box-solid">
                  <div class="box-header with-border">
                    <h3 class="box-title">ตัวชี้วัดที่ 4 การส่งเสริมความโปร่งใส</h3>
                  </div>
                  <div class="box-body">
                    <div class="box-group">

                      <div class="panel box box-success">
                        <div class="box-header with-border">
                          <h4 class="box-title">
                            MOIT10 | หน่วยงานมีแนวปฏิบัติการจัดการเรื่องร้องเรียน และช่องทางการร้องเรียน
                          </h4>
                        </div>
                        <div class="panel-collapse collapse in">
                          <div class="box-body">
                            <?php
                            echo ListView::widget([
                              'dataProvider' => $indicators29,
                              'itemView' => '/group/_indicators29',
                              'layout' => '{items}',
                            ]);
                            ?>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="box-group">

                      <div class="panel box box-success">
                        <div class="box-header with-border">
                          <h4 class="box-title">
                            MOIT11 | ไตรมาสที่ 2
                          </h4>
                        </div>
                        <div class="panel-collapse collapse in">
                          <div class="box-body">
                            <?php
                            echo ListView::widget([
                              'dataProvider' => $indicators30,
                              'itemView' => '/group/_indicators30',
                              'layout' => '{items}',
                            ]);
                            ?>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="box-group">

                      <div class="panel box box-success">
                        <div class="box-header with-border">
                          <h4 class="box-title">
                            MOIT11 | 3. มีรายงานสรุปผลการดำเนินงานเรื่องร้องเรียน รอบ 6 เดือน ที่มีการวิเคราะห์ปัญหา / อุปสรรคและแนวทางแก้ไข (แนบตามข้อ 2.) รอบ 6 เดือน (1 ตุลาคม 2564 – 30 มีนาคม 2565)
                          </h4>
                        </div>
                        <div class="panel-collapse collapse in">
                          <div class="box-body">
                            <?php
                            echo ListView::widget([
                              'dataProvider' => $indicators31,
                              'itemView' => '/group/_indicators31',
                              'layout' => '{items}',
                            ]);
                            ?>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="box-group">

                      <div class="panel box box-success">
                        <div class="box-header with-border">
                          <h4 class="box-title">
                            MOIT11 | ไตรมาสที่ 4
                          </h4>
                        </div>
                        <div class="panel-collapse collapse in">
                          <div class="box-body">
                            <?php
                            echo ListView::widget([
                              'dataProvider' => $indicators32,
                              'itemView' => '/group/_indicators32',
                              'layout' => '{items}',
                            ]);
                            ?>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="box-group">
                      <div class="panel box box-success">
                        <div class="box-header with-border">
                          <h4 class="box-title">
                            MOIT11 | 3. มีรายงานสรุปผลการดำเนินงานเรื่องร้องเรียน รอบ 12 เดือน ที่มีการวิเคราะห์ปัญหา / อุปสรรคและแนวทางแก้ไข (แนบตามข้อ 2.) รอบ 12 เดือน (1 เมษายน 2565 - 31 สิงหาคม 2565)
                          </h4>
                        </div>
                        <div class="panel-collapse collapse in">
                          <div class="box-body">
                            <?php
                            echo ListView::widget([
                              'dataProvider' => $indicators33,
                              'itemView' => '/group/_indicators33',
                              'layout' => '{items}',
                            ]);
                            ?>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="box-group">
                      <div class="panel box box-success">
                        <div class="box-header with-border">
                          <h4 class="box-title">
                            MOIT12 | 1. มีหลักฐานการการจัดโครงการ / กิจกรรม ที่เปิดโอกาสให้ผู้มีส่วนได้ส่วนเสีย มีโอกาสเข้ามามีส่วนร่วมในการดำเนินงานตามภารกิจของหน่วยงาน ที่ดำเนินการ ตั้งแต่วันที่ 1 ตุลาคม 2564 ถึงวันที่ 31 สิงหาคม 2565
                          </h4>
                        </div>
                        <div class="panel-collapse collapse in">
                          <div class="box-body">
                            <?php
                            echo ListView::widget([
                              'dataProvider' => $indicators34,
                              'itemView' => '/group/_indicators34',
                              'layout' => '{items}',
                            ]);
                            ?>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>


              <div class="col-md-12">
                <div class="box box-success box-solid">
                  <div class="box-header with-border">
                    <h3 class="box-title">ตัวชี้วัดที่ 5 ตัวชี้วัดการรับสินบน</h3>
                  </div>
                  <div class="box-body">
                    <div class="box-group">

                      <div class="panel box box-success">
                        <div class="box-header with-border">
                          <h4 class="box-title">
                            MOIT13 | ไตรมาสที่ 2 หรือไตรมาสที่ 3
                          </h4>
                        </div>
                        <div class="panel-collapse collapse in">
                          <div class="box-body">
                            <?php
                            echo ListView::widget([
                              'dataProvider' => $indicators35,
                              'itemView' => '/group/_indicators35',
                              'layout' => '{items}',
                            ]);
                            ?>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="box-group">

                      <div class="panel box box-success">
                        <div class="box-header with-border">
                          <h4 class="box-title">
                            MOIT13 | ไตรมาสที่ 4
                          </h4>
                        </div>
                        <div class="panel-collapse collapse in">
                          <div class="box-body">
                            <?php
                            echo ListView::widget([
                              'dataProvider' => $indicators36,
                              'itemView' => '/group/_indicators36',
                              'layout' => '{items}',
                            ]);
                            ?>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="box-group">

                      <div class="panel box box-success">
                        <div class="box-header with-border">
                          <h4 class="box-title">
                            MOIT14 | ไตรมาสที่ 2 หรือไตรมาสที่ 3
                          </h4>
                        </div>
                        <div class="panel-collapse collapse in">
                          <div class="box-body">
                            <?php
                            echo ListView::widget([
                              'dataProvider' => $indicators37,
                              'itemView' => '/group/_indicators37',
                              'layout' => '{items}',
                            ]);
                            ?>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="box-group">

                      <div class="panel box box-success">
                        <div class="box-header with-border">
                          <h4 class="box-title">
                            MOIT14 | ไตรมาสที่ 4
                          </h4>
                        </div>
                        <div class="panel-collapse collapse in">
                          <div class="box-body">
                            <?php
                            echo ListView::widget([
                              'dataProvider' => $indicators38,
                              'itemView' => '/group/_indicators38',
                              'layout' => '{items}',
                            ]);
                            ?>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>


              <div class="col-md-12">
                <div class="box box-success box-solid">
                  <div class="box-header with-border">
                    <h3 class="box-title">ตัวชี้วัดที่ 6 ตัวชี้วัดการใช้ทรัพย์สินของราชการ</h3>
                  </div>
                  <div class="box-body">
                    <div class="box-group">

                      <div class="panel box box-success">
                        <div class="box-header with-border">
                          <h4 class="box-title">
                            MOIT15 | หน่วยงานมีการจัดทำแนวทางปฏิบัติเกี่ยวกับการใช้ทรัพย์สินของราชการที่ถูกต้อง และมีขั้นตอนการขออนุญาตเพื่อยืมทรัพย์สินของราชการไปใช้ปฏิบัติในหน่วยงาน
                          </h4>
                        </div>
                        <div class="panel-collapse collapse in">
                          <div class="box-body">
                            <?php
                            echo ListView::widget([
                              'dataProvider' => $indicators39,
                              'itemView' => '/group/_indicators39',
                              'layout' => '{items}',
                            ]);
                            ?>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-md-12">
                <div class="box box-success box-solid">
                  <div class="box-header with-border">
                    <h3 class="box-title">ตัวชี้วัดที่ 7 ตัวชี้วัดการดำเนินงานเพื่อป้องกันการทุจริต</h3>
                  </div>
                  <div class="box-body">

                    <div class="box-group">
                      <div class="panel box box-success">
                        <div class="box-header with-border">
                          <h4 class="box-title">
                            MOIT16 | แผนปฏิบัติการป้องกัน ปราบปรามการทุจริตและประพฤติมิชอบ ของหน่วยงาน ประจำปีงบประมาณ พ.ศ. 2565
                          </h4>
                        </div>
                        <div class="panel-collapse collapse in">
                          <div class="box-body">
                            <?php
                            echo ListView::widget([
                              'dataProvider' => $indicators40,
                              'itemView' => '/group/_indicators40',
                              'layout' => '{items}',
                            ]);
                            ?>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="box-group">
                      <div class="panel box box-success">
                        <div class="box-header with-border">
                          <h4 class="box-title">
                            MOIT16 | แผนปฏิบัติการส่งเสริมคุณธรรมของชมรมจริยธรรมของหน่วยงาน ประจำปีงบประมาณ พ.ศ. 2565
                          </h4>
                        </div>
                        <div class="panel-collapse collapse in">
                          <div class="box-body">
                            <?php
                            echo ListView::widget([
                              'dataProvider' => $indicators41,
                              'itemView' => '/group/_indicators41',
                              'layout' => '{items}',
                            ]);
                            ?>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="box-group">
                      <div class="panel box box-success">
                        <div class="box-header with-border">
                          <h4 class="box-title">
                            <p class="text-red"><span class="label label-success"><i class="fa fa-tag"> ไตรมาสที่ 2</i></span></p>
                            <!-- <p class="text-red"><i class="fa fa-tag"><b> ไตรมาสที่ 2</b></i></p> -->
                            MOIT17 | การกำกับติดตามการดำเนินงานตามแผนปฏิบัติการป้องกัน ปราบปรามการทุจริต และประพฤติมิชอบของหน่วยงาน ประจำปีงบประมาณ พ.ศ. 2565
                          </h4>
                        </div>
                        <div class="panel-collapse collapse in">
                          <div class="box-body">
                            <?php
                            echo ListView::widget([
                              'dataProvider' => $indicators42,
                              'itemView' => '/group/_indicators42',
                              'layout' => '{items}',
                            ]);
                            ?>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="box-group">
                      <div class="panel box box-success">
                        <div class="box-header with-border">
                          <h4 class="box-title">
                            MOIT17 | การกำกับติดตามการดำเนินงานตามแผนปฏิบัติการส่งเสริมคุณธรรม ของชมรมจริยธรรมของหน่วยงาน ประจำปีงบประมาณ พ.ศ. 2565
                          </h4>
                        </div>
                        <div class="panel-collapse collapse in">
                          <div class="box-body">
                            <?php
                            echo ListView::widget([
                              'dataProvider' => $indicators43,
                              'itemView' => '/group/_indicators43',
                              'layout' => '{items}',
                            ]);
                            ?>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="box-group">
                      <div class="panel box box-success">
                        <div class="box-header with-border">
                          <h4 class="box-title">
                            <p class="text-red"><span class="label label-success"><i class="fa fa-tag"> ไตรมาสที่ 4</i></span></p>
                            <!-- <p class="text-red"><i class="fa fa-tag"><b> ไตรมาสที่ 4</b></i></p> -->
                            MOIT17 | การกำกับติดตามการดำเนินงานตามแผนปฏิบัติการป้องกัน ปราบปรามการทุจริต และประพฤติมิชอบของหน่วยงาน ประจำปีงบประมาณ พ.ศ. 2565
                          </h4>
                        </div>
                        <div class="panel-collapse collapse in">
                          <div class="box-body">
                            <?php
                            echo ListView::widget([
                              'dataProvider' => $indicators44,
                              'itemView' => '/group/_indicators44',
                              'layout' => '{items}',
                            ]);
                            ?>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="box-group">
                      <div class="panel box box-success">
                        <div class="box-header with-border">
                          <h4 class="box-title">
                            MOIT17 | การกำกับติดตามการดำเนินงานตามแผนปฏิบัติการส่งเสริมคุณธรรม ของชมรมจริยธรรมของหน่วยงาน ประจำปีงบประมาณ พ.ศ. 2565
                          </h4>
                        </div>
                        <div class="panel-collapse collapse in">
                          <div class="box-body">
                            <?php
                            echo ListView::widget([
                              'dataProvider' => $indicators45,
                              'itemView' => '/group/_indicators45',
                              'layout' => '{items}',
                            ]);
                            ?>
                          </div>
                        </div>
                      </div>
                    </div>

                  </div>
                </div>
              </div>


              <div class="col-md-12">
                <div class="box box-success box-solid">
                  <div class="box-header with-border">
                    <h3 class="box-title">ตัวชี้วัดที่ 8 การป้องกันผลประโยชน์ทับซ้อน</h3>
                  </div>
                  <div class="box-body">

                    <div class="box-group">
                      <div class="panel box box-success">
                        <div class="box-header with-border">
                          <h4 class="box-title">
                            MOIT18 | หน่วยงานมีการวิเคราะห์ความเสี่ยงเกี่ยวกับผลประโยชน์ทับซ้อนประจำปีของหน่วยงาน
                          </h4>
                        </div>
                        <div class="panel-collapse collapse in">
                          <div class="box-body">
                            <?php
                            echo ListView::widget([
                              'dataProvider' => $indicators46,
                              'itemView' => '/group/_indicators46',
                              'layout' => '{items}',
                            ]);
                            ?>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="box-group">
                      <div class="panel box box-success">
                        <div class="box-header with-border">
                          <h4 class="box-title">
                            MOIT19 | มาตรการเพื่อจัดการความเสี่ยงเกี่ยวกับผลประโยชน์ทับซ้อนของหน่วยงาน ฯ
                          </h4>
                        </div>
                        <div class="panel-collapse collapse in">
                          <div class="box-body">
                            <?php
                            echo ListView::widget([
                              'dataProvider' => $indicators47,
                              'itemView' => '/group/_indicators47',
                              'layout' => '{items}',
                            ]);
                            ?>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="box-group">
                      <div class="panel box box-success">
                        <div class="box-header with-border">
                          <h4 class="box-title">
                            MOIT19 | การรวมกลุ่มของบุคลากรของหน่วยงาน ในนาม “ชมรม STRONG … ”
                          </h4>
                        </div>
                        <div class="panel-collapse collapse in">
                          <div class="box-body">
                            <?php
                            echo ListView::widget([
                              'dataProvider' => $indicators48,
                              'itemView' => '/group/_indicators48',
                              'layout' => '{items}',
                            ]);
                            ?>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="box-group">
                      <div class="panel box box-success">
                        <div class="box-header with-border">
                          <h4 class="box-title">
                            <p class="text-red"><span class="label label-success"><i class="fa fa-tag"> ไตรมาสที่ 2</i></span></p>
                            <!-- <p class="text-red"><i class="fa fa-tag"><b> ไตรมาสที่ 2</b></i></p> -->
                            MOIT20 | หน่วยงานมีการรายงานผลการส่งเสริมการปฏิบัติตามประมวลจริยธรรมข้าราชการพลเรือน : กรณีการเรี่ยไรและกรณีการให้หรือรับของขวัญหรือประโยชน์อื่นใด ประจำปีงบประมาณ พ.ศ. 2565
                          </h4>
                        </div>
                        <div class="panel-collapse collapse in">
                          <div class="box-body">
                            <?php
                            echo ListView::widget([
                              'dataProvider' => $indicators49,
                              'itemView' => '/group/_indicators49',
                              'layout' => '{items}',
                            ]);
                            ?>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="box-group">
                      <div class="panel box box-success">
                        <div class="box-header with-border">
                          <h4 class="box-title">
                            <p class="text-red"><span class="label label-success"><i class="fa fa-tag"> ไตรมาสที่ 4</i></span></p>
                            <!-- <p class="text-red"><i class="fa fa-tag"><b> ไตรมาสที่ 4</b></i></p> -->
                            MOIT20 | หน่วยงานมีการรายงานผลการส่งเสริมการปฏิบัติตามประมวลจริยธรรมข้าราชการพลเรือน : กรณีการเรี่ยไรและกรณีการให้หรือรับของขวัญหรือประโยชน์อื่นใด ประจำปีงบประมาณ พ.ศ. 2565
                          </h4>
                        </div>
                        <div class="panel-collapse collapse in">
                          <div class="box-body">
                            <?php
                            echo ListView::widget([
                              'dataProvider' => $indicators50,
                              'itemView' => '/group/_indicators50',
                              'layout' => '{items}',
                            ]);
                            ?>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="box-group">
                      <div class="panel box box-success">
                        <div class="box-header with-border">
                          <h4 class="box-title">
                            MOIT21 | 1. มีหลักฐานการอบรมให้ความรู้เรื่องการป้องกันผลประโยชน์ทับซ้อน โดยใช้หลักสูตรต้านทุจริตศึกษา ให้แก่บุคลากรในหน่วยงาน และมีการขออนุญาตนำเผยแพร่บนเว็บไซต์ของหน่วยงาน
                          </h4>
                        </div>
                        <div class="panel-collapse collapse in">
                          <div class="box-body">
                            <?php
                            echo ListView::widget([
                              'dataProvider' => $indicators51,
                              'itemView' => '/group/_indicators51',
                              'layout' => '{items}',
                            ]);
                            ?>
                          </div>
                        </div>
                      </div>
                    </div>

                  </div>
                </div>
              </div>


              <div class="col-md-12">
                <div class="box box-success box-solid">
                  <div class="box-header with-border">
                    <h3 class="box-title">ตัวชี้วัดที่ 9 การเสริมสร้างวัฒนธรรมสุจริตในองค์กร</h3>
                  </div>
                  <div class="box-body">

                    <div class="box-group">
                      <div class="panel box box-success">
                        <div class="box-header with-border">
                          <h4 class="box-title">
                            MOIT22 | หน่วยงานมีการเผยแพร่เจตจำนงสุจริตของผู้บริหารต่อสาธารณชน
                          </h4>
                        </div>
                        <div class="panel-collapse collapse in">
                          <div class="box-body">
                            <?php
                            echo ListView::widget([
                              'dataProvider' => $indicators52,
                              'itemView' => '/group/_indicators52',
                              'layout' => '{items}',
                            ]);
                            ?>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="box-group">
                      <div class="panel box box-success">
                        <div class="box-header with-border">
                          <h4 class="box-title">
                            MOIT23 | ไตรมาส 2
                          </h4>
                        </div>
                        <div class="panel-collapse collapse in">
                          <div class="box-body">
                            <?php
                            echo ListView::widget([
                              'dataProvider' => $indicators53,
                              'itemView' => '/group/_indicators53',
                              'layout' => '{items}',
                            ]);
                            ?>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="box-group">
                      <div class="panel box box-success">
                        <div class="box-header with-border">
                          <h4 class="box-title">
                            MOIT23 | ไตรมาสที่ 4
                          </h4>
                        </div>
                        <div class="panel-collapse collapse in">
                          <div class="box-body">
                            <?php
                            echo ListView::widget([
                              'dataProvider' => $indicators54,
                              'itemView' => '/group/_indicators54',
                              'layout' => '{items}',
                            ]);
                            ?>
                          </div>
                        </div>
                      </div>
                    </div>

                  </div>
                </div>
              </div>




            </div>
          </div>
          <!-- /.box-body -->
        </div>



        <!-- TAB 3 -->

        <div class="tab-pane active" id="tab_3">
          <div class="box-body">
            <div class="row">
              <div class="col-md-12">
                <div class="box box-success box-solid">
                  <div class="box-header with-border">
                    <h3 class="box-title">ตัวชี้วัดที่ 1 การเปิดเผยข้อมูล</h3>
                  </div>
                  <div class="box-body">

                    <div class="box-group">
                      <div class="panel box box-success">
                        <div class="box-header with-border">
                          <h4 class="box-title">
                            MOIT1 | 1. คำสั่ง / กรอบแนวทาง
                          </h4>
                        </div>
                        <div class="panel-collapse collapse in">
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
                    </div>

                    <div class="box-group">
                      <div class="panel box box-success">
                        <div class="box-header with-border">
                          <h4 class="box-title">
                            MOIT1 | 2. รายงานผลการกำกับติดตามการเผยแพร่ข้อมูลต่อสาธารณะผ่านเว็บไซต์ของหน่วยงานในปีที่ผ่านมา (ปีงบประมาณ พ.ศ. 2564)
                          </h4>
                        </div>
                        <div class="panel-collapse collapse in">
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
                    </div>

                    <div class="box-group">
                      <div class="panel box box-success">
                        <div class="box-header with-border">
                          <h4 class="box-title">
                            MOIT2 | 1. ข้อมูลพื้นฐานที่เป็นปัจจุบัน ประกอบด้วย
                          </h4>
                        </div>
                        <div class="panel-collapse collapse in">
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
                    </div>

                    <div class="box-group">
                      <div class="panel box box-success">
                        <div class="box-header with-border">
                          <h4 class="box-title">
                            MOIT2 | 17. ข้อมูลการจัดซื้อจัดจ้าง ประกอบด้วย
                          </h4>
                        </div>
                        <div class="panel-collapse collapse in">
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
                    </div>

                  </div>
                </div>
              </div>

              <div class="col-md-12">
                <div class="box box-success box-solid">
                  <div class="box-header with-border">
                    <h3 class="box-title">ตัวชี้วัดที่ 2 การจัดซื้อจัดจ้างและการจัดหาพัสดุ</h3>
                  </div>
                  <div class="box-body">

                    <div class="box-group">
                      <div class="panel box box-success">
                        <div class="box-header with-border">
                          <h4 class="box-title">
                            MOIT3 | รายงานการวิเคราะห์ผลการจัดซื้อจัดจ้างและการจัดหาพัสดุประจำปีงบประมาณ พ.ศ. 2564
                          </h4>
                        </div>
                        <div class="panel-collapse collapse in">
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
                    </div>

                    <div class="box-group">
                      <div class="panel box box-success">
                        <div class="box-header with-border">
                          <h4 class="box-title">
                            MOIT4 | ข้อ 1. ประกาศเผยแพร่แผนการจัดซื้อจัดจ้างและการจัดหาพัสดุ ประจำปีของหน่วยงาน ภายใน 30 วันทำการระบุวันที่ที่ได้รับการจัดสรรงบประมาณในช่องคำอธิบายชี้แจงประกอบหลักฐาน วันที่ที่ได้ทำการประกาศเผยแพร่ให้ชัดเจน
                          </h4>
                        </div>
                        <div class="panel-collapse collapse in">
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

                    <div class="box-group">
                      <div class="panel box box-success">
                        <div class="box-header with-border">
                          <h4 class="box-title">
                            MOIT4 | ข้อ 2. รายงานผลของแผนการจัดซื้อจัดจ้างและการจัดหาพัสดุประจำปีของหน่วยงาน ตามรอบระยะเวลา ที่กำหนด 2.1 งบลงทุน ทุกไตรมาส 2.2 งบดำเนินงาน ทุกไตรมาส
                          </h4>
                        </div>
                        <div class="panel-collapse collapse in">
                          <div class="box-body">
                            <p class="text-red"><span class="label label-success"><i class="fa fa-tag"> ไตรมาสที่ 3</i></span></p>
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
                    </div>

                    <div class="box-group">
                      <div class="panel box box-success">
                        <div class="box-header with-border">
                          <h4 class="box-title">
                            MOIT4 | ข้อ 3. การป้องกันผู้ที่มีหน้าที่ดำเนินการในการจัดซื้อจัดจ้างเป็นผู้มีส่วนได้ส่วนเสียกับผู้ยื่นข้อเสนอหรือคู่สัญญา
                          </h4>
                        </div>
                        <div class="panel-collapse collapse in">
                          <div class="box-body">
                            <?php
                            echo ListView::widget([
                              'dataProvider' => $hadeb,
                              'itemView' => '/group/_hadeb',
                              'layout' => '{items}',
                            ]);
                            ?>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="box-group">
                      <div class="panel box box-success">
                        <div class="box-header with-border">
                          <h4 class="box-title">
                            MOIT5 | หน่วยงานมีการสรุปผลการจัดซื้อจัดจ้างและการจัดหาพัสดุรายเดือน ประจำปีงบประมาณ พ.ศ. 2565
                          </h4>
                        </div>
                        <div class="panel-collapse collapse in">
                          <div class="box-body">
                          <p class="text-red"><span class="label label-success"><i class="fa fa-tag"> ไตรมาสที่ 3</i></span></p>
                            <?php
                            echo ListView::widget([
                              'dataProvider' => $indicators55,
                              'itemView' => '/group/_indicators55',
                              'layout' => '{items}',
                            ]);
                            ?>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="box-group">
                      <div class="panel box box-success">
                        <div class="box-header with-border">
                          <h4 class="box-title">
                            MOIT5 | 2. มีแบบสรุปผลการดำเนินการจัดซื้อจัดจ้างในรอบเดือน (แบบ สขร. 1) ไตรมาสที่ 3 เดือนเมษายน 2565 - เดือนมิถุนายน 2565 ดังนี้
                          </h4>
                        </div>
                        <div class="panel-collapse collapse in">
                          <div class="box-body">
                          <p class="text-red"><span class="label label-success"><i class="fa fa-tag"> ไตรมาสที่ 3</i></span></p>
                            <?php
                            echo ListView::widget([
                              'dataProvider' => $indicators56,
                              'itemView' => '/group/_indicators56',
                              'layout' => '{items}',
                            ]);
                            ?>
                          </div>
                        </div>
                      </div>
                    </div>

                  </div>
                </div>
              </div>


              <div class="col-md-12">
                <div class="box box-success box-solid">
                  <div class="box-header with-border">
                    <h3 class="box-title">ตัวชี้วัดที่ 3 การบริหารและพัฒนาทรัพยากรบุคคล</h3>
                  </div>
                  <div class="box-body">
                    <div class="box-group">

                      <div class="panel box box-success">
                        <div class="box-header with-border">
                          <h4 class="box-title">
                            MOIT6 | 1. นโยบายการบริหารทรัพยากรบุคคล
                          </h4>
                        </div>
                        <div class="panel-collapse collapse in">
                          <div class="box-body">
                            <?php
                            echo ListView::widget([
                              'dataProvider' => $indicators22,
                              'itemView' => '/group/_indicators22',
                              'layout' => '{items}',
                            ]);
                            ?>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="box-group">

                      <div class="panel box box-success">
                        <div class="box-header with-border">
                          <h4 class="box-title">
                            MOIT6 | 2. แผนการบริหารทรัพยากรบุคคลของหน่วยงาน
                          </h4>
                        </div>
                        <div class="panel-collapse collapse in">
                          <div class="box-body">
                            <?php
                            echo ListView::widget([
                              'dataProvider' => $indicators23,
                              'itemView' => '/group/_indicators23',
                              'layout' => '{items}',
                            ]);
                            ?>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="box-group" id="accordion">

                      <div class="panel box box-success">
                        <div class="box-header with-border">
                          <h4 class="box-title">
                            MOIT7 | กรณีหน่วยงานใช้คำสั่งเดิม ที่มีผลใช้บังคับในปัจจุบัน
                          </h4>
                        </div>
                        <div class="panel-collapse collapse in">
                          <div class="box-body">
                            <?php
                            echo ListView::widget([
                              'dataProvider' => $indicators24,
                              'itemView' => '/group/_indicators24',
                              'layout' => '{items}',
                            ]);
                            ?>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="box-group">

                      <div class="panel box box-success">
                        <div class="box-header with-border">
                          <h4 class="box-title">
                            MOIT7 | กรณีที่หน่วยงานมีการปรับปรุงประกาศมาตรการการบริหารผลการปฏิบัติงานและการดำเนินการกับเจ้าหน้าที่ผู้มีผลสัมฤทธิ์การปฏิบัติงานต่ำ ปีงบประมาณ พ.ศ. 2565
                          </h4>
                        </div>
                        <div class="panel-collapse collapse in">
                          <div class="box-body">
                            <?php
                            echo ListView::widget([
                              'dataProvider' => $indicators25,
                              'itemView' => '/group/_indicators25',
                              'layout' => '{items}',
                            ]);
                            ?>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="box-group">
                      <div class="panel box box-success">
                        <div class="box-header with-border">
                          <h4 class="box-title">
                            MOIT8 | ไตรมาสที่ 2 หลักฐานประกาศรายงานการประเมินผล ฯ รอบ 2 ปีงบประมาณ พ.ศ. 2564 (1 เมษายน 2564 – 30 กันยายน 2564)
                          </h4>
                        </div>
                        <div class="panel-collapse collapse in">
                          <div class="box-body">
                            <?php
                            echo ListView::widget([
                              'dataProvider' => $indicators26,
                              'itemView' => '/group/_indicators26',
                              'layout' => '{items}',
                            ]);
                            ?>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="box-group">
                      <div class="panel box box-success">
                        <div class="box-header with-border">
                          <h4 class="box-title">
                            MOIT8 | ไตรมาสที่ 3 (รอบ 1 ปีงบประมาณ พ.ศ. 2565 (1 ตุลาคม 2564 – 31 มีนาคม 2565)
                          </h4>
                        </div>
                        <div class="panel-collapse collapse in">
                          <div class="box-body">
                            <?php
                            echo ListView::widget([
                              'dataProvider' => $indicators27,
                              'itemView' => '/group/_indicators27',
                              'layout' => '{items}',
                            ]);
                            ?>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="box-group">
                      <div class="panel box box-success">
                        <div class="box-header with-border">
                          <h4 class="box-title">
                            MOIT9 | 1. มีหลักฐานการอบรมให้ความรู้แก่เจ้าหน้าที่ภายในหน่วยงานเกี่ยวกับการเสริมสร้าง และพัฒนาทางด้านจริยธรรมและการมีวินัยรวมทั้งการป้องกันมิให้กระทำผิดวินัย ในรูปแบบการอบรมปกติ(On site) และ / หรือ รูปแบบการอบรมอิเล็กทรอนิกส์ (On air) มีการขออนุญาตนำเผยแพร่บนเว็บไซต์ของหน่วยงาน ประกอบด้วย
                          </h4>
                        </div>
                        <div class="panel-collapse collapse in">
                          <div class="box-body">
                            <?php
                            echo ListView::widget([
                              'dataProvider' => $indicators28,
                              'itemView' => '/group/_indicators28',
                              'layout' => '{items}',
                            ]);
                            ?>
                          </div>
                        </div>
                      </div>
                    </div>

                  </div>
                </div>
              </div>



              <div class="col-md-12">
                <div class="box box-success box-solid">
                  <div class="box-header with-border">
                    <h3 class="box-title">ตัวชี้วัดที่ 4 การส่งเสริมความโปร่งใส</h3>
                  </div>
                  <div class="box-body">
                    <div class="box-group">

                      <div class="panel box box-success">
                        <div class="box-header with-border">
                          <h4 class="box-title">
                            MOIT10 | หน่วยงานมีแนวปฏิบัติการจัดการเรื่องร้องเรียน และช่องทางการร้องเรียน
                          </h4>
                        </div>
                        <div class="panel-collapse collapse in">
                          <div class="box-body">
                            <?php
                            echo ListView::widget([
                              'dataProvider' => $indicators29,
                              'itemView' => '/group/_indicators29',
                              'layout' => '{items}',
                            ]);
                            ?>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="box-group">

                      <div class="panel box box-success">
                        <div class="box-header with-border">
                          <h4 class="box-title">
                            MOIT11 | ไตรมาสที่ 2
                          </h4>
                        </div>
                        <div class="panel-collapse collapse in">
                          <div class="box-body">
                            <?php
                            echo ListView::widget([
                              'dataProvider' => $indicators30,
                              'itemView' => '/group/_indicators30',
                              'layout' => '{items}',
                            ]);
                            ?>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="box-group">

                      <div class="panel box box-success">
                        <div class="box-header with-border">
                          <h4 class="box-title">
                            MOIT11 | 3. มีรายงานสรุปผลการดำเนินงานเรื่องร้องเรียน รอบ 6 เดือน ที่มีการวิเคราะห์ปัญหา / อุปสรรคและแนวทางแก้ไข (แนบตามข้อ 2.) รอบ 6 เดือน (1 ตุลาคม 2564 – 30 มีนาคม 2565)
                          </h4>
                        </div>
                        <div class="panel-collapse collapse in">
                          <div class="box-body">
                            <?php
                            echo ListView::widget([
                              'dataProvider' => $indicators31,
                              'itemView' => '/group/_indicators31',
                              'layout' => '{items}',
                            ]);
                            ?>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="box-group">

                      <div class="panel box box-success">
                        <div class="box-header with-border">
                          <h4 class="box-title">
                            MOIT11 | ไตรมาสที่ 4
                          </h4>
                        </div>
                        <div class="panel-collapse collapse in">
                          <div class="box-body">
                            <?php
                            echo ListView::widget([
                              'dataProvider' => $indicators32,
                              'itemView' => '/group/_indicators32',
                              'layout' => '{items}',
                            ]);
                            ?>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="box-group">
                      <div class="panel box box-success">
                        <div class="box-header with-border">
                          <h4 class="box-title">
                            MOIT11 | 3. มีรายงานสรุปผลการดำเนินงานเรื่องร้องเรียน รอบ 12 เดือน ที่มีการวิเคราะห์ปัญหา / อุปสรรคและแนวทางแก้ไข (แนบตามข้อ 2.) รอบ 12 เดือน (1 เมษายน 2565 - 31 สิงหาคม 2565)
                          </h4>
                        </div>
                        <div class="panel-collapse collapse in">
                          <div class="box-body">
                            <?php
                            echo ListView::widget([
                              'dataProvider' => $indicators33,
                              'itemView' => '/group/_indicators33',
                              'layout' => '{items}',
                            ]);
                            ?>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="box-group">
                      <div class="panel box box-success">
                        <div class="box-header with-border">
                          <h4 class="box-title">
                            MOIT12 | 1. มีหลักฐานการการจัดโครงการ / กิจกรรม ที่เปิดโอกาสให้ผู้มีส่วนได้ส่วนเสีย มีโอกาสเข้ามามีส่วนร่วมในการดำเนินงานตามภารกิจของหน่วยงาน ที่ดำเนินการ ตั้งแต่วันที่ 1 ตุลาคม 2564 ถึงวันที่ 31 สิงหาคม 2565
                          </h4>
                        </div>
                        <div class="panel-collapse collapse in">
                          <div class="box-body">
                            <?php
                            echo ListView::widget([
                              'dataProvider' => $indicators34,
                              'itemView' => '/group/_indicators34',
                              'layout' => '{items}',
                            ]);
                            ?>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>


              <div class="col-md-12">
                <div class="box box-success box-solid">
                  <div class="box-header with-border">
                    <h3 class="box-title">ตัวชี้วัดที่ 5 ตัวชี้วัดการรับสินบน</h3>
                  </div>
                  <div class="box-body">
                    <div class="box-group">

                      <div class="panel box box-success">
                        <div class="box-header with-border">
                          <h4 class="box-title">
                            MOIT13 | ไตรมาสที่ 2 หรือไตรมาสที่ 3
                          </h4>
                        </div>
                        <div class="panel-collapse collapse in">
                          <div class="box-body">
                            <?php
                            echo ListView::widget([
                              'dataProvider' => $indicators35,
                              'itemView' => '/group/_indicators35',
                              'layout' => '{items}',
                            ]);
                            ?>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="box-group">

                      <div class="panel box box-success">
                        <div class="box-header with-border">
                          <h4 class="box-title">
                            MOIT13 | ไตรมาสที่ 4
                          </h4>
                        </div>
                        <div class="panel-collapse collapse in">
                          <div class="box-body">
                            <?php
                            echo ListView::widget([
                              'dataProvider' => $indicators36,
                              'itemView' => '/group/_indicators36',
                              'layout' => '{items}',
                            ]);
                            ?>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="box-group">

                      <div class="panel box box-success">
                        <div class="box-header with-border">
                          <h4 class="box-title">
                            MOIT14 | ไตรมาสที่ 2 หรือไตรมาสที่ 3
                          </h4>
                        </div>
                        <div class="panel-collapse collapse in">
                          <div class="box-body">
                            <?php
                            echo ListView::widget([
                              'dataProvider' => $indicators37,
                              'itemView' => '/group/_indicators37',
                              'layout' => '{items}',
                            ]);
                            ?>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="box-group">

                      <div class="panel box box-success">
                        <div class="box-header with-border">
                          <h4 class="box-title">
                            MOIT14 | ไตรมาสที่ 4
                          </h4>
                        </div>
                        <div class="panel-collapse collapse in">
                          <div class="box-body">
                            <?php
                            echo ListView::widget([
                              'dataProvider' => $indicators38,
                              'itemView' => '/group/_indicators38',
                              'layout' => '{items}',
                            ]);
                            ?>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>


              <div class="col-md-12">
                <div class="box box-success box-solid">
                  <div class="box-header with-border">
                    <h3 class="box-title">ตัวชี้วัดที่ 6 ตัวชี้วัดการใช้ทรัพย์สินของราชการ</h3>
                  </div>
                  <div class="box-body">
                    <div class="box-group">

                      <div class="panel box box-success">
                        <div class="box-header with-border">
                          <h4 class="box-title">
                            MOIT15 | หน่วยงานมีการจัดทำแนวทางปฏิบัติเกี่ยวกับการใช้ทรัพย์สินของราชการที่ถูกต้อง และมีขั้นตอนการขออนุญาตเพื่อยืมทรัพย์สินของราชการไปใช้ปฏิบัติในหน่วยงาน
                          </h4>
                        </div>
                        <div class="panel-collapse collapse in">
                          <div class="box-body">
                            <?php
                            echo ListView::widget([
                              'dataProvider' => $indicators39,
                              'itemView' => '/group/_indicators39',
                              'layout' => '{items}',
                            ]);
                            ?>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-md-12">
                <div class="box box-success box-solid">
                  <div class="box-header with-border">
                    <h3 class="box-title">ตัวชี้วัดที่ 7 ตัวชี้วัดการดำเนินงานเพื่อป้องกันการทุจริต</h3>
                  </div>
                  <div class="box-body">

                    <div class="box-group">
                      <div class="panel box box-success">
                        <div class="box-header with-border">
                          <h4 class="box-title">
                            MOIT16 | แผนปฏิบัติการป้องกัน ปราบปรามการทุจริตและประพฤติมิชอบ ของหน่วยงาน ประจำปีงบประมาณ พ.ศ. 2565
                          </h4>
                        </div>
                        <div class="panel-collapse collapse in">
                          <div class="box-body">
                            <?php
                            echo ListView::widget([
                              'dataProvider' => $indicators40,
                              'itemView' => '/group/_indicators40',
                              'layout' => '{items}',
                            ]);
                            ?>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="box-group">
                      <div class="panel box box-success">
                        <div class="box-header with-border">
                          <h4 class="box-title">
                            MOIT16 | แผนปฏิบัติการส่งเสริมคุณธรรมของชมรมจริยธรรมของหน่วยงาน ประจำปีงบประมาณ พ.ศ. 2565
                          </h4>
                        </div>
                        <div class="panel-collapse collapse in">
                          <div class="box-body">
                            <?php
                            echo ListView::widget([
                              'dataProvider' => $indicators41,
                              'itemView' => '/group/_indicators41',
                              'layout' => '{items}',
                            ]);
                            ?>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="box-group">
                      <div class="panel box box-success">
                        <div class="box-header with-border">
                          <h4 class="box-title">
                            <p class="text-red"><span class="label label-success"><i class="fa fa-tag"> ไตรมาสที่ 2</i></span></p>
                            <!-- <p class="text-red"><i class="fa fa-tag"><b> ไตรมาสที่ 2</b></i></p> -->
                            MOIT17 | การกำกับติดตามการดำเนินงานตามแผนปฏิบัติการป้องกัน ปราบปรามการทุจริต และประพฤติมิชอบของหน่วยงาน ประจำปีงบประมาณ พ.ศ. 2565
                          </h4>
                        </div>
                        <div class="panel-collapse collapse in">
                          <div class="box-body">
                            <?php
                            echo ListView::widget([
                              'dataProvider' => $indicators42,
                              'itemView' => '/group/_indicators42',
                              'layout' => '{items}',
                            ]);
                            ?>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="box-group">
                      <div class="panel box box-success">
                        <div class="box-header with-border">
                          <h4 class="box-title">
                            MOIT17 | การกำกับติดตามการดำเนินงานตามแผนปฏิบัติการส่งเสริมคุณธรรม ของชมรมจริยธรรมของหน่วยงาน ประจำปีงบประมาณ พ.ศ. 2565
                          </h4>
                        </div>
                        <div class="panel-collapse collapse in">
                          <div class="box-body">
                            <?php
                            echo ListView::widget([
                              'dataProvider' => $indicators43,
                              'itemView' => '/group/_indicators43',
                              'layout' => '{items}',
                            ]);
                            ?>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="box-group">
                      <div class="panel box box-success">
                        <div class="box-header with-border">
                          <h4 class="box-title">
                            <p class="text-red"><span class="label label-success"><i class="fa fa-tag"> ไตรมาสที่ 4</i></span></p>
                            <!-- <p class="text-red"><i class="fa fa-tag"><b> ไตรมาสที่ 4</b></i></p> -->
                            MOIT17 | การกำกับติดตามการดำเนินงานตามแผนปฏิบัติการป้องกัน ปราบปรามการทุจริต และประพฤติมิชอบของหน่วยงาน ประจำปีงบประมาณ พ.ศ. 2565
                          </h4>
                        </div>
                        <div class="panel-collapse collapse in">
                          <div class="box-body">
                            <?php
                            echo ListView::widget([
                              'dataProvider' => $indicators44,
                              'itemView' => '/group/_indicators44',
                              'layout' => '{items}',
                            ]);
                            ?>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="box-group">
                      <div class="panel box box-success">
                        <div class="box-header with-border">
                          <h4 class="box-title">
                            MOIT17 | การกำกับติดตามการดำเนินงานตามแผนปฏิบัติการส่งเสริมคุณธรรม ของชมรมจริยธรรมของหน่วยงาน ประจำปีงบประมาณ พ.ศ. 2565
                          </h4>
                        </div>
                        <div class="panel-collapse collapse in">
                          <div class="box-body">
                            <?php
                            echo ListView::widget([
                              'dataProvider' => $indicators45,
                              'itemView' => '/group/_indicators45',
                              'layout' => '{items}',
                            ]);
                            ?>
                          </div>
                        </div>
                      </div>
                    </div>

                  </div>
                </div>
              </div>


              <div class="col-md-12">
                <div class="box box-success box-solid">
                  <div class="box-header with-border">
                    <h3 class="box-title">ตัวชี้วัดที่ 8 การป้องกันผลประโยชน์ทับซ้อน</h3>
                  </div>
                  <div class="box-body">

                    <div class="box-group">
                      <div class="panel box box-success">
                        <div class="box-header with-border">
                          <h4 class="box-title">
                            MOIT18 | หน่วยงานมีการวิเคราะห์ความเสี่ยงเกี่ยวกับผลประโยชน์ทับซ้อนประจำปีของหน่วยงาน
                          </h4>
                        </div>
                        <div class="panel-collapse collapse in">
                          <div class="box-body">
                            <?php
                            echo ListView::widget([
                              'dataProvider' => $indicators46,
                              'itemView' => '/group/_indicators46',
                              'layout' => '{items}',
                            ]);
                            ?>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="box-group">
                      <div class="panel box box-success">
                        <div class="box-header with-border">
                          <h4 class="box-title">
                            MOIT19 | มาตรการเพื่อจัดการความเสี่ยงเกี่ยวกับผลประโยชน์ทับซ้อนของหน่วยงาน ฯ
                          </h4>
                        </div>
                        <div class="panel-collapse collapse in">
                          <div class="box-body">
                            <?php
                            echo ListView::widget([
                              'dataProvider' => $indicators47,
                              'itemView' => '/group/_indicators47',
                              'layout' => '{items}',
                            ]);
                            ?>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="box-group">
                      <div class="panel box box-success">
                        <div class="box-header with-border">
                          <h4 class="box-title">
                            MOIT19 | การรวมกลุ่มของบุคลากรของหน่วยงาน ในนาม “ชมรม STRONG … ”
                          </h4>
                        </div>
                        <div class="panel-collapse collapse in">
                          <div class="box-body">
                            <?php
                            echo ListView::widget([
                              'dataProvider' => $indicators48,
                              'itemView' => '/group/_indicators48',
                              'layout' => '{items}',
                            ]);
                            ?>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="box-group">
                      <div class="panel box box-success">
                        <div class="box-header with-border">
                          <h4 class="box-title">
                            <p class="text-red"><span class="label label-success"><i class="fa fa-tag"> ไตรมาสที่ 2</i></span></p>
                            <!-- <p class="text-red"><i class="fa fa-tag"><b> ไตรมาสที่ 2</b></i></p> -->
                            MOIT20 | หน่วยงานมีการรายงานผลการส่งเสริมการปฏิบัติตามประมวลจริยธรรมข้าราชการพลเรือน : กรณีการเรี่ยไรและกรณีการให้หรือรับของขวัญหรือประโยชน์อื่นใด ประจำปีงบประมาณ พ.ศ. 2565
                          </h4>
                        </div>
                        <div class="panel-collapse collapse in">
                          <div class="box-body">
                            <?php
                            echo ListView::widget([
                              'dataProvider' => $indicators49,
                              'itemView' => '/group/_indicators49',
                              'layout' => '{items}',
                            ]);
                            ?>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="box-group">
                      <div class="panel box box-success">
                        <div class="box-header with-border">
                          <h4 class="box-title">
                            <p class="text-red"><span class="label label-success"><i class="fa fa-tag"> ไตรมาสที่ 4</i></span></p>
                            <!-- <p class="text-red"><i class="fa fa-tag"><b> ไตรมาสที่ 4</b></i></p> -->
                            MOIT20 | หน่วยงานมีการรายงานผลการส่งเสริมการปฏิบัติตามประมวลจริยธรรมข้าราชการพลเรือน : กรณีการเรี่ยไรและกรณีการให้หรือรับของขวัญหรือประโยชน์อื่นใด ประจำปีงบประมาณ พ.ศ. 2565
                          </h4>
                        </div>
                        <div class="panel-collapse collapse in">
                          <div class="box-body">
                            <?php
                            echo ListView::widget([
                              'dataProvider' => $indicators50,
                              'itemView' => '/group/_indicators50',
                              'layout' => '{items}',
                            ]);
                            ?>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="box-group">
                      <div class="panel box box-success">
                        <div class="box-header with-border">
                          <h4 class="box-title">
                            MOIT21 | 1. มีหลักฐานการอบรมให้ความรู้เรื่องการป้องกันผลประโยชน์ทับซ้อน โดยใช้หลักสูตรต้านทุจริตศึกษา ให้แก่บุคลากรในหน่วยงาน และมีการขออนุญาตนำเผยแพร่บนเว็บไซต์ของหน่วยงาน
                          </h4>
                        </div>
                        <div class="panel-collapse collapse in">
                          <div class="box-body">
                            <?php
                            echo ListView::widget([
                              'dataProvider' => $indicators51,
                              'itemView' => '/group/_indicators51',
                              'layout' => '{items}',
                            ]);
                            ?>
                          </div>
                        </div>
                      </div>
                    </div>

                  </div>
                </div>
              </div>


              <div class="col-md-12">
                <div class="box box-success box-solid">
                  <div class="box-header with-border">
                    <h3 class="box-title">ตัวชี้วัดที่ 9 การเสริมสร้างวัฒนธรรมสุจริตในองค์กร</h3>
                  </div>
                  <div class="box-body">

                    <div class="box-group">
                      <div class="panel box box-success">
                        <div class="box-header with-border">
                          <h4 class="box-title">
                            MOIT22 | หน่วยงานมีการเผยแพร่เจตจำนงสุจริตของผู้บริหารต่อสาธารณชน
                          </h4>
                        </div>
                        <div class="panel-collapse collapse in">
                          <div class="box-body">
                            <?php
                            echo ListView::widget([
                              'dataProvider' => $indicators52,
                              'itemView' => '/group/_indicators52',
                              'layout' => '{items}',
                            ]);
                            ?>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="box-group">
                      <div class="panel box box-success">
                        <div class="box-header with-border">
                          <h4 class="box-title">
                            MOIT23 | ไตรมาส 2
                          </h4>
                        </div>
                        <div class="panel-collapse collapse in">
                          <div class="box-body">
                            <?php
                            echo ListView::widget([
                              'dataProvider' => $indicators53,
                              'itemView' => '/group/_indicators53',
                              'layout' => '{items}',
                            ]);
                            ?>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="box-group">
                      <div class="panel box box-success">
                        <div class="box-header with-border">
                          <h4 class="box-title">
                            MOIT23 | ไตรมาสที่ 4
                          </h4>
                        </div>
                        <div class="panel-collapse collapse in">
                          <div class="box-body">
                            <?php
                            echo ListView::widget([
                              'dataProvider' => $indicators54,
                              'itemView' => '/group/_indicators54',
                              'layout' => '{items}',
                            ]);
                            ?>
                          </div>
                        </div>
                      </div>
                    </div>

                  </div>
                </div>
              </div>




            </div>
          </div>
          <!-- /.box-body -->
        </div>

        <!-- END TAB3 -->








        <!-- /.tab-pane -->
        <!-- <div class="tab-pane" id="tab_3">
          <div class="box-body"> -->
        <!-- <div class="row">
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

            </div> -->
        <!-- </div>
        </div> -->



        <!-- /.tab-pane -->
        <div class="tab-pane" id="tab_4">
          <div class="box-body">
            <!-- <div class="row">
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

            </div> -->
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