<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Sippeers;

/**
 * SippeersSearch represents the model behind the search form of `app\models\Sippeers`.
 */
class SippeersSearch extends Sippeers
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'port', 'regseconds', 'lastms', 'busylevel', 'maxcallbitrate', 'session-expires', 'session-minse', 'rtptimeout', 'rtpholdtimeout', 'timert1', 'timerb', 'qualifyfreq', 'rtpkeepalive', 'call-limit'], 'integer'],
            [['name', 'ipaddr', 'defaultuser', 'fullcontact', 'regserver', 'useragent', 'host', 'type', 'context', 'permit', 'deny', 'secret', 'md5secret', 'remotesecret', 'transport', 'dtmfmode', 'directmedia', 'nat', 'callgroup', 'pickupgroup', 'language', 'disallow', 'allow', 'insecure', 'trustrpid', 'progressinband', 'promiscredir', 'useclientcode', 'accountcode', 'setvar', 'callerid', 'amaflags', 'callcounter', 'allowoverlap', 'allowsubscribe', 'videosupport', 'rfc2833compensate', 'mailbox', 'session-timers', 'session-refresher', 't38pt_usertpsource', 'regexten', 'fromdomain', 'fromuser', 'qualify', 'defaultip', 'sendrpid', 'outboundproxy', 'callbackextension', 'constantssrc', 'contactpermit', 'contactdeny', 'usereqphone', 'textsupport', 'faxdetect', 'buggymwi', 'auth', 'fullname', 'trunkname', 'cid_number', 'callingpres', 'mohinterpret', 'mohsuggest', 'parkinglot', 'hasvoicemail', 'subscribemwi', 'vmexten', 'autoframing', 'g726nonstandard', 'ignoresdpversion', 'allowtransfer', 'dynamic', 'path', 'supportpath'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Sippeers::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'port' => $this->port,
            'regseconds' => $this->regseconds,
            'lastms' => $this->lastms,
            'busylevel' => $this->busylevel,
            'maxcallbitrate' => $this->maxcallbitrate,
           // 'session-expires' => $this->session-expires,
           //'session-minse' => $this->session-minse,
            'rtptimeout' => $this->rtptimeout,
            'rtpholdtimeout' => $this->rtpholdtimeout,
            'timert1' => $this->timert1,
            'timerb' => $this->timerb,
            'qualifyfreq' => $this->qualifyfreq,
            'rtpkeepalive' => $this->rtpkeepalive,
           // 'call-limit' => $this->call-limit,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'ipaddr', $this->ipaddr])
            ->andFilterWhere(['like', 'defaultuser', $this->defaultuser])
            ->andFilterWhere(['like', 'fullcontact', $this->fullcontact])
            ->andFilterWhere(['like', 'regserver', $this->regserver])
            ->andFilterWhere(['like', 'useragent', $this->useragent])
            ->andFilterWhere(['like', 'host', $this->host])
            ->andFilterWhere(['like', 'type', $this->type])
            ->andFilterWhere(['like', 'context', $this->context])
            ->andFilterWhere(['like', 'permit', $this->permit])
            ->andFilterWhere(['like', 'deny', $this->deny])
            ->andFilterWhere(['like', 'secret', $this->secret])
            ->andFilterWhere(['like', 'md5secret', $this->md5secret])
            ->andFilterWhere(['like', 'remotesecret', $this->remotesecret])
            ->andFilterWhere(['like', 'transport', $this->transport])
            ->andFilterWhere(['like', 'dtmfmode', $this->dtmfmode])
            ->andFilterWhere(['like', 'directmedia', $this->directmedia])
            ->andFilterWhere(['like', 'nat', $this->nat])
            ->andFilterWhere(['like', 'callgroup', $this->callgroup])
            ->andFilterWhere(['like', 'pickupgroup', $this->pickupgroup])
            ->andFilterWhere(['like', 'language', $this->language])
            ->andFilterWhere(['like', 'disallow', $this->disallow])
            ->andFilterWhere(['like', 'allow', $this->allow])
            ->andFilterWhere(['like', 'insecure', $this->insecure])
            ->andFilterWhere(['like', 'trustrpid', $this->trustrpid])
            ->andFilterWhere(['like', 'progressinband', $this->progressinband])
            ->andFilterWhere(['like', 'promiscredir', $this->promiscredir])
            ->andFilterWhere(['like', 'useclientcode', $this->useclientcode])
            ->andFilterWhere(['like', 'accountcode', $this->accountcode])
            ->andFilterWhere(['like', 'setvar', $this->setvar])
            ->andFilterWhere(['like', 'callerid', $this->callerid])
            ->andFilterWhere(['like', 'amaflags', $this->amaflags])
            ->andFilterWhere(['like', 'callcounter', $this->callcounter])
            ->andFilterWhere(['like', 'allowoverlap', $this->allowoverlap])
            ->andFilterWhere(['like', 'allowsubscribe', $this->allowsubscribe])
            ->andFilterWhere(['like', 'videosupport', $this->videosupport])
            ->andFilterWhere(['like', 'rfc2833compensate', $this->rfc2833compensate])
            ->andFilterWhere(['like', 'mailbox', $this->mailbox])
           // ->andFilterWhere(['like', 'session-timers', $this->session-timers])
           // ->andFilterWhere(['like', 'session-refresher', $this->session-refresher])
            ->andFilterWhere(['like', 't38pt_usertpsource', $this->t38pt_usertpsource])
            ->andFilterWhere(['like', 'regexten', $this->regexten])
            ->andFilterWhere(['like', 'fromdomain', $this->fromdomain])
            ->andFilterWhere(['like', 'fromuser', $this->fromuser])
            ->andFilterWhere(['like', 'qualify', $this->qualify])
            ->andFilterWhere(['like', 'defaultip', $this->defaultip])
            ->andFilterWhere(['like', 'sendrpid', $this->sendrpid])
            ->andFilterWhere(['like', 'outboundproxy', $this->outboundproxy])
            ->andFilterWhere(['like', 'callbackextension', $this->callbackextension])
            ->andFilterWhere(['like', 'constantssrc', $this->constantssrc])
            ->andFilterWhere(['like', 'contactpermit', $this->contactpermit])
            ->andFilterWhere(['like', 'contactdeny', $this->contactdeny])
            ->andFilterWhere(['like', 'usereqphone', $this->usereqphone])
            ->andFilterWhere(['like', 'textsupport', $this->textsupport])
            ->andFilterWhere(['like', 'faxdetect', $this->faxdetect])
            ->andFilterWhere(['like', 'buggymwi', $this->buggymwi])
            ->andFilterWhere(['like', 'auth', $this->auth])
            ->andFilterWhere(['like', 'fullname', $this->fullname])
            ->andFilterWhere(['like', 'trunkname', $this->trunkname])
            ->andFilterWhere(['like', 'cid_number', $this->cid_number])
            ->andFilterWhere(['like', 'callingpres', $this->callingpres])
            ->andFilterWhere(['like', 'mohinterpret', $this->mohinterpret])
            ->andFilterWhere(['like', 'mohsuggest', $this->mohsuggest])
            ->andFilterWhere(['like', 'parkinglot', $this->parkinglot])
            ->andFilterWhere(['like', 'hasvoicemail', $this->hasvoicemail])
            ->andFilterWhere(['like', 'subscribemwi', $this->subscribemwi])
            ->andFilterWhere(['like', 'vmexten', $this->vmexten])
            ->andFilterWhere(['like', 'autoframing', $this->autoframing])
            ->andFilterWhere(['like', 'g726nonstandard', $this->g726nonstandard])
            ->andFilterWhere(['like', 'ignoresdpversion', $this->ignoresdpversion])
            ->andFilterWhere(['like', 'allowtransfer', $this->allowtransfer])
            ->andFilterWhere(['like', 'dynamic', $this->dynamic])
            ->andFilterWhere(['like', 'path', $this->path])
            ->andFilterWhere(['like', 'supportpath', $this->supportpath]);

        return $dataProvider;
    }
}
