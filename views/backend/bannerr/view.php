<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Bannerr */

$this->title = $model->reklamid;
$this->params['breadcrumbs'][] = ['label' => 'Reklamlar', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="bannerr-view">

    <h1><?= Html::encode($this->title) ?></h1>
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'reklamid',
            'reklamadi',
            'reklamkodu',
            'reklamurl:url',
            'reklamolusturan',
        ],
    ]) ?>
    <p>        
        <a class="btn btn-lg btn-primary" href="http://portal.kouosl/admin/banner/bannerr/index">Geri Dön</a></a>
        <?= Html::a('Sil', ['delete', 'id' => $model->reklamid], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Emin Misin?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

</div>