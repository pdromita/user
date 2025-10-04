<?php
/* @var $this yii\web\View */


use yii\helpers\Html;
use yii\grid\GridView;

$this->title = 'Lista utenti';
$this->params['breadcrumbs'][] = $this->title;

echo gridview::widget([
    'dataProvider' => $dataProvider,
    'columns' => [
        ['class' => 'yii\grid\SerialColumn'],
        'id',
        'username',
        'email:email',
        'status',
        // 'auth_key',
        'password_reset_token',
        'created_at:datetime',
        'updated_at:datetime',

        ['class' => 'yii\grid\ActionColumn'],
    ],
]);

