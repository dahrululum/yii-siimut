<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\LoginForm */

use yii\bootstrap\ActiveForm;
use yii\helpers\Html;

$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;

?>

<?php $form = ActiveForm::begin([
    'id' => 'login-form',
    'enableClientValidation' => false
]); ?>

<div class="login-box">
    <br>
    <div class="login-logo" style="margin-bottom: 30px">
        <img src="<?= Yii::$app->request->baseUrl; ?>/images/logobabel.png" style="height:100px">
        <p style="color: white; font-size: 22px; margin: 5px 0px; text-transform: uppercase">Sistem Informasi Mutasi </p>
        <p href="#" style="color: white; font-size: 24px; margin: 5px 0px; text-transform: uppercase"><b>SI-IMUT</b></p>

    </div>

    <div class="login-box-body">
        <p class="login-box-msg">Masukkan Nama Pengguna Dan Kata Sandi</p>

        <?= $form->field($model, 'username',[
            'options' => ['class' => 'form-group has-feedback'],
            'inputTemplate' => "{input}<span class='glyphicon glyphicon-user form-control-feedback'></span>"
        ])->textInput(['autofocus' => true,'placeholder' => 'Username'])->label(false) ?>

        <?= $form->field($model, 'password',[
            'options' => ['class' => 'form-group has-feedback'],
            'inputTemplate' => "{input}<span class='glyphicon glyphicon-lock form-control-feedback'></span>"
        ])->passwordInput(['placeholder' => 'Password'])->label(false) ?>

        <div class="row">
            <div class="col-xs-8">
                <?= $form->field($model, 'rememberMe')->checkbox() ?>
            </div>
            <div class="col-xs-4">
                <?= Html::submitButton('Login <i class="fa fa-sign-in"></i>', ['class' => 'btn btn-primary btn-block btn-flat', 'name' => 'login-button']) ?>
            </div>
        </div>
    </div>
</div>

<?php ActiveForm::end(); ?>
