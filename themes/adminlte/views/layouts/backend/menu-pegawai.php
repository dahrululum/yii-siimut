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
            ['label' => 'Kegiatan', 'icon' => 'cogs', 'url' => ['/kegiatan/index']],
            ['label' => 'Perjalanan Dinas', 'icon' => 'plane', 'url' => ['/perjadin/index']],
            ['label' => 'Lembur', 'icon' => 'hourglass-half', 'url' => ['/lembur/index']],
            ['label' => 'Izin', 'icon' => 'warning', 'url' => ['/izin/index']],
            ['label' => 'MENU LAIN','options' => ['class' => 'header']],
            ['label' => 'Logout', 'icon'=>'power-off', 'url' => ['site/logout'], 'template' => '<a href="{url}" data-method="post">{icon} {label}</a>' , 'visible' => !Yii::$app->user->isGuest],
        ],
    ]
) ?>
