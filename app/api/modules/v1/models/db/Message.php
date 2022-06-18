<?php

namespace api\modules\v1\models;

use \yii\db\ActiveRecord;

/**
 * Message Model
 *
 */
class Message extends ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'message';
    }

    /**
     * Define rules for validation
     */
    public function rules()
    {
        return [
            [['id', 'from', 'to', 'msg', 'created_at'], 'required'],
            [['created_at'], 'default', 'value' => time()],
        ];
    }

    /**
     * Finds msg by from id
     *
     * @param int $from_id
     * @return static|null
     */
    public static function findByFrom(int $from_id)
    {
        return static::findOne(['from' => $from_id])->all();
    }

    /**
     * Finds msg by from id
     *
     * @param int $to_id
     * @return static|null
     */
    public static function findByTo(int $to_id)
    {
        return static::find(['to' => $to_id])->all();
    }

    /**
     * Finds msg by from id
     *
     * @param string $from 
     * @return static|null
     */
    public static function findByMsg(string $msg)
    {
        return static::findOne(['msg' => $msg])->all();
    }

    /**
     * Finds msg by from id
     *
     * @param string $from 
     * @return static|null
     */
    public static function findById(int $id)
    {
        return static::findOne(['id' => $id]);
    }
}
