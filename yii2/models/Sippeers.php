<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "sippeers".
 *
 * @property int $id
 * @property string $name
 * @property string|null $ipaddr
 * @property int|null $port
 * @property int|null $regseconds
 * @property string|null $defaultuser
 * @property string|null $fullcontact
 * @property string|null $regserver
 * @property string|null $useragent
 * @property int|null $lastms
 * @property string|null $host
 * @property string|null $type
 * @property string|null $context
 * @property string|null $permit
 * @property string|null $deny
 * @property string|null $secret
 * @property string|null $md5secret
 * @property string|null $remotesecret
 * @property string|null $transport
 * @property string|null $dtmfmode
 * @property string|null $directmedia
 * @property string|null $nat
 * @property string|null $callgroup
 * @property string|null $pickupgroup
 * @property string|null $language
 * @property string|null $disallow
 * @property string|null $allow
 * @property string|null $insecure
 * @property string|null $trustrpid
 * @property string|null $progressinband
 * @property string|null $promiscredir
 * @property string|null $useclientcode
 * @property string|null $accountcode
 * @property string|null $setvar
 * @property string|null $callerid
 * @property string|null $amaflags
 * @property string|null $callcounter
 * @property int|null $busylevel
 * @property string|null $allowoverlap
 * @property string|null $allowsubscribe
 * @property string|null $videosupport
 * @property int|null $maxcallbitrate
 * @property string|null $rfc2833compensate
 * @property string|null $mailbox
 * @property string|null $session-timers
 * @property int|null $session-expires
 * @property int|null $session-minse
 * @property string|null $session-refresher
 * @property string|null $t38pt_usertpsource
 * @property string|null $regexten
 * @property string|null $fromdomain
 * @property string|null $fromuser
 * @property string|null $qualify
 * @property string|null $defaultip
 * @property int|null $rtptimeout
 * @property int|null $rtpholdtimeout
 * @property string|null $sendrpid
 * @property string|null $outboundproxy
 * @property string|null $callbackextension
 * @property int|null $timert1
 * @property int|null $timerb
 * @property int|null $qualifyfreq
 * @property string|null $constantssrc
 * @property string|null $contactpermit
 * @property string|null $contactdeny
 * @property string|null $usereqphone
 * @property string|null $textsupport
 * @property string|null $faxdetect
 * @property string|null $buggymwi
 * @property string|null $auth
 * @property string|null $fullname
 * @property string|null $trunkname
 * @property string|null $cid_number
 * @property string|null $callingpres
 * @property string|null $mohinterpret
 * @property string|null $mohsuggest
 * @property string|null $parkinglot
 * @property string|null $hasvoicemail
 * @property string|null $subscribemwi
 * @property string|null $vmexten
 * @property string|null $autoframing
 * @property int|null $rtpkeepalive
 * @property int|null $call-limit
 * @property string|null $g726nonstandard
 * @property string|null $ignoresdpversion
 * @property string|null $allowtransfer
 * @property string|null $dynamic
 * @property string|null $path
 * @property string|null $supportpath
 */
