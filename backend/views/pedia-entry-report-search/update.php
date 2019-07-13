<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\PediaEntryReport */

$this->title = 'Update Pedia Entry Report: ' . $model->rid;
$this->params['breadcrumbs'][] = ['label' => 'Pedia Entry Reports', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->rid, 'url' => ['view', 'id' => $model->rid]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="pedia-entry-report-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
