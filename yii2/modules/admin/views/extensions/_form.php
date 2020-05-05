<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Extensions */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="extensions-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'context')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'exten')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'priority')->textInput() ?>

    <?= $form->field($model, 'app')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'appdata')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
