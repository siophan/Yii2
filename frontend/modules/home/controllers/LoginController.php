<?php
/**
 * Desc: 登陆页面
 * User: ezrealYin
 * Date: 2016-11-20
 * Time: 15.57
 */

namespace app\modules\home\controllers;

use yii\web\Controller;

class LoginController extends Controller
{
    public function actionIndex()
    {
        return $this->renderPartial('index');
    }
}
