<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Mascotas */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="mascotas-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nombre')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'raza')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'temperamento')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'edad')->textInput() ?>

    <?= $form->field($model, 'tamano')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'id_usuarios')->textInput() ?>

    <?= $form->field($model, 'procedencia')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'foto_mascota')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
