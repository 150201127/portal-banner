<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel backend\models\BannerrSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Reklamlar';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="bannerr-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php Pjax::begin(); ?>
    <p>
        <a class="btn btn-lg btn-primary" href="http://portal.kouosl/admin/banner">Modül Anasayfasına Dön</a></a>
        <?= Html::a('Reklam Ekle', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'reklamkodu',
            'reklamadi',
            'reklamolusturan',
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>