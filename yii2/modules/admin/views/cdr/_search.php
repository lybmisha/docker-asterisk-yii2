<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\CdrSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="cdr-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'accountcode') ?>

    <?= $form->field($model, 'src') ?>

    <?= $form->field($model, 'dst') ?>

    <?= $form->field($model, 'dcontext') ?>

    <?php // echo $form->field($model, 'clid') ?>

    <?php // echo $form->field($model, 'channel') ?>

    <?php // echo $form->field($model, 'dstchannel') ?>

    <?php // echo $form->field($model, 'lastapp') ?>

    <?php // echo $form->field($model, 'lastdata') ?>

    <?php // echo $form->field($model, 'start') ?>

    <?php // echo $form->field($model, 'answer') ?>

    <?php // echo $form->field($model, 'end') ?>

    <?php // echo $form->field($model, 'duration') ?>

    <?php // echo $form->field($model, 'billsec') ?>

    <?php // echo $form->field($model, 'disposition') ?>

    <?php // echo $form->field($model, 'amaflags') ?>

    <?php // echo $form->field($model, 'userfield') ?>

    <?php // echo $form->field($model, 'uniqueid') ?>

    <?php // echo $form->field($model, 'linkedid') ?>

    <?php // echo $form->field($model, 'peeraccount') ?>

    <?php // echo $form->field($model, 'sequence') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
