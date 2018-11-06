<?php
namespace app\controllers;

class TestHelpers {   
    public static function anyStr($lenth) {
    	$allChars = 'qwertyuiopasdfghjklzxcvbnmQWERTYUIOPASDFGHJKLZXCVBNM';
    	$text = '';
    	$lenChars = mb_strlen($allChars) - 1;
    	for ($i=0; $i < $lenth; $i++) { 
    		$n = mt_rand(0, $lenChars);
    		$text .= $allChars{$n};
    	}

    	return $text;
    }

    public static function listMonth() {
   		$month = [['Грудень', 'Листопад', 'Жовтень', 'Вересень', 'Серпень', 'Липень', 'Червень', 'Травень', 'Квітень', 
   					'Березень', 'Лютий', 'Січень','Грудень', 'Листопад', 'Жовтень', 'Вересень', 'Серпень', 'Липень', 
   					'Червень', 'Травень', 'Квітень', 'Березень', 'Лютий', 'Січень' ],
   				  ['December', 'November', 'October', 'September', 'August', 'July', 'June', 'May', 'April', 'March', 
   				   'February', 'January']];
   	    $now = getdate();
   	    $first_index = array_search($now['month'], $month[1]);
        $list_month = array_slice($month[0], $first_index, 12);

        return $list_month;
   }

   public static function period($month){
    	if (isset($month) && $month!=''){
     	        $begin = strtotime('midnight first day of this month -'.$month.' months');
                 $end = strtotime('midnight last day of this month -'.$month.' months ') + 24 * 60 * 60;
		} else {
				$begin = strtotime('midnight first day of this month -11 months'); 
				$end = strtotime('midnight last day of this month') + 24 * 60 * 60;
		}

		return [$begin,$end];
	}
}