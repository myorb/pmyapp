<?php

use yii\helpers\Html;
use yii\grid\GridView;
// use kartik\export\ExportMenu;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Posts');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="post-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Create Post'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <p>
        <?php
//         $gridColumns = [
//     ['class' => 'yii\grid\SerialColumn'],
//     'id',
//     'name',
//     [
//         'attribute'=>'author_id',
//         'label'=>'Author',
//         'vAlign'=>'middle',
//         'width'=>'190px',
//         'value'=>function ($model, $key, $index, $widget) { 
//             return Html::a($model->author->name, '#', []);
//         },
//         'format'=>'raw'
//     ],
//     'color',
//     'publish_date',
//     'status',
//     ['attribute'=>'buy_amount','format'=>['decimal',2]],
//     ['attribute'=>'sell_amount','format'=>['decimal',2]],
//     ['class' => 'yii\grid\ActionColumn']
// ];
//         echo ExportMenu::widget([
//             'dataProvider' => $dataProvider,
//             'columns' => $gridColumns,
//             'fontAwesome' => true,
//         ]);
        ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'user_id',
            'title',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
