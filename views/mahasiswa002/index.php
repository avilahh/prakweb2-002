<?php
use yii\grid\Gridview;
use yii\grid\SerialColumn;
use yii\grid\ActionColumn;
use yii\helpers\Html;
?>

<p>
        <?= Html::a('Mahasiswa Baru', ['create'], ['class' => 'btn btn-primary']) ?>
</p>

<?=

Gridview::widget([
    'dataProvider' => $dataProvider,
    'columns' => [
        ['class'=>SerialColumn::className()],
    'id002',
    'nim002',
    'nama002',
    'kelas002',
    'status002',
    [
        'class'=> ActionColumn::className(),
        'template'=> '{view} {update} {delete}',

    ],
],
]);
?>