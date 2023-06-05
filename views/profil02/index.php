<?php
    use yii\grid\GridView;
?>

<?=
    GridView::Widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            'Id',
            'Id_mahasiswa',
            'Foto_profil',
        ]
    ])
?>
