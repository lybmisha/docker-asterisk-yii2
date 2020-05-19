<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Sippeers */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="sippeers-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'defaultuser')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'host')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'type')->dropDownList([ '' => '','friend' => 'Friend', 'user' => 'User', 'peer' => 'Peer', ]) ?>

    <?= $form->field($model, 'context')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'disallow')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'allow')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'qualify')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'insecure')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'dtmfmode')->dropDownList([ ' ' => '', 'rfc2833' => 'Rfc2833', 'info' => 'Info', 'shortinfo' => 'Shortinfo', 'inband' => 'Inband', 'auto' => 'Auto', ]) ?>

    <?= $form->field($model, 'ipaddr')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'port')->textInput() ?>

    <?= $form->field($model, 'regseconds')->textInput() ?>

    

    <?= $form->field($model, 'fullcontact')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'regserver')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'useragent')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'lastms')->textInput() ?>

    <?= $form->field($model, 'permit')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'deny')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'secret')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'md5secret')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'remotesecret')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'transport')->dropDownList([ '' => '', 'udp' => 'Udp', 'tcp' => 'Tcp', 'tls' => 'Tls', 'ws' => 'Ws', 'wss' => 'Wss', 'udp,tcp' => 'Udp,tcp', 'tcp,udp' => 'Tcp,udp', ]) ?>

    <?= $form->field($model, 'directmedia')->dropDownList([ ' ' => '', 'yes' => 'Yes', 'no' => 'No', 'nonat' => 'Nonat', 'update' => 'Update', 'outgoing' => 'Outgoing', ]) ?>

    <?= $form->field($model, 'callgroup')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pickupgroup')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'language')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'trustrpid')->dropDownList([  ' ' => '', 'yes' => 'Yes', 'no' => 'No', ]) ?>

    <?= $form->field($model, 'progressinband')->dropDownList([  ' ' => '', 'yes' => 'Yes', 'no' => 'No', 'never' => 'Never', ]) ?>

    <?= $form->field($model, 'promiscredir')->dropDownList([  ' ' => '', 'yes' => 'Yes', 'no' => 'No', ]) ?>

    <?= $form->field($model, 'useclientcode')->dropDownList([ ' ' => '', 'yes' => 'Yes', 'no' => 'No', ]) ?>

    <?= $form->field($model, 'accountcode')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'setvar')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'callerid')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'amaflags')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'callcounter')->dropDownList([  ' ' => '', 'yes' => 'Yes', 'no' => 'No', ]) ?>

    <?= $form->field($model, 'busylevel')->textInput() ?>

    <?= $form->field($model, 'allowoverlap')->dropDownList([  ' ' => '', 'yes' => 'Yes', 'no' => 'No', ]) ?>

    <?= $form->field($model, 'allowsubscribe')->dropDownList([  ' ' => '', 'yes' => 'Yes', 'no' => 'No', ]) ?>

    <?= $form->field($model, 'videosupport')->dropDownList([  ' ' => '', 'yes' => 'Yes', 'no' => 'No', ]) ?>

    <?= $form->field($model, 'maxcallbitrate')->textInput() ?>

    <?= $form->field($model, 'rfc2833compensate')->dropDownList([  ' ' => '', 'yes' => 'Yes', 'no' => 'No', ]) ?>

    <?= $form->field($model, 'mailbox')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 't38pt_usertpsource')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'regexten')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'fromdomain')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'fromuser')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'defaultip')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'rtptimeout')->textInput() ?>

    <?= $form->field($model, 'rtpholdtimeout')->textInput() ?>

    <?= $form->field($model, 'sendrpid')->dropDownList([  ' '=> '', 'yes' => 'Yes', 'no' => 'No', ]) ?>

    <?= $form->field($model, 'outboundproxy')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'callbackextension')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'timert1')->textInput() ?>

    <?= $form->field($model, 'timerb')->textInput() ?>

    <?= $form->field($model, 'qualifyfreq')->textInput() ?>

    <?= $form->field($model, 'constantssrc')->dropDownList([  '' => '', 'yes' => 'Yes', 'no' => 'No', ]) ?>

    <?= $form->field($model, 'contactpermit')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'contactdeny')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'usereqphone')->dropDownList([  '' => '', 'yes' => 'Yes', 'no' => 'No', ]) ?>

    <?= $form->field($model, 'textsupport')->dropDownList([  '' => '', 'yes' => 'Yes', 'no' => 'No', ]) ?>

    <?= $form->field($model, 'faxdetect')->dropDownList([  '' => '', 'yes' => 'Yes', 'no' => 'No', ]) ?>

    <?= $form->field($model, 'buggymwi')->dropDownList([  '' => '', 'yes' => 'Yes', 'no' => 'No', ]) ?>

    <?= $form->field($model, 'auth')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'fullname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'trunkname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cid_number')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'callingpres')->dropDownList([  '' => '', 'allowed_not_screened' => 'Allowed not screened', 'allowed_passed_screen' => 'Allowed passed screen', 'allowed_failed_screen' => 'Allowed failed screen', 'allowed' => 'Allowed', 'prohib_not_screened' => 'Prohib not screened', 'prohib_passed_screen' => 'Prohib passed screen', 'prohib_failed_screen' => 'Prohib failed screen', 'prohib' => 'Prohib', ]) ?>

    <?= $form->field($model, 'mohinterpret')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'mohsuggest')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'parkinglot')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'hasvoicemail')->dropDownList([ ''=>'', 'yes' => 'Yes', 'no' => 'No', ]) ?>

    <?= $form->field($model, 'subscribemwi')->dropDownList([ ''=>'', 'yes' => 'Yes', 'no' => 'No', ]) ?>

    <?= $form->field($model, 'vmexten')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'autoframing')->dropDownList([ ''=>'', 'yes' => 'Yes', 'no' => 'No', ]) ?>

    <?= $form->field($model, 'rtpkeepalive')->textInput() ?>



    <?= $form->field($model, 'g726nonstandard')->dropDownList([ ''=>'', 'yes' => 'Yes', 'no' => 'No', ]) ?>

    <?= $form->field($model, 'ignoresdpversion')->dropDownList([ ''=>'', 'yes' => 'Yes', 'no' => 'No', ]) ?>

    <?= $form->field($model, 'allowtransfer')->dropDownList([ ''=>'', 'yes' => 'Yes', 'no' => 'No', ]) ?>

    <?= $form->field($model, 'dynamic')->dropDownList([ ''=>'', 'yes' => 'Yes', 'no' => 'No', ]) ?>

    <?= $form->field($model, 'path')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'supportpath')->dropDownList([ ''=>'', 'yes' => 'Yes', 'no' => 'No', ]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
