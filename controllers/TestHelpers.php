<?php
namespace app\controllers;

class TestHelpers
{   
    public static function anyStr($lenth){
      $allChars = 'qwertyuiopasdfghjklzxcvbnmQWERTYUIOPASDFGHJKLZXCVBNM';
      $text = '';

      $lenChars = mb_strlen($allChars)-1;
     for ($i=0; $i < $lenth; $i++) { 
     	$n = mt_rand(0, $lenChars);
     	$text .= $allChars{$n};
     }
     return $text;
   }
}