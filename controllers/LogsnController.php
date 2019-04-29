<?php

namespace app\controllers;

class LogsnController extends \yii\web\Controller
{
    public function actionMonth()
    {
        return $this->render('month');
    }

}
