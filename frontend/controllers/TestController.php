<?php
/**
 * Created by PhpStorm.
 * User: evgeniy
 * Date: 17.01.16
 * Time: 22:37
 */

namespace frontend\controllers;

use yii\web\Controller;

class TestController extends Controller {

    public $layout = 'template';

    public function actionIndex() {
        return $this->render('index');
    }

}