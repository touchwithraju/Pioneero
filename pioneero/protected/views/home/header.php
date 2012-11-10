<!--start navbar div-->
<div class="navbar header">

	<!--Start:navbar inner div-->
	<div class="navbar-inner">
    
    	<div class="container">
          <div class="hdr_ca">
        	<a href="<?php echo Yii::app()->createAbsoluteUrl('home');?>" class="fl logo"><img src="<?php echo Yii::app()->request->baseUrl; ?>/public/css/images/logo.png" alt="Pioneer"  /></a>
            <a href="<?php echo Yii::app()->createAbsoluteUrl('home/aboutus');?>" class="fl c95 list_about <?php if(isset($class))echo $class;?>">About</a>
            
           <!-- <div class="search fl">
            	<div class="left_search"></div>
                <input type="text" value="" name="text" class="input input_search" />
                <div class="right_search"></div>
             </div>-->
             
             <?php if($login == 1){ ?>
               <ul class="fr navigation mt10">
                    <li class="first">
                    	<a href="#" id="register">Register</a>
                        
                           <ul class="dropdown-menu menu_register" id="dropdown_register">
                              <li>
                                <form id="register_form" class="register_form" method="post" action="">
                                    <ul class="drop_ul">
                                        <li class="drop_hdr c_white f12"><span>Please enter your school email address:</span></li>
                                        <li class="li_first pos_rel"><span class="input_label">Email</span><input type="text" class="register_email text" id="register_email" name="register_email"/><span class="clear_search">&nbsp;</span></li>
                                        <li class="btn">
                                        	<a id="not_student" class="not_college btn_submit">I'm not in college though!</a>
                                            <input type="button" class="btn_submit btn_login" id="go_submit" value="Go!" />
                                         </li>
                                    </ul>
                                </form>	
                               </li>   
                            </ul>

                    </li>
                    <li class="line">&nbsp;</li>
                    <li>
                        <a href="#" class="login" id="login">Login</a>
                        
                            <ul class="dropdown-menu" id="dropdown_login">

                              <li>
                              	<form method="post" action="<?php echo Yii::app()->createAbsoluteUrl('home/login');?>" class="login_form" id="login_form">
                              	<ul class="drop_ul">
                                  <li class="drop_hdr c_white f14"><span>Welcome Pioneer!</span></li>
                                  <li class="pos_rel li_first"><label><span class="input_label">Email</span><input type="text" name="email" class="text" id="email" /><span class="clear_search hide">&nbsp;</span></label></li>
                                  <li class="pos_rel"><label><span class="input_label">Password</span><input type="password" name="password" class="text" id="password" /><span class="clear_search">&nbsp;</span></label></li>
                                  <li class="forgot"><a href="<?php echo Yii::app()->createAbsoluteUrl('home/forgotpassword');?>" id="forgot_pwd" class="forgot_pwd btn_submit">Forgot my password</a>
                                      <input type="submit" name="login" value="Login!" id="login_submit" class="btn_submit btn_login" /></li>

                                 </ul> 
                                 </form>
                               </li>   
                            </ul>
                        </li>
               </ul>
               
              <?php } elseif($login == 2){ ?> 
             <ul class="fr navigation mt8 mr20">
                    <li class="first"><a href="#">Stephen Foung</a></li>
                    <li class="line">&nbsp;</li>
                    <li class="create"><a href="#" id="">Create!</a></li>
                    <li class="line">&nbsp;</li>
                    <li><a href="#" class="message" id="message">Message</a></li>
             </ul>
             <?php }else{} ?>
			
            </div> <!--hdr_ca-->   
        </div>
        
    </div>
	<!--end:navbar inner div-->
</div>
<!--end navbar div-->
<div id="confirm_dialog" title="Dialog Title">
	<p>You should receive a confirmation soon</p>
    <p>Please follow the link in the email to activate your account</p>
    <input type="submit" value="Resend Email" id="resend_email" class="buttons"/>
</div>
 
<div id="sorry_dialog" title="sorry Title">
	<p>We're sorry!</p>
	<p>Pioneero is only for college students and those in the college community at this time.</p>
	<p>We hope to open Pioneero to the general public soon as we continue to grow.</p>
	<p>Please join the signup list to get updates and be among the first to join our network as we expand!</p>
    
    <div class="join_ca">
    <form action="" method="" id="join_form">
        	<div class="input_fld">
                <label class="pos_rel long_label">
                    <span class="input_label">email</span>	
                    <input type="text" class="input_long text" id="join_fld" name="join_email" />
                </label>
            </div>
        	<div class="button_fld"> <input type="submit" value="Join!" id="join" class="buttons"/></div>
    </form>
    </div>
</div>

<!--<div id="forgot_dialog" class="forgot_dialog" title="Dialog Title">
	<p>Please enter your email address:</p>
	    <form action="" method="" id="forgot_form">
        	<div class="input_fld">
                <label class="pos_rel long_label">
                    <span class="input_label">email</span>	
                    <input type="text" class="forgot_email input_long text blur" id="forgot_email" name="forgot_email">
                </label>
            </div>
        	<div class="button_fld"> <input type="submit" value="Submit" id="forgot_submit" class="buttons"></div>
    </form>
</div>
-->
<script>
$( "#confirm_dialog" ).dialog({ autoOpen: false });
$( "#sorry_dialog" ).dialog({ autoOpen: false });
//$( "#forgot_dialog" ).dialog({ autoOpen: false });
</script>

