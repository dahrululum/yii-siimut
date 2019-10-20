<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 21/06/2019
 * Time: 01.21
 */

use app\models\UserRole; ?>

<?= dmstr\widgets\Menu::widget(
    [
        'options' => ['class' => 'sidebar-menu','data-widget'=>'tree'],
        'items' => [
            ['label' => 'MENU UTAMA','options' => ['class' => 'header']],
            ['label' => 'Dashboard', 'icon' => 'home', 'url' => ['dashboard/index'],],
            ['label' => 'Pekerjaan', 'icon' => 'wrench', 'url' => ['/pekerjaan/index']],
            ['label' => 'Rincian Pekerjaan', 'icon' => 'list', 'url' => ['/pekerjaan-rincian/index']],
            ['label' => 'Kegiatan', 'icon' => 'list', 'url' => ['/kegiatan/index']],
            ['label' => 'Lembur', 'icon'=>'list','items'=>[
                ['label' => 'Dashboard', 'icon' => 'circle-o', 'url' => ['/lembur/dashboard']],
                ['label' => 'Daftar', 'icon' => 'circle-o', 'url' => ['/lembur/index']],
            ]],
            ['label' => 'Perjadin', 'icon'=>'list','items'=>[
                ['label' => 'Dashboard', 'icon' => 'circle-o', 'url' => ['/perjadin/dashboard']],
                ['label' => 'Daftar Perjadin', 'icon' => 'circle-o', 'url' => ['/perjadin/index']],
            ]],
            ['label' => 'Dinas Luar', 'icon' => 'list', 'url' => ['/perjadin/index']],
            ['label' => 'Izin', 'icon' => 'list', 'url' => ['/izin/index']],
            ['label' => 'Tenaga Ahli', 'icon' => 'list', 'url' => ['/tenaga-ahli/index']],
            ['label' => 'SISTEM','options' => ['class' => 'header']],
            ['label' => 'Pegawai', 'icon' => 'users', 'url' => ['pegawai/index']],
            ['label' => 'User', 'icon' => 'user', 'items'=>[
                ['label'=>'Admin','url'=>['/user/index','id_user_role'=>UserRole::ADMIN]],
                ['label'=>'Pegawai','url'=>['/user/index','id_user_role'=>UserRole::PEGAWAI]]
            ]],
            ['label' => 'Logout', 'url' => ['site/logout'], 'template' => '<a href="{url}" data-method="post">{icon} {label}</a>' , 'visible' => !Yii::$app->user->isGuest],
        ],
    ]
) ?>
