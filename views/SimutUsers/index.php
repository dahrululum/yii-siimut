<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\SimutUsersSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Simut Users';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="simut-users-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Simut Users', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'username',
            'password',
            'daerah',
            'kelompok',
            //'program',
            //'skpd',
            //'level',
            //'nama',
            //'nip',
            //'alamat',
            //'telp',
            //'hp',
            //'keterangan',
            //'foto',
            //'tupdate',
            //'status',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
