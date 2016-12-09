
<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use yii\jui\DatePicker;
/* @var $this yii\web\View */
/* @var $model common\models\Profiles */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="profiles-form">

    <?php $form = ActiveForm::begin(); ?>






  <div class=" col-md-6 bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
               <ul id="myTab" class="nav nav-tabs nav-tabs1" role="tablist">
                  <li role="presentation" class="active"><a href="#home" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">About Myself</a></li>
               </ul>
               <div id="myTabContent" class="tab-content">
                  <div role="tabpanel" class="tab-pane fade in active" id="home" aria-labelledby="home-tab">
                        
    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'profile_image')->fileInput() ?>

    <?php $form->field($model, 'date_of_birth')->textInput(['maxlength' => true]) ?>

    <?php 
        $maritalStatus=ArrayHelper::map(\common\models\Masters::find()->where(['type'=>'marital_status'])->asArray()->all(), 'name', 'name');

        echo $form->field($model, 'marital_status')->dropDownList($maritalStatus,['prompt'=>'Marital Status']) 
    ?>

    <?= $form->field($model, 'gender')->dropDownList([ 'm' => 'Male', 'f' => 'Female', ], ['prompt' => 'Select Gender']) ?>

    <?= $form->field($model, 'country')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'state')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'city')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'mobile')->textInput() ?>

    <?= $form->field($model, 'height')->textInput() ?>

</div>
</div>
</div>














  <div class=" col-md-6 bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
               <ul id="myTab" class="nav nav-tabs nav-tabs1" role="tablist">
                  <li role="presentation" class="active"><a href="#home" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">About Myself</a></li>
               </ul>
               <div id="myTabContent" class="tab-content">
                  <div role="tabpanel" class="tab-pane fade in active" id="home" aria-labelledby="home-tab">
 

    <?php 
        $bloodGroup=ArrayHelper::map(\common\models\Masters::find()->where(['type'=>'blood_group'])->asArray()->all(), 'name', 'name');
        echo  $form->field($model, 'blood_group')->dropDownList($bloodGroup,['prompt'=>'Blood Group']) 
    ?>
    <?= $form->field($model, 'complextion')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'built')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'religion')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'caste')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sub_caste')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'diet')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'birthplace')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'birthtime')->textInput() ?>

    <?php 
        $rashi=ArrayHelper::map(\common\models\Masters::find()->where(['type'=>'rashi'])->asArray()->all(), 'name', 'name');
        echo  $form->field($model, 'rashi')->dropDownList($rashi,['prompt'=>'Rashi']) 
    ?>
    <?php 
        $nakshatra=ArrayHelper::map(\common\models\Masters::find()->where(['type'=>'nakshatra'])->asArray()->all(), 'name', 'name');
        echo  $form->field($model, 'nakshatra')->dropDownList($nakshatra,['prompt'=>'Nakshatra']) 
    ?>
</div>
</div>
</div>



  <div class=" col-md-6 bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
               <ul id="myTab" class="nav nav-tabs nav-tabs1" role="tablist">
                  <li role="presentation" class="active"><a href="#home" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">About Myself</a></li>
               </ul>
               <div id="myTabContent" class="tab-content">
                  <div role="tabpanel" class="tab-pane fade in active" id="home" aria-labelledby="home-tab">
 

    <?= $form->field($model, 'charan')->textInput() ?>

    <?= $form->field($model, 'nadi')->textInput(['maxlength' => true]) ?>
    <?php 
        $gan=ArrayHelper::map(\common\models\Masters::find()->where(['type'=>'gan'])->asArray()->all(), 'name', 'name');
        echo  $form->field($model, 'gan')->dropDownList($gan,['prompt'=>'Gan']) 
    ?>

    <?= $form->field($model, 'gotra')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'education')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'occupation')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'income')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'father')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'mother')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'brothers')->textInput() ?>

    <?= $form->field($model, 'sisters')->textInput() ?>

</div>
</div>
</div>


  <div class=" col-md-6 bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
               <ul id="myTab" class="nav nav-tabs nav-tabs1" role="tablist">
                  <li role="presentation" class="active"><a href="#home" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">About Myself</a></li>
               </ul>
               <div id="myTabContent" class="tab-content">
                  <div role="tabpanel" class="tab-pane fade in active" id="home" aria-labelledby="home-tab">

    <?= $form->field($model, 'expected_caste')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'expected_min_age')->textInput() ?>

    <?= $form->field($model, 'expected_max_age')->textInput() ?>

    <?= $form->field($model, 'expected_min_height')->textInput() ?>

    <?= $form->field($model, 'expected_max_height')->textInput() ?>

    <?= $form->field($model, 'expected_education')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'expected_occupation')->textInput(['maxlength' => true]) ?>
</div>
</div>
</div>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success btn_1' : 'btn btn-primary btn_1']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
