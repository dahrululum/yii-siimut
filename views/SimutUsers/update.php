<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\SimutUsers */

$this->title = 'Update Simut Users: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Simut Users', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="simut-users-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
