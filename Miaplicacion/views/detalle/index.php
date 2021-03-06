<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\DetalleSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Detalles';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="detalle-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Detalle', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            
            'recurso_humano_idrecurso_humano',
            'tareas_idtareas',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
