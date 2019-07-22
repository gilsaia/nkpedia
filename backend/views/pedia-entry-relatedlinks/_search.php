<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\PediaEntryRelatedlinksSearch */
/* @var $form yii\widgets\ActiveForm */
/**
 * Team:没有蛀牙,NKU
 * Coding by 解亚兰 1711431,20190722
 */
?>

<div class="pedia-entry-relatedlinks-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'eid') ?>

    <?= $form->field($model, 'lid') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
