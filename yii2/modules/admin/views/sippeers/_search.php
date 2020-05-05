<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\SippeersSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="sippeers-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'name') ?>

    <?= $form->field($model, 'ipaddr') ?>

    <?= $form->field($model, 'port') ?>

    <?= $form->field($model, 'regseconds') ?>

    <?php // echo $form->field($model, 'defaultuser') ?>

    <?php // echo $form->field($model, 'fullcontact') ?>

    <?php // echo $form->field($model, 'regserver') ?>

    <?php // echo $form->field($model, 'useragent') ?>

    <?php // echo $form->field($model, 'lastms') ?>

    <?php // echo $form->field($model, 'host') ?>

    <?php // echo $form->field($model, 'type') ?>

    <?php // echo $form->field($model, 'context') ?>

    <?php // echo $form->field($model, 'permit') ?>

    <?php // echo $form->field($model, 'deny') ?>

    <?php // echo $form->field($model, 'secret') ?>

    <?php // echo $form->field($model, 'md5secret') ?>

    <?php // echo $form->field($model, 'remotesecret') ?>

    <?php // echo $form->field($model, 'transport') ?>

    <?php // echo $form->field($model, 'dtmfmode') ?>

    <?php // echo $form->field($model, 'directmedia') ?>

    <?php // echo $form->field($model, 'nat') ?>

    <?php // echo $form->field($model, 'callgroup') ?>

    <?php // echo $form->field($model, 'pickupgroup') ?>

    <?php // echo $form->field($model, 'language') ?>

    <?php // echo $form->field($model, 'disallow') ?>

    <?php // echo $form->field($model, 'allow') ?>

    <?php // echo $form->field($model, 'insecure') ?>

    <?php // echo $form->field($model, 'trustrpid') ?>

    <?php // echo $form->field($model, 'progressinband') ?>

    <?php // echo $form->field($model, 'promiscredir') ?>

    <?php // echo $form->field($model, 'useclientcode') ?>

    <?php // echo $form->field($model, 'accountcode') ?>

    <?php // echo $form->field($model, 'setvar') ?>

    <?php // echo $form->field($model, 'callerid') ?>

    <?php // echo $form->field($model, 'amaflags') ?>

    <?php // echo $form->field($model, 'callcounter') ?>

    <?php // echo $form->field($model, 'busylevel') ?>

    <?php // echo $form->field($model, 'allowoverlap') ?>

    <?php // echo $form->field($model, 'allowsubscribe') ?>

    <?php // echo $form->field($model, 'videosupport') ?>

    <?php // echo $form->field($model, 'maxcallbitrate') ?>

    <?php // echo $form->field($model, 'rfc2833compensate') ?>

    <?php // echo $form->field($model, 'mailbox') ?>

    <?php // echo $form->field($model, 'session-timers') ?>

    <?php // echo $form->field($model, 'session-expires') ?>

    <?php // echo $form->field($model, 'session-minse') ?>

    <?php // echo $form->field($model, 'session-refresher') ?>

    <?php // echo $form->field($model, 't38pt_usertpsource') ?>

    <?php // echo $form->field($model, 'regexten') ?>

    <?php // echo $form->field($model, 'fromdomain') ?>

    <?php // echo $form->field($model, 'fromuser') ?>

    <?php // echo $form->field($model, 'qualify') ?>

    <?php // echo $form->field($model, 'defaultip') ?>

    <?php // echo $form->field($model, 'rtptimeout') ?>

    <?php // echo $form->field($model, 'rtpholdtimeout') ?>

    <?php // echo $form->field($model, 'sendrpid') ?>

    <?php // echo $form->field($model, 'outboundproxy') ?>

    <?php // echo $form->field($model, 'callbackextension') ?>

    <?php // echo $form->field($model, 'timert1') ?>

    <?php // echo $form->field($model, 'timerb') ?>

    <?php // echo $form->field($model, 'qualifyfreq') ?>

    <?php // echo $form->field($model, 'constantssrc') ?>

    <?php // echo $form->field($model, 'contactpermit') ?>

    <?php // echo $form->field($model, 'contactdeny') ?>

    <?php // echo $form->field($model, 'usereqphone') ?>

    <?php // echo $form->field($model, 'textsupport') ?>

    <?php // echo $form->field($model, 'faxdetect') ?>

    <?php // echo $form->field($model, 'buggymwi') ?>

    <?php // echo $form->field($model, 'auth') ?>

    <?php // echo $form->field($model, 'fullname') ?>

    <?php // echo $form->field($model, 'trunkname') ?>

    <?php // echo $form->field($model, 'cid_number') ?>

    <?php // echo $form->field($model, 'callingpres') ?>

    <?php // echo $form->field($model, 'mohinterpret') ?>

    <?php // echo $form->field($model, 'mohsuggest') ?>

    <?php // echo $form->field($model, 'parkinglot') ?>

    <?php // echo $form->field($model, 'hasvoicemail') ?>

    <?php // echo $form->field($model, 'subscribemwi') ?>

    <?php // echo $form->field($model, 'vmexten') ?>

    <?php // echo $form->field($model, 'autoframing') ?>

    <?php // echo $form->field($model, 'rtpkeepalive') ?>

    <?php // echo $form->field($model, 'call-limit') ?>

    <?php // echo $form->field($model, 'g726nonstandard') ?>

    <?php // echo $form->field($model, 'ignoresdpversion') ?>

    <?php // echo $form->field($model, 'allowtransfer') ?>

    <?php // echo $form->field($model, 'dynamic') ?>

    <?php // echo $form->field($model, 'path') ?>

    <?php // echo $form->field($model, 'supportpath') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
