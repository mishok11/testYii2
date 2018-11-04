<?php
  use yii\helpers\Html;
  use yii\widgets\ActiveForm;
?>
<h1>Generator</h1>
  <?php $form = ActiveForm::begin(['action' => ['logs/generate']]); ?>
  <?= Html::submitButton('Згенерувати дані', ['class' => 'btn btn-primary']) ?>
  <?php ActiveForm::end(); ?>