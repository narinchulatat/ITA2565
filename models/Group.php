<?php

namespace app\models;

use Yii;
use yii\helpers\ArrayHelper;
use yii\helpers\Json;
use yii\helpers\Html;
use yii\helpers\Url;

/**
 * This is the model class for table "group".
 *
 * @property int $id ID หมวดหมู่
 * @property string $name หมวดหมู่
 * @property string $create_date วันที่สร้าง
 * @property int $cat_id id ha_category
 *
 * @property HaCategory $cat
 * @property Ha[] $has
 */
class Group extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'group';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'create_date'], 'required'],
            [['create_date'], 'safe'],
            [['cat_id'], 'integer'],
            [['name'], 'string', 'max' => 255],
            [['cat_id'], 'exist', 'skipOnError' => true, 'targetClass' => HaCategory::className(), 'targetAttribute' => ['cat_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID หมวดหมู่',
            'name' => 'หมวดหมู่ย่อย',
            'create_date' => 'วันที่สร้าง',
            'cat_id' => 'หมวดหมู่หลัก',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCat()
    {
        return $this->hasOne(HaCategory::className(), ['id' => 'cat_id']);
    }
    

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getHas()
    {
        return $this->hasMany(Ha::className(), ['group_id' => 'id']);
    }
}
