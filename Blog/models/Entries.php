<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "entries".
 *
 * @property int $ID
 * @property string $Title
 * @property int $Category
 * @property int $Author
 * @property string $Content
 * @property string $DATE
 * @property int $Visibility
 * @property int $Open
 *
 * @property Comments[] $comments
 * @property Users $author
 */
class Entries extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'entries';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Category', 'Author', 'Visibility', 'Open'], 'integer'],
            [['Content'], 'string'],
            [['DATE'], 'safe'],
            [['Title'], 'string', 'max' => 50],
            [['Author'], 'exist', 'skipOnError' => true, 'targetClass' => Users::className(), 'targetAttribute' => ['Author' => 'ID']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'ID' => 'ID',
            'Title' => 'Title',
            'Category' => 'Category',
            'Author' => 'Author',
            'Content' => 'Content',
            'DATE' => 'Date',
            'Visibility' => 'Visibility',
            'Open' => 'Open',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getComments()
    {
        return $this->hasMany(Comments::className(), ['Entry' => 'ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAuthor()
    {
        return $this->hasOne(Users::className(), ['ID' => 'Author']);
    }
}
