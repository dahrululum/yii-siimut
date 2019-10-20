<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\SimutUsersSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="simut-users-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'username') ?>

    <?= $form->field($model, 'password') ?>

    <?= $form->field($model, 'daerah') ?>

    <?= $form->field($model, 'kelompok') ?>

    <?php // echo $form->field($model, 'program') ?>

    <?php // echo $form->field($model, 'skpd') ?>

    <?php // echo $form->field($model, 'level') ?>

    <?php // echo $form->field($model, 'nama') ?>

    <?php // echo $form->field($model, 'nip') ?>

    <?php // echo $form->field($model, 'alamat') ?>

    <?php // echo $form->field($model, 'telp') ?>

    <?php // echo $form->field($model, 'hp') ?>

    <?php // echo $form->field($model, 'keterangan') ?>

    <?php // echo $form->field($model, 'foto') ?>

    <?php // echo $form->field($model, 'tupdate') ?>

    <?php // echo $form->field($model, 'status') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
