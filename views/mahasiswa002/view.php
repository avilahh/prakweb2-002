<?php
use yii\widgets\DetailView;
?>

<?=
DetailView::widget([
    'model' => $mahasiswa002,
    'attributes' => [
        'id002',
        'nim002',
        'nama002',
        'kelas002',
        'status002',
    ],
]);
?>