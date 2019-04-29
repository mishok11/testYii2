<?php
  use yii\helpers\Html;
  use yii\widgets\ActiveForm;
  use yii\web\Request;
?>
<h1>Select by month</h1>
  
  <?php
    $request = Yii::$app->request;
    $isMonth = $request->post('month');
    $options = isset($isMonth) ? array($isMonth => array('selected'=>true)) : array();
  ?>

  <?php $form = ActiveForm::begin(['action' => ['logs/index']]); ?>
  <?= Html::dropDownList('month', 'null', app\models\TestHelpers::listMonth() ,array('prompt' => 'Оберіть місяць', 'options' => $options)); ?>
  <?= Html::submitButton('Знайти', ['class' => 'btn btn-primary']); ?>
  <?php ActiveForm::end(); ?>