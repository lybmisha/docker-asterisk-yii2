<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\QueuesSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="queues-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'name') ?>

    <?= $form->field($model, 'musiconhold') ?>

    <?= $form->field($model, 'announce') ?>

    <?= $form->field($model, 'context') ?>

    <?= $form->field($model, 'timeout') ?>

    <?php // echo $form->field($model, 'ringinuse') ?>

    <?php // echo $form->field($model, 'setinterfacevar') ?>

    <?php // echo $form->field($model, 'setqueuevar') ?>

    <?php // echo $form->field($model, 'setqueueentryvar') ?>

    <?php // echo $form->field($model, 'monitor_format') ?>

    <?php // echo $form->field($model, 'membermacro') ?>

    <?php // echo $form->field($model, 'membergosub') ?>

    <?php // echo $form->field($model, 'queue_youarenext') ?>

    <?php // echo $form->field($model, 'queue_thereare') ?>

    <?php // echo $form->field($model, 'queue_callswaiting') ?>

    <?php // echo $form->field($model, 'queue_quantity1') ?>

    <?php // echo $form->field($model, 'queue_quantity2') ?>

    <?php // echo $form->field($model, 'queue_holdtime') ?>

    <?php // echo $form->field($model, 'queue_minutes') ?>

    <?php // echo $form->field($model, 'queue_minute') ?>

    <?php // echo $form->field($model, 'queue_seconds') ?>

    <?php // echo $form->field($model, 'queue_thankyou') ?>

    <?php // echo $form->field($model, 'queue_callerannounce') ?>

    <?php // echo $form->field($model, 'queue_reporthold') ?>

    <?php // echo $form->field($model, 'announce_frequency') ?>

    <?php // echo $form->field($model, 'announce_to_first_user') ?>

    <?php // echo $form->field($model, 'min_announce_frequency') ?>

    <?php // echo $form->field($model, 'announce_round_seconds') ?>

    <?php // echo $form->field($model, 'announce_holdtime') ?>

    <?php // echo $form->field($model, 'announce_position') ?>

    <?php // echo $form->field($model, 'announce_position_limit') ?>

    <?php // echo $form->field($model, 'periodic_announce') ?>

    <?php // echo $form->field($model, 'periodic_announce_frequency') ?>

    <?php // echo $form->field($model, 'relative_periodic_announce') ?>

    <?php // echo $form->field($model, 'random_periodic_announce') ?>

    <?php // echo $form->field($model, 'retry') ?>

    <?php // echo $form->field($model, 'wrapuptime') ?>

    <?php // echo $form->field($model, 'penaltymemberslimit') ?>

    <?php // echo $form->field($model, 'autofill') ?>

    <?php // echo $form->field($model, 'monitor_type') ?>

    <?php // echo $form->field($model, 'autopause') ?>

    <?php // echo $form->field($model, 'autopausedelay') ?>

    <?php // echo $form->field($model, 'autopausebusy') ?>

    <?php // echo $form->field($model, 'autopauseunavail') ?>

    <?php // echo $form->field($model, 'maxlen') ?>

    <?php // echo $form->field($model, 'servicelevel') ?>

    <?php // echo $form->field($model, 'strategy') ?>

    <?php // echo $form->field($model, 'joinempty') ?>

    <?php // echo $form->field($model, 'leavewhenempty') ?>

    <?php // echo $form->field($model, 'reportholdtime') ?>

    <?php // echo $form->field($model, 'memberdelay') ?>

    <?php // echo $form->field($model, 'weight') ?>

    <?php // echo $form->field($model, 'timeoutrestart') ?>

    <?php // echo $form->field($model, 'defaultrule') ?>

    <?php // echo $form->field($model, 'timeoutpriority') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
