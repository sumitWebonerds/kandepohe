<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\SignupForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\helpers\Url;

$this->title = 'Signup/Register';

?>
<div class="grid_3">
  <div class="container">
   <div class="breadcrumb1">
     <ul>
        <a href="<?php echo Url::toRoute('site/index');?>"><i class="fa fa-home home_1"></i></a>
        <span class="divider">&nbsp;|&nbsp;</span>
        <li class="current-page"><?= Html::encode($this->title) ?></li>
     </ul>
   </div>
   <div class="services">
      <div class="col-sm-6 login_left">
         <?php $form = ActiveForm::begin(['id' => 'form-signup']); ?>
            
                <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>
                <?= $form->field($model, 'profile_for')->dropDownList(['1'=>'Self','2'=>'Sister','3'=>'Brother','4'=>'Daughter','4'=>'Son']) ?>

                <?= $form->field($model, 'mother_tongue')->dropDownList(['1'=>'Marathi','2'=>'Hindi','3'=>'Kannada','4'=>'Telugu','5'=>'Tamil',]) ?> 
                
                <?= $form->field($model, 'email') ?>

                <?= $form->field($model, 'password')->passwordInput() ?>

                <div class="form-group">
                    <?= Html::submitButton('Signup', ['class' => 'btn btn-primary btn_1', 'name' => 'signup-button']) ?>
                </div>
         <?php ActiveForm::end(); ?>
      </div>
      <div class="col-sm-6">
         <ul class="sharing">
            <li><a href="#" class="facebook" title="Facebook"><i class="fa fa-boxed fa-fw fa-facebook"></i> Share on Facebook</a></li>
            <li><a href="#" class="twitter" title="Twitter"><i class="fa fa-boxed fa-fw fa-twitter"></i> Tweet</a></li>
            <li><a href="#" class="google" title="Google"><i class="fa fa-boxed fa-fw fa-google-plus"></i> Share on Google+</a></li>
            <li><a href="#" class="linkedin" title="Linkedin"><i class="fa fa-boxed fa-fw fa-linkedin"></i> Share on LinkedIn</a></li>
            <li><a href="#" class="mail" title="Email"><i class="fa fa-boxed fa-fw fa-envelope-o"></i> E-mail</a></li>
         </ul>
      </div>
      <div class="clearfix"> </div>
   </div>
  </div>
</div>

