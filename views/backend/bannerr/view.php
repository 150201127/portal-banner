<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Bannerr */

$this->title = $model->bannerr_id;
$this->params['breadcrumbs'][] = ['label' => 'Reklamlar', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="bannerr-view">

    <h1><?= Html::encode($this->title) ?></h1>
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'bannerr_id',
            'bannerr_adi',
            'bannerr_kodu',
            'bannerr_resim_url:url',
            'bannerr_reklam_url:url',
            //'bannerr_created',
        ],
    ]) ?>
    <p>        
        <a class="btn btn-lg btn-primary" href="http://portal.kouosl/admin/banner/bannerr/index">Geri Dön</a></a>
        <?= Html::a('Sil', ['delete', 'id' => $model->bannerr_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

</div>