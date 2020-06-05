<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ExtensionsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Extensions';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="extensions-index">

    <h1>Правила звоков</h1>

    <p>
        <?= Html::a('Создать', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            'context',
            'exten',
            'priority',
            'app',
            'appdata',

            ['class' => 'yii\grid\ActionColumn',
            'header'=>'Действия'],
        ],
    ]); ?>


</div>
