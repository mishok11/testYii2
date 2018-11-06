<?php
  namespace app\controllers;
  use Yii;
  use yii\helpers\Html;
  use yii\web\Controller;
  use yii\data\Pagination;
  use app\models\Logs;
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
	   
	   $time_now = time();
	   $year_ago = strtotime('midnight first day of this month -11 months');
	   
		for ($i=0; $i < 200; $i++) { 
			$query = new Logs();
			$time = mt_rand($year_ago, $time_now);
			$query->time = $time;
			$query->key = TestHelpers::anyStr(8);
			$query->save();
			unset($query);
		} 
		$this->redirect('index.php?r=logs/index');
		return true;
	}
}