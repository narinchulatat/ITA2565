<?php

namespace app\models;

use dektrium\user\models\Profile;
use Yii;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\helpers\Json;

/**
 * This is the model class for table "ha_documents".
 *
 * @property int $id
 * @property string $ref หลายเลข referent สำหรับอัพโหลดไฟล์ ajax
 * @property string $title ชื่องาน
 * @property string $description รายละเอียด
 * @property string $covenant file
 * @property string $docs เอกสารประกอบ
 * @property string $create_date สร้างวันที่
 * @property int $cat_id ID หมวดหมู่หลัก
 * @property int $group_id ID หมวดหมู่ย่อย
 * @property int $user_id ผู้บันทึก
 *
 * @property Group $group
 * @property HaCategory $cat
 */
class HaDocuments extends \yii\db\ActiveRecord
{
    const UPLOAD_FOLDER = 'hadocuments';
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'ha_documents';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['description'], 'string'],
            [['docs'],'file','maxFiles'=>20,'skipOnEmpty'=>true],
            [['create_date'], 'safe'],
            [['cat_id', 'group_id', 'user_id'], 'integer'],
            [['ref'], 'string', 'max' => 50],
            [['title', 'covenant'], 'string', 'max' => 255],
            [['group_id'], 'exist', 'skipOnError' => true, 'targetClass' => Group::className(), 'targetAttribute' => ['group_id' => 'id']],
            [['cat_id'], 'exist', 'skipOnError' => true, 'targetClass' => HaCategory::className(), 'targetAttribute' => ['cat_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'ref' => 'หลายเลข referent สำหรับอัพโหลดไฟล์ ajax',
            'title' => 'ชื่อเอกสาร',
            'description' => 'รายละเอียด',
            'covenant' => 'file',
            'docs' => 'เอกสารประกอบ',
            'create_date' => 'สร้างวันที่',
            'cat_id' => 'หมวดหมู่หลัก',
            'group_id' => 'หมวดหมู่ย่อย',
            'user_id' => 'ผู้บันทึก',
        ];
    }

    public static function getUploadPath(){
        return Yii::getAlias('@webroot').'/'.self::UPLOAD_FOLDER.'/';
    }

    public static function getUploadUrl(){
        return Url::base(true).'/'.self::UPLOAD_FOLDER.'/';
    }

    public function listDownloadFiles($type){
     $docs_file = 'No file!';
     if(in_array($type, ['docs','covenant'])){
             $data = $type==='docs'?$this->docs:$this->covenant;
             $files = Json::decode($data);
            if(is_array($files)){
                 $docs_file ='<ol>';
                 foreach ($files as $key => $value) {
                    $docs_file .= '<li>'.Html::a($value,['/hadocuments/download','id'=>$this->id,'file'=>$key,'file_name'=>$value]).'</li>';
                 }
                 $docs_file .='</ol>';
            }
     }

     return $docs_file;
    }

    public function initialPreview($data,$field,$type='file'){
            $initial = [];
            $files = Json::decode($data);
            if(is_array($files)){
                 foreach ($files as $key => $value) {
                    if($type=='file'){
                        $initial[] = "<div class='file-preview-other'><h2><i class='glyphicon glyphicon-file'></i></h2></div>";
                    }elseif($type=='config'){
                        $initial[] = [
                            'caption'=> $value,
                            'width'  => '120px',
                            'url'    => Url::to(['/hadocuments/deletefile','id'=>$this->id,'fileName'=>$key,'field'=>$field]),
                            'key'    => $key
                        ];
                    }
                    else{
                        $initial[] = Html::img(self::getUploadUrl().$this->ref.'/'.$value,['class'=>'file-preview-image', 'alt'=>$model->file_name, 'title'=>$model->file_name]);
                    }
                 }
         }
        return $initial;
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getGroup()
    {
        return $this->hasOne(Group::className(), ['id' => 'group_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCat()
    {
        return $this->hasOne(HaCategory::className(), ['id' => 'cat_id']);
    }

    public function getProfile()
    {
        return $this->hasOne(Profile::className(), ['user_id' => 'user_id']);
    }
}
