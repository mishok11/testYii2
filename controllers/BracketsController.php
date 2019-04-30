<?php


namespace app\controllers;


use app\models\Expression;
use yii\web\Controller;
use Yii;

class BracketsController extends Controller {
    public function actionIndex() {
        $model = new Expression();
        return $this->render('_form', [
            'model' => $model,
        ]);
    }

    public function actionCheck() {
        $expression = new Expression();
        $expression->load(Yii::$app->request->post());
        $data = $expression->expression;
        $expression->clear();
        $result = $expression->check();
        return $this->render('result', [
            'data' => $data,
            'result' => $result,
        ]);
    }
}