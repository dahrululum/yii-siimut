<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\SimutUsers */

$this->title = 'Create Simut Users';
$this->params['breadcrumbs'][] = ['label' => 'Simut Users', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="simut-users-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
