<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "ha_category".
 *
 * @property int $id ID หมวดหมู่
 * @property string $name หมวดหมู่
 * @property string $create_date วันที่สร้าง
 *
 * @property Ha[] $has
 */
class HaCategory extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'ha_category';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'create_date'], 'required'],
            [['create_date'], 'safe'],
            [['name'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID หมวดหมู่',
            'name' => 'หมวดหมู่หลัก',
            'create_date' => 'วันที่สร้าง',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getHas()
    {
        return $this->hasMany(Ha::className(), ['cat_id' => 'id']);
    }
}
