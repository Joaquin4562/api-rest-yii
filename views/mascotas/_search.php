<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\MascotasSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="mascotas-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_mascotas') ?>

    <?= $form->field($model, 'nombre') ?>

    <?= $form->field($model, 'raza') ?>

    <?= $form->field($model, 'temperamento') ?>

    <?= $form->field($model, 'edad') ?>

    <?php // echo $form->field($model, 'tamano') ?>

    <?php // echo $form->field($model, 'id_usuarios') ?>

    <?php // echo $form->field($model, 'procedencia') ?>

    <?php // echo $form->field($model, 'foto_mascota') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
