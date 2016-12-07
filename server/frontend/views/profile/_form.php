<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Profiles */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="profiles-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'user_id')->textInput() ?>

    <?= $form->field($model, 'education_id')->textInput() ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'profile_image')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'date_of_birth')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'marital_status')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'gender')->dropDownList([ 'm' => 'M', 'f' => 'F', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'country')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'state')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'city')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'mobile')->textInput() ?>

    <?= $form->field($model, 'height')->textInput() ?>

    <?= $form->field($model, 'blood_group')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'complextion')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'built')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'religion')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'caste')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sub_caste')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'diet')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'birthplace')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'birthtime')->textInput() ?>

    <?= $form->field($model, 'rashi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nakshatra')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'charan')->textInput() ?>

    <?= $form->field($model, 'nadi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'gan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'gotra')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'education')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'occupation')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'income')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'father')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'mother')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'brothers')->textInput() ?>

    <?= $form->field($model, 'sisters')->textInput() ?>

    <?= $form->field($model, 'expected_caste')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'expected_min_age')->textInput() ?>

    <?= $form->field($model, 'expected_max_age')->textInput() ?>

    <?= $form->field($model, 'expected_min_height')->textInput() ?>

    <?= $form->field($model, 'expected_max_height')->textInput() ?>

    <?= $form->field($model, 'expected_education')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'expected_occupation')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
