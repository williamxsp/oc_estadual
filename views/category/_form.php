<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model app\models\Category */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="category-form">

    <?php $form = ActiveForm::begin(); ?>

 <?= $form->field($model, 'category_id')->dropDownList(
            ArrayHelper::map($model->find()->all(), 'id', 'description'),           // Flat array ('id'=>'label')
            ['prompt'=>'Selecione a Categoria Pai']    // options
        ); ?>

    <?= $form->field($model, 'description')->textInput(['maxlength' => 45]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