class Sippeers extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'sippeers';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['port', 'regseconds', 'lastms', 'busylevel', 'maxcallbitrate', 'session-expires', 'session-minse', 'rtptimeout', 'rtpholdtimeout', 'timert1', 'timerb', 'qualifyfreq', 'rtpkeepalive', 'call-limit'], 'integer'],
            [['type', 'transport', 'dtmfmode', 'directmedia', 'trustrpid', 'progressinband', 'promiscredir', 'useclientcode', 'callcounter', 'allowoverlap', 'allowsubscribe', 'videosupport', 'rfc2833compensate', 'session-timers', 'session-refresher', 'sendrpid', 'constantssrc', 'usereqphone', 'textsupport', 'faxdetect', 'buggymwi', 'callingpres', 'hasvoicemail', 'subscribemwi', 'autoframing', 'g726nonstandard', 'ignoresdpversion', 'allowtransfer', 'dynamic', 'supportpath'], 'string'],
            [['name', 'defaultuser', 'host', 'context', 'secret', 'md5secret', 'remotesecret', 'callgroup', 'pickupgroup', 'language', 'insecure', 'callerid', 'amaflags', 'mailbox', 't38pt_usertpsource', 'regexten', 'fromdomain', 'fromuser', 'qualify', 'outboundproxy', 'callbackextension', 'auth', 'fullname', 'trunkname', 'cid_number', 'mohinterpret', 'mohsuggest', 'parkinglot', 'vmexten'], 'string', 'max' => 40],
            [['ipaddr', 'defaultip'], 'string', 'max' => 45],
            [['fullcontact', 'accountcode'], 'string', 'max' => 80],
            [['regserver'], 'string', 'max' => 20],
            [['useragent'], 'string', 'max' => 255],
            [['permit', 'deny', 'contactpermit', 'contactdeny'], 'string', 'max' => 95],
            [['nat'], 'string', 'max' => 29],
            [['disallow', 'allow', 'setvar'], 'string', 'max' => 200],
            [['path'], 'string', 'max' => 256],
            [['name'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'ipaddr' => 'Ipaddr',
            'port' => 'Port',
            'regseconds' => 'Regseconds',
            'defaultuser' => 'Defaultuser',
            'fullcontact' => 'Fullcontact',
            'regserver' => 'Regserver',
            'useragent' => 'Useragent',
            'lastms' => 'Lastms',
            'host' => 'Host',
            'type' => 'Type',
            'context' => 'Context',
            'permit' => 'Permit',
            'deny' => 'Deny',
            'secret' => 'Secret',
            'md5secret' => 'Md5secret',
            'remotesecret' => 'Remotesecret',
            'transport' => 'Transport',
            'dtmfmode' => 'Dtmfmode',
            'directmedia' => 'Directmedia',
            'nat' => 'Nat',
            'callgroup' => 'Callgroup',
            'pickupgroup' => 'Pickupgroup',
            'language' => 'Language',
            'disallow' => 'Disallow',
            'allow' => 'Allow',
            'insecure' => 'Insecure',
            'trustrpid' => 'Trustrpid',
            'progressinband' => 'Progressinband',
            'promiscredir' => 'Promiscredir',
            'useclientcode' => 'Useclientcode',
            'accountcode' => 'Accountcode',
            'setvar' => 'Setvar',
            'callerid' => 'Callerid',
            'amaflags' => 'Amaflags',
            'callcounter' => 'Callcounter',
            'busylevel' => 'Busylevel',
            'allowoverlap' => 'Allowoverlap',
            'allowsubscribe' => 'Allowsubscribe',
            'videosupport' => 'Videosupport',
            'maxcallbitrate' => 'Maxcallbitrate',
            'rfc2833compensate' => 'Rfc2833compensate',
            'mailbox' => 'Mailbox',
            'session-timers' => 'Session Timers',
            'session-expires' => 'Session Expires',
            'session-minse' => 'Session Minse',
            'session-refresher' => 'Session Refresher',
            't38pt_usertpsource' => 'T38pt Usertpsource',
            'regexten' => 'Regexten',
            'fromdomain' => 'Fromdomain',
            'fromuser' => 'Fromuser',
            'qualify' => 'Qualify',
            'defaultip' => 'Defaultip',
            'rtptimeout' => 'Rtptimeout',
            'rtpholdtimeout' => 'Rtpholdtimeout',
            'sendrpid' => 'Sendrpid',
            'outboundproxy' => 'Outboundproxy',
            'callbackextension' => 'Callbackextension',
            'timert1' => 'Timert1',
            'timerb' => 'Timerb',
            'qualifyfreq' => 'Qualifyfreq',
            'constantssrc' => 'Constantssrc',
            'contactpermit' => 'Contactpermit',
            'contactdeny' => 'Contactdeny',
            'usereqphone' => 'Usereqphone',
            'textsupport' => 'Textsupport',
            'faxdetect' => 'Faxdetect',
            'buggymwi' => 'Buggymwi',
            'auth' => 'Auth',
            'fullname' => 'Fullname',
            'trunkname' => 'Trunkname',
            'cid_number' => 'Cid Number',
            'callingpres' => 'Callingpres',
            'mohinterpret' => 'Mohinterpret',
            'mohsuggest' => 'Mohsuggest',
            'parkinglot' => 'Parkinglot',
            'hasvoicemail' => 'Hasvoicemail',
            'subscribemwi' => 'Subscribemwi',
            'vmexten' => 'Vmexten',
            'autoframing' => 'Autoframing',
            'rtpkeepalive' => 'Rtpkeepalive',
            'call-limit' => 'Call Limit',
            'g726nonstandard' => 'G726nonstandard',
            'ignoresdpversion' => 'Ignoresdpversion',
            'allowtransfer' => 'Allowtransfer',
            'dynamic' => 'Dynamic',
            'path' => 'Path',
            'supportpath' => 'Supportpath',
        ];
    }
}
