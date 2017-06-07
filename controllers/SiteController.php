<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\models\IpSave;

class SiteController extends Controller
{
    /**
     * @inheritdoc
     */

    public function actionIndex()
    {   $ip = Yii::$app->request->userIP;
        $model = new IpSave(['ip' => $ip ]);
        $model->save();
        return $this->render('index');
    }

    public function actionInfo()
    {
        $ip = Yii::$app->request->userIP;;
        if (@fsockopen($ip, 80, $errstr, $errno, 1)) {
            $proxy = TRUE;
        } else {
            $proxy = FALSE;
        }
        $geoIP = "";
        if(isset($_SERVER['HTTP_GEOIP_COUNTRY_CODE'])) {
            $geoIP = $_SERVER['HTTP_GEOIP_COUNTRY_CODE'];
        }
        $data = ['ip' => $ip, 'proxy' => $proxy, 'geo' => $geoIP];
        echo json_encode($data);
    }

}
