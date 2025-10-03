<?php
/* @var $this yii\web\View */
/* @var $users app\modules\user\models\User[] */

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
        'created_at:datetime',
        'updated_at:datetime',

        ['class' => 'yii\grid\ActionColumn'],
    ],
]);