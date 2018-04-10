<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "comments".
 *
 * @property int $ID
 * @property int $User
 * @property int $Entry
 * @property string $Content
 * @property int $Parent
 *
 * @property Users $user
 * @property Entries $entry
 */
class Comments extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'comments';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['User', 'Entry', 'Parent'], 'integer'],
            [['Content'], 'string'],
            [['User'], 'exist', 'skipOnError' => true, 'targetClass' => Users::className(), 'targetAttribute' => ['User' => 'ID']],
            [['Entry'], 'exist', 'skipOnError' => true, 'targetClass' => Entries::className(), 'targetAttribute' => ['Entry' => 'ID']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'ID' => 'ID',
            'User' => 'User',
            'Entry' => 'Entry',
            'Content' => 'Content',
            'Parent' => 'Parent',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(Users::className(), ['ID' => 'User']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEntry()
    {
        return $this->hasOne(Entries::className(), ['ID' => 'Entry']);
    }
}
