<?php

use common\models\PediaUserGroup;
use common\models\PediaUserMember;
use common\models\PediaUserPerm;
use yii\helpers\Html;
use yii\grid\GridView;

/**
 * Team:没有蛀牙,NKU
 * Coding by 孙一冉 1711297，20190714
 * coding by 解亚兰 1711431,20190722
 * This is the table of bankend web.
 */

/* @var $this yii\web\View */
/* @var $searchModel backend\models\PediaEntryHistoryversionSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Pedia Entry Historyversions';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pedia-entry-historyversion-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <?php
    $gid = PediaUserMember::find()->where(['loginname' => Yii::$app->user->identity->username])->asArray()->one()['gid'];
    $pid = PediaUserGroup::find()->where(['gid' => $gid])->asArray()->one()['pid'];
    $edit = PediaUserPerm::find()->where(['pid' => $pid])->asArray()->one()['allowedcreword'];
    if ($edit != 0) {
        ?><p>
        <?= Html::a('Create Pedia Entry Historyversion', ['create'], ['class' => 'btn btn-success']) ?>
        </p><?php
    }
    ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'vid',
            'edit_time',
            'edit_cont:ntext',
            'eid',
            'uid',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
