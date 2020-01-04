<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Bannerr */

$this->title = 'Reklam Oluştur';
$this->params['breadcrumbs'][] = ['label' => 'Reklamlar', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="bannerr-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>