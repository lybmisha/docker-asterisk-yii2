<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Sippeers */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Sippeers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="sippeers-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'name',
            'ipaddr',
            'port',
            'regseconds',
            'defaultuser',
            'fullcontact',
            'regserver',
            'useragent',
            'lastms',
            'host',
            'type',
            'context',
            'permit',
            'deny',
            'secret',
            'md5secret',
            'remotesecret',
            'transport',
            'dtmfmode',
            'directmedia',
            'nat',
            'callgroup',
            'pickupgroup',
            'language',
            'disallow',
            'allow',
            'insecure',
            'trustrpid',
            'progressinband',
            'promiscredir',
            'useclientcode',
            'accountcode',
            'setvar',
            'callerid',
            'amaflags',
            'callcounter',
            'busylevel',
            'allowoverlap',
            'allowsubscribe',
            'videosupport',
            'maxcallbitrate',
            'rfc2833compensate',
            'mailbox',
            'session-timers',
            'session-expires',
            'session-minse',
            'session-refresher',
            't38pt_usertpsource',
            'regexten',
            'fromdomain',
            'fromuser',
            'qualify',
            'defaultip',
            'rtptimeout:datetime',
            'rtpholdtimeout:datetime',
            'sendrpid',
            'outboundproxy',
            'callbackextension',
            'timert1:datetime',
            'timerb:datetime',
            'qualifyfreq',
            'constantssrc',
            'contactpermit',
            'contactdeny',
            'usereqphone',
            'textsupport',
            'faxdetect',
            'buggymwi',
            'auth',
            'fullname',
            'trunkname',
            'cid_number',
            'callingpres',
            'mohinterpret',
            'mohsuggest',
            'parkinglot',
            'hasvoicemail:email',
            'subscribemwi',
            'vmexten',
            'autoframing',
            'rtpkeepalive',
            'call-limit',
            'g726nonstandard',
            'ignoresdpversion',
            'allowtransfer',
            'dynamic',
            'path',
            'supportpath',
        ],
    ]) ?>

</div>
