<?php

use yii\helpers\Html;

use common\models\Profiles;
use yii\helpers\Url;
/* @var $this yii\web\View */
/* @var $searchModel common\models\ProfilesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Profiles';
?>
<div class="profiles-index">
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
    <?php
        $pid = Yii::$app->user->identity->id;
        $customer = Profiles::find()->where(['user_id' => $pid])->one();
    ?>
    <div class="grid_3">
  <div class="container">
   <div class="breadcrumb1">
     <ul>
        <a href="index.html"><i class="fa fa-home home_1"></i></a>
        <span class="divider">&nbsp;|&nbsp;</span>
        <li class="current-page">View Profile</li>
     </ul>
   </div>
   <div class="profile">
     <div class="col-md-12 profile_left">
        <h2>Name : <?= $customer->name?></h2>
        <div class="col_3">
            <div class="col-sm-4 row_2">
                <img src="<?= 'images/'.$customer->profile_image?>" width="250px" height="150px"> 
            </div>
            <div class="col-sm-8 row_1">
                <table class="table_working_hours">
                    <tbody>
                        <tr class="opened_1">
                            <td class="day_label">City :</td>
                            <td class="day_value"><?= $customer->city?></td>
                        </tr>
                        <tr class="opened">
                            <td class="day_label">State</td>
                            <td class="day_value"><?= $customer->state?></td>
                        </tr>
                        <tr class="opened">
                            <td class="day_label">Country</td>
                            <td class="day_value"><?= $customer->country?></td>
                        </tr>
                        <tr class="opened">
                            <td class="day_label">Mobile Number :</td>
                            <td class="day_value"><?= $customer->mobile ?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="clearfix"> </div>
        </div>
        <div class="col_4">
            <div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
               <ul id="myTab" class="nav nav-tabs nav-tabs1" role="tablist">
                  <li role="presentation" class="active"><a href="#home" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">About Myself</a></li>
                  <li role="presentation"><a href="#profile" role="tab" id="profile-tab" data-toggle="tab" aria-controls="profile">Family Details</a></li>
                  <li role="presentation"><a href="#profile1" role="tab" id="profile-tab1" data-toggle="tab" aria-controls="profile1">Partner Preference</a></li>
               </ul>
               <div id="myTabContent" class="tab-content">
                  <div role="tabpanel" class="tab-pane fade in active" id="home" aria-labelledby="home-tab">
                    <div class="basic_1">
                        <h3>Basics & Lifestyle</h3>
                        <div class="col-md-6 basic_1-left">
                          <table class="table_working_hours">
                            <tbody>
                                <tr class="opened_1">
                                    <td class="day_label">Name :</td>
                                    <td class="day_value"><?= $customer->name?></td>
                                </tr>
                                <tr class="opened">
                                    <td class="day_label">Marital Status :</td>
                                    <td class="day_value"><?= $customer->marital_status?></td>
                                </tr>
                                <tr class="opened">
                                    <td class="day_label">Body Type :</td>
                                    <td class="day_value"><?php if($customer->built==''){
                                            echo "Not Mentioned";
                                        }else{
                                             echo $customer->built;   
                                        }?></td>
                                </tr>
                                <tr class="opened">
                                    <td class="day_label">Height :</td>
                                    <td class="day_value">
                                        <?php if($customer->height==''){
                                            echo "Not Mentioned";
                                        }else{
                                             echo $customer->height.' ft';   
                                        }?>
                                    </td>
                                </tr>
                                <tr class="opened">
                                    <td class="day_label">Physical Status :</td>
                                    <td class="day_value closed"><span>Not Specified</span></td>
                                </tr>
                                <tr class="opened">
                                    <td class="day_label">Profile Created by :</td>
                                    <td class="day_value closed"><span>Self</span></td>
                                </tr>
                                <tr class="opened">
                                    <td class="day_label">Drink :</td>
                                    <td class="day_value closed"><span>No</span></td>
                                </tr>
                            </tbody>
                          </table>
                         </div>
                         <div class="col-md-6 basic_1-left">
                          <table class="table_working_hours">
                            <tbody>
                                <tr class="opened_1">
                                    <td class="day_label">Age :</td>
                                    <td class="day_value">28 Yrs</td>
                                </tr>
                                <tr class="opened">
                                    <td class="day_label">Mother Tongue :</td>
                                    <td class="day_value">Hindi</td>
                                </tr>
                                <tr class="opened">
                                    <td class="day_label">Complexion :</td>
                                    <td class="day_value"><?php if($customer->complextion==''){
                                            echo "Not Mentioned";
                                        }else{
                                             echo $customer->complextion;   
                                        }?></td>
                                </tr>
                                <tr class="opened">
                                    <td class="day_label">Weight :</td>
                                    <td class="day_value">45</td>
                                </tr>
                                <tr class="opened">
                                    <td class="day_label">Blood Group :</td>
                                    <td class="day_value"><?php if($customer->blood_group==''){
                                            echo "Not Mentioned";
                                        }else{
                                             echo $customer->blood_group;   
                                        }?>    
                                    </td>
                                </tr>
                                <tr class="closed">
                                    <td class="day_label">Diet :</td>
                                    <td class="day_value closed"><span><?php if($customer->diet==''){
                                            echo "Not Mentioned";
                                        }else{
                                             echo $customer->diet;   
                                        }?></span></td>
                                </tr>
                                <tr class="closed">
                                    <td class="day_label">Smoke :</td>
                                    <td class="day_value closed"><span>No</span></td>
                                </tr>
                            </tbody>
                        </table>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                    <div class="basic_1">
                        <h3>Religious / Social & Astro Background</h3>
                        <div class="col-md-6 basic_1-left">
                          <table class="table_working_hours">
                            <tbody>
                                <tr class="opened">
                                    <td class="day_label">Time of Birth :</td>
                                    <td class="day_value">
                                        <?php if($customer->birthtime==''){
                                            echo "Not Mentioned";
                                        }else{
                                             echo $customer->birthtime;   
                                        }?>
                                    </td>
                                </tr>
                                <tr class="opened">
                                    <td class="day_label">Caste :</td>
                                    <td class="day_value">
                                    <?php if($customer->caste==''){
                                            echo "Not Mentioned";
                                        }else{
                                             echo $customer->caste;   
                                        }?></td>
                                </tr>
                                <tr class="opened">
                                    <td class="day_label">Date of Birth :</td>
                                    <td class="day_value closed"><span>
                                    <?php if($customer->date_of_birth==''){
                                            echo "Not Mentioned";
                                        }else{
                                             echo $customer->date_of_birth;   
                                        }?>
                                    </span></td>
                                </tr>
                                <tr class="opened">
                                    <td class="day_label">Place of Birth :</td>
                                    <td class="day_value closed"><span>
                                    <?php if($customer->birthplace==''){
                                            echo "Not Mentioned";
                                        }else{
                                             echo $customer->birthplace;   
                                        }?>
                                            
                                        </span></td>
                                </tr>
                                <tr class="opened">
                                    <td class="day_label">Charan :</td>
                                    <td class="day_value closed"><span>
                                    <?php if($customer->charan==''){
                                            echo "Not Mentioned";
                                        }else{
                                             echo $customer->charan;   
                                        }?>
                                            
                                        </span></td>
                                </tr>
                                <tr class="opened">
                                    <td class="day_label">Nadi :</td>
                                    <td class="day_value closed"><span>
                                    <?php if($customer->nadi==''){
                                            echo "Not Mentioned";
                                        }else{
                                             echo $customer->nadi;   
                                        }?>
                                            
                                        </span></td>
                                </tr>
                             </tbody>
                          </table>
                         </div>
                         <div class="col-md-6 basic_1-left">
                          <table class="table_working_hours">
                            <tbody>
                                <tr class="opened_1">
                                    <td class="day_label">Religion :</td>
                                    <td class="day_value">
                                    <?php if($customer->religion==''){
                                            echo "Not Mentioned";
                                        }else{
                                             echo $customer->religion;   
                                        }?>
                                    </td>
                                </tr>
                                <tr class="opened">
                                    <td class="day_label">Sub Caste :</td>
                                    <td class="day_value">
                                    <?php if($customer->sub_caste==''){
                                            echo "Not Mentioned";
                                        }else{
                                             echo $customer->sub_caste;   
                                        }?></td>
                                </tr>
                                <tr class="opened">
                                    <td class="day_label">Rashi :</td>
                                    <td class="day_value"><?php if($customer->rashi==''){
                                            echo "Not Mentioned";
                                        }else{
                                             echo $customer->rashi;   
                                        }?></td>
                                </tr>
                                <tr class="opened">
                                    <td class="day_label">Nakshtra :</td>
                                    <td class="day_value"><?php if($customer->nakshatra==''){
                                            echo "Not Mentioned";
                                        }else{
                                             echo $customer->nakshatra;   
                                        }?></td>
                                </tr>
                                <tr class="opened">
                                    <td class="day_label">Gan :</td>
                                    <td class="day_value"><?php if($customer->gan==''){
                                            echo "Not Mentioned";
                                        }else{
                                             echo $customer->gan;   
                                        }?></td>
                                </tr>
                                <tr class="opened">
                                    <td class="day_label">Gotra :</td>
                                    <td class="day_value"><?php if($customer->gotra==''){
                                            echo "Not Mentioned";
                                        }else{
                                             echo $customer->gotra;   
                                        }?></td>
                                </tr>
                            </tbody>
                        </table>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                    <div class="basic_1 basic_2">
                        <h3>Education & Career</h3>
                        <div class="basic_1-left">
                          <table class="table_working_hours">
                            <tbody>
                                <tr class="opened">
                                    <td class="day_label">Education   :</td>
                                    <td class="day_value">
                                    <?php if($customer->education==''){
                                            echo "Not Mentioned";
                                        }else{
                                             echo $customer->education;   
                                        }?>
                                
                                        </td>
                                </tr>
                                <tr class="opened">
                                    <td class="day_label">Education Detail :</td>
                                    <td class="day_value">Software Engineer</td>
                                </tr>
                                <tr class="opened">

                                    <td class="day_label">Occupation Detail :</td>
                                    <td class="day_value closed"><?php if($customer->occupation==''){
                                            echo "Not Mentioned";
                                        }else{
                                             echo $customer->occupation;   
                                        }?></td>
                                </tr>

                                <tr class="opened">
                                    <td class="day_label">Annual Income :</td>
                                    <td class="day_value closed"><?php if($customer->income==''){
                                            echo "Not Mentioned";
                                        }else{
                                             echo $customer->income;   
                                        }?></td>
                                </tr>
                             </tbody>
                          </table>
                         </div>
                         <div class="clearfix"> </div>
                    </div>
                  </div>
                  <div role="tabpanel" class="tab-pane fade" id="profile" aria-labelledby="profile-tab">
                    <div class="basic_3">
                        <h4>Family Details</h4>
                        <div class="basic_1 basic_2">
                        <h3>Basics</h3>
                        <div class="col-md-6 basic_1-left">
                          <table class="table_working_hours">
                            <tbody>
                                <tr class="opened">
                                    <td class="day_label">Father's Occupation :</td>
                                    <td class="day_value">Not Specified</td>
                                </tr>
                                <tr class="opened">
                                    <td class="day_label">Mother's Occupation :</td>
                                    <td class="day_value">Not Specified</td>
                                </tr>
                                <tr class="opened">
                                    <td class="day_label">No. of Brothers :</td>
                                    <td class="day_value closed"><span>Not Specified</span></td>
                                </tr>
                                <tr class="opened">
                                    <td class="day_label">No. of Sisters :</td>
                                    <td class="day_value closed"><span>Not Specified</span></td>
                                </tr>
                             </tbody>
                          </table>
                         </div>
                       </div>
                    </div>
                 </div>
                 <div role="tabpanel" class="tab-pane fade" id="profile1" aria-labelledby="profile-tab1">
                    <div class="basic_1 basic_2">
                       <div class="basic_1-left">
                          <table class="table_working_hours">
                            <tbody>
                            
                                <tr class="opened">
                                    <td class="day_label">Age   :</td>
                                    <td class="day_value">
                                    <?php            
                                    if($customer->expected_min_age =="" && $customer->expected_max_age ==""){
                                        echo "Not Mentioned";
                                    }else{
                                        echo $customer->expected_min_age.' To '.$customer->expected_max_age;    
                                    }
                                    ?>
                                    </td>
                                </tr>
                                <tr class="opened">
                                    <td class="day_label">Height :</td>
                                    <td class="day_value closed"> 
                                    <?php            
                                    if($customer->expected_min_height =="" && $customer->expected_max_height ==""){
                                        echo "Not Mentioned";
                                    }else{
                                        echo $customer->expected_min_height.' To '.$customer->expected_max_height;    
                                    }
                                    ?></td>
                                </tr>
                                <tr class="opened">
                                    <td class="day_label">Caste :</td>
                                    <td class="day_value closed"><?php            
                                    if($customer->expected_caste =="" && $customer->expected_caste ==""){
                                        echo "Not Mentioned";
                                    }else{
                                        echo $customer->expected_caste.' To '.$customer->expected_caste;    
                                    }
                                    ?></td>
                                </tr>
                                <tr class="opened">
                                    <td class="day_label">Education :</td>
                                    <td class="day_value closed"><?php            
                                    if($customer->expected_education =="" && $customer->expected_education ==""){
                                        echo "Not Mentioned";
                                    }else{
                                        echo $customer->expected_education.' To '.$customer->expected_education;    
                                    }
                                    ?></td>
                                </tr>
                                <tr class="opened">
                                    <td class="day_label">Occupation :</td>
                                    <td class="day_value closed">
                                    <?php            
                                    if($customer->expected_occupation =="" && $customer->expected_occupation ==""){
                                        echo "Not Mentioned";
                                    }else{
                                        echo $customer->expected_occupation.' To '.$customer->expected_occupation;    
                                    }
                                    ?></td>
                                </tr>
                             </tbody>
                          </table>
                        </div>
                     </div>
                 </div>
             </div>
                 <div class="form-group">
        <a class="btn btn-primary btn_1" href="<?php echo Url::toRoute('profile/update')."&id=".$customer->id;?>">Update</a>
    </div>
          </div>
       </div>
     </div>
     
       <div class="clearfix"> </div>
    </div>
  </div>
</div>
</div>
<script type="text/javascript">
$(window).load(function() {
  $('.flexslider').flexslider({
    animation: "slide",
    controlNav: "thumbnails"
  });
});    
</script>
