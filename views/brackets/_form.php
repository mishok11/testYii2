<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;


?>

<div class="country-form">

    <?php $form = ActiveForm::begin(['action' => ['/brackets/check']]); ?>

    <?= $form->field($model, 'expression')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Перевірити', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
