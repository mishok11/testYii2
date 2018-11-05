<?php
   

  use yii\helpers\Html;
  use yii\widgets\ActiveForm;
?>
<h1>Select by month</h1>
  <?php
    $options = isset($_POST['month']) ? array(Html::encode($_POST['month']) => array('selected'=>true)):array();
  ?>
  <?php $form = ActiveForm::begin(['action' => ['logs/index']]); ?>
  <?= Html::dropDownList('month', 'null', app\controllers\TestHelpers::listMonth(),array('prompt' => 'Оберіть місяць', 'options' => $options)); ?>
  <?= Html::submitButton('Знайти', ['class' => 'btn btn-primary']); ?>
  <?php ActiveForm::end();

 // , 'options' => array(Html::encode($_POST['month']) => array('selected'=>true))
  