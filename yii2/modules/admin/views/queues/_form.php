<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Queues */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="queues-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'musiconhold')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'announce')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'context')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'timeout')->textInput() ?>

    <?= $form->field($model, 'ringinuse')->dropDownList([ 'yes' => 'Yes', 'no' => 'No', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'setinterfacevar')->dropDownList([ 'yes' => 'Yes', 'no' => 'No', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'setqueuevar')->dropDownList([ 'yes' => 'Yes', 'no' => 'No', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'setqueueentryvar')->dropDownList([ 'yes' => 'Yes', 'no' => 'No', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'monitor_format')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'membermacro')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'membergosub')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'queue_youarenext')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'queue_thereare')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'queue_callswaiting')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'queue_quantity1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'queue_quantity2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'queue_holdtime')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'queue_minutes')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'queue_minute')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'queue_seconds')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'queue_thankyou')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'queue_callerannounce')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'queue_reporthold')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'announce_frequency')->textInput() ?>

    <?= $form->field($model, 'announce_to_first_user')->dropDownList([ 'yes' => 'Yes', 'no' => 'No', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'min_announce_frequency')->textInput() ?>

    <?= $form->field($model, 'announce_round_seconds')->textInput() ?>

    <?= $form->field($model, 'announce_holdtime')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'announce_position')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'announce_position_limit')->textInput() ?>

    <?= $form->field($model, 'periodic_announce')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'periodic_announce_frequency')->textInput() ?>

    <?= $form->field($model, 'relative_periodic_announce')->dropDownList([ 'yes' => 'Yes', 'no' => 'No', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'random_periodic_announce')->dropDownList([ 'yes' => 'Yes', 'no' => 'No', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'retry')->textInput() ?>

    <?= $form->field($model, 'wrapuptime')->textInput() ?>

    <?= $form->field($model, 'penaltymemberslimit')->textInput() ?>

    <?= $form->field($model, 'autofill')->dropDownList([ 'yes' => 'Yes', 'no' => 'No', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'monitor_type')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'autopause')->dropDownList([ 'yes' => 'Yes', 'no' => 'No', 'all' => 'All', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'autopausedelay')->textInput() ?>

    <?= $form->field($model, 'autopausebusy')->dropDownList([ 'yes' => 'Yes', 'no' => 'No', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'autopauseunavail')->dropDownList([ 'yes' => 'Yes', 'no' => 'No', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'maxlen')->textInput() ?>

    <?= $form->field($model, 'servicelevel')->textInput() ?>

    <?= $form->field($model, 'strategy')->dropDownList([ 'ringall' => 'Ringall', 'leastrecent' => 'Leastrecent', 'fewestcalls' => 'Fewestcalls', 'random' => 'Random', 'rrmemory' => 'Rrmemory', 'linear' => 'Linear', 'wrandom' => 'Wrandom', 'rrordered' => 'Rrordered', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'joinempty')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'leavewhenempty')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'reportholdtime')->dropDownList([ 'yes' => 'Yes', 'no' => 'No', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'memberdelay')->textInput() ?>

    <?= $form->field($model, 'weight')->textInput() ?>

    <?= $form->field($model, 'timeoutrestart')->dropDownList([ 'yes' => 'Yes', 'no' => 'No', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'defaultrule')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'timeoutpriority')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
