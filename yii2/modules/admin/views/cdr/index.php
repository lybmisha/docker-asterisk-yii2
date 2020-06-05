<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\CdrSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Cdrs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cdr-index">

    

    <h1>Статистика звонков</h1>
    <!--<p>
        <?= Html::a('Создать', ['create'], ['class' => 'btn btn-success']) ?>
    </p>-->

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            //'accountcode',
            'src',
            'dst',
            'dcontext',
            //'clid',
            //'channel',
            //'dstchannel',
            //'lastapp',
            //'lastdata',
            //'start',
            //'answer',
            //'end',
            //'duration',
            'billsec',
            'disposition',
            //'amaflags',
            //'userfield',
            //'uniqueid',
            //'linkedid',
            //'peeraccount',
            //'sequence',

            ['class' => 'yii\grid\ActionColumn', 
            'template' => '{view} {delete}',
            'header'=>'Действия'],
        ],
    ]); ?>


</div>
