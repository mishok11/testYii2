<?php
namespace app\models;

class TestHelpers
{
   public static function randomSrting($lenth){
      $allChars = 'qwertyuiopasdfghjklzxcvbnmQWERTYUIOPASDFGHJKLZXCVBNM';
      $text = '';
      $lenChars = mb_strlen($allChars);
     for ($i=0; $i < $lenth; $i++) { 
     	$n = mt_rand($lenChars);
     	$text .= $allChars[$n];
     }
     return $text;
   }
}