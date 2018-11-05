<?php
  namespace app\controllers;

  use yii\web\Controller;
  use yii\data\Pagination;
  use app\models\Generator;

class GeneratorController extends Controller
{   
	public function actionIndex()
	{   
		$genForm = new Generator();
        
        return $this->render('index', ['model' => $genForm]);
	}

	public function actionMonth(){
		
		$monthForm = new Generator;
		
        
        return  $this->render('month', ['model' => $monthForm]);;

	}

	
}
