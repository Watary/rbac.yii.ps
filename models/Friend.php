<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "friends".
 *
 * @property integer $id
 * @property integer $id_user
 * @property integer $id_friend
 * @property integer $active
 * @property integer $date
 */
class Friend extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'friends';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_user', 'id_friend', 'date'], 'required'],
            [['id_user', 'id_friend', 'active', 'date'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_user' => 'Id User',
            'id_friend' => 'Id Friend',
            'active' => 'Active',
            'date' => 'Date',
        ];
    }
}
