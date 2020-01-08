<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\BannerrSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="bannerr-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'reklamid') ?>

    <?= $form->field($model, 'reklamadi') ?>

    <?= $form->field($model, 'reklamkodu') ?>

    <?= $form->field($model, 'reklamurl') ?>

    <? $form->field($model, 'reklamolusturan') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>