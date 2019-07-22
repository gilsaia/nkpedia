<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\PediaEntryHistoryversion */
/* @var $form yii\widgets\ActiveForm */
?>
/**
* Team:没有蛀牙,NKU
* Coding by 解亚兰 1711431,20190722
*/

<div class="pedia-entry-historyversion-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'edit_time')->textInput() ?>

    <?= $form->field($model, 'edit_cont')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'eid')->textInput() ?>

    <?= $form->field($model, 'uid')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
