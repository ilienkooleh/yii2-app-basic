<?php
/**
 * Created by PhpStorm.
 * User: Dell
 * Date: 07.06.2017
 * Time: 17:49
 */

namespace app\models;

use yii\db\ActiveRecord;

class IpSave extends ActiveRecord
{
    protected $ip;

    public static function tableName()
    {
        return 'users_visit_history';
    }

}

