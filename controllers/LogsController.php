<?php
  namespace app\controllers;
  use Yii;
  use yii\web\Controller;
  use yii\data\Pagination;
  use app\models\Logs;
  use yii\data\ActiveDataProvider;



class LogsController extends Controller
{  


	public function actionIndex()
	{   
				
		$dataProvider = new ActiveDataProvider([
             'query' => Logs::find(),
             
			]);
	

		return $this->render('index', [
			'dataProvider' => $dataProvider,
			'pagination' => false,
			]);
	}

	
	public  function actionGenerate(){
       
       $query = Logs::deleteAll();
       unset($query);
	   
	   $time_now = time();
	   $year_ago = strtotime('-1 year');
	   
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