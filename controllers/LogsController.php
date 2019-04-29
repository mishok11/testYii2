<?php
  namespace app\controllers;
  use Yii;
  use yii\helpers\Html;
  use yii\web\Controller;
  use yii\data\Pagination;
  use app\models\Logs;
  use app\models\TestHelpers;
  use yii\data\ActiveDataProvider;
  use yii\web\Request;

class LogsController extends Controller {  
	public function actionIndex() {
	    $request = Yii::$app->request;
		$isMonth = $request->post('month');
		list($begin, $end) = TestHelpers::period($isMonth);
		
		$query = Logs::find()->where(['between', 'time', "$begin", "$end"]);
		$dataProvider = new ActiveDataProvider(['query' => $query,  'pagination'=>false, ]);
		return $this->render('index', ['dataProvider' => $dataProvider, ]);
	}
	
	public  function actionGenerate() {
        $query = Logs::deleteAll();
        unset($query);
	    Logs::genData();
	    $this->redirect('index.php?r=logs/index');
		return true;
	}
}