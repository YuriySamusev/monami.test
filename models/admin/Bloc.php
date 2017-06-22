<?php

namespace app\models\admin;

use Yii;

/**
 * This is the model class for table "blocs".
 *
 * @property integer $id
 * @property string $name
 * @property string $title
 * @property string $text
 * @property string $type
 * @property integer $hide
 * @property integer $priority
 * @property string $date
 */
class Bloc extends \yii\db\ActiveRecord
{
    public $sectionName;
    public static $lastSectionName;

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'blocs';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'title', 'text'], 'required'],
            [['title', 'hide', 'text', 'type'], 'string'],
            [['priority'], 'integer'],
            [['date'], 'safe'],
            [['name'], 'string', 'max' => 64],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'title' => 'Title',
            'text' => 'Text',
            'type' => 'Type',
            'hide' => 'Hide',
            'priority' => 'Priority',
            'date' => 'Date',
        ];
    }

    /**
     * @inheritdoc
     */
    public function save($runValidation = true, $attributeNames = NULL)
    {
        $this->date = date("Y-m-d H:i:s");
        return parent::save();
    }

    public function getMaxPriority($isCreate = false)
    {
        return $this->find()->where(['type' => 'dynamic'])->count() + ($isCreate? 1 : 0);
    }

    public function getDynamicBlocs()
    {
        $dynamicBlocs = $this->find()->where(['hide' => 'no', 'type' => 'dynamic'])->orderBy('priority ASC, date DESC') ->all();
        $this->setSectionNames($dynamicBlocs);
        return $dynamicBlocs;
    }

    private function setSectionNames($collection)
    {
        $countElements = count($collection);
        $sectionNames = ['first', 'second', 'third', 'fourth', 'fifth', 'sixth', 'seventh', 'eighth', 'ninth', 'tenth'];
        Bloc::$lastSectionName = $countElements >= count($sectionNames)? $countElements + 1 : $sectionNames[$countElements];
        foreach ($collection as $key => $value)
            $value['sectionName'] = empty($sectionNames[$key])? $key + 1 : $sectionNames[$key];
    }
}
