<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Detalle */

$this->title = 'Update Detalle: ' . ' ' . $model->iddetalle;
$this->params['breadcrumbs'][] = ['label' => 'Detalles', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->iddetalle, 'url' => ['view', 'areas_idtareas' => $model->iddetalle]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="detalle-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
