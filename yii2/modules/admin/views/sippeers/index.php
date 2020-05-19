<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\SippeersSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Sippeers';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sippeers-index">

    <h1>Абоненты</h1>

    <p>
        <?= Html::a('Создать', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name',
            'ipaddr',
            'port',
            //'regseconds',
            //'defaultuser',
            //'fullcontact',
            //'regserver',
            //'useragent',
            //'lastms',
            //'host',
            //'type',
            'context',
            //'permit',
            //'deny',
            //'secret',
            //'md5secret',
            //'remotesecret',
            //'transport',
            //'dtmfmode',
            //'directmedia',
            //'nat',
            //'callgroup',
            //'pickupgroup',
            //'language',
            //'disallow',
            //'allow',
            //'insecure',
            //'trustrpid',
            //'progressinband',
            //'promiscredir',
            //'useclientcode',
            //'accountcode',
            //'setvar',
            //'callerid',
            //'amaflags',
            //'callcounter',
            //'busylevel',
            //'allowoverlap',
            //'allowsubscribe',
            //'videosupport',
            //'maxcallbitrate',
            //'rfc2833compensate',
            //'mailbox',
            //'session-timers',
            //'session-expires',
            //'session-minse',
            //'session-refresher',
            //'t38pt_usertpsource',
            //'regexten',
            //'fromdomain',
            //'fromuser',
            //'qualify',
            //'defaultip',
            //'rtptimeout:datetime',
            //'rtpholdtimeout:datetime',
            //'sendrpid',
            //'outboundproxy',
            //'callbackextension',
            //'timert1:datetime',
            //'timerb:datetime',
            //'qualifyfreq',
            //'constantssrc',
            //'contactpermit',
            //'contactdeny',
            //'usereqphone',
            //'textsupport',
            //'faxdetect',
            //'buggymwi',
            //'auth',
            //'fullname',
            //'trunkname',
            //'cid_number',
            //'callingpres',
            //'mohinterpret',
            //'mohsuggest',
            //'parkinglot',
            //'hasvoicemail:email',
            //'subscribemwi',
            //'vmexten',
            //'autoframing',
            //'rtpkeepalive',
            //'call-limit',
            //'g726nonstandard',
            //'ignoresdpversion',
            //'allowtransfer',
            //'dynamic',
            //'path',
            //'supportpath',

            ['class' => 'yii\grid\ActionColumn',
            'header'=>'Действия'],
        ],
    ]); ?>


</div>
