<?php

namespace app\models;

use yii\db\ActiveRecord;

class IpSave extends ActiveRecord
{
    protected $ip;

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'users_visit_history';
    }
}

