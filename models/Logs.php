<?php
  namespace app\models;

  use yii\db\ActiveRecord;
  
class Logs extends ActiveRecord {
	public static function genData() {
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
	}
}

