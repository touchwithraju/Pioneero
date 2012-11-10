<?php $title= "Pioneero";
if(Yii::app()->user->hasFlash('register_values')){
    $flash_values=Yii::app()->user->getFlash('register_values');
    
}

  $this->renderPartial("links",array('title'=>$title)); ?>

<body class="pio">

<?php $login= "1"; $this->renderPartial("header",array('login'=>$login)); ?>

<!--start middle nav list-->
<div class="middle_ca pos_rel">

	<!--Start:	sub header-->
 <!--   <div class="sub_hdr h40 bg_green">
    	<div class="container">
        	<ul class="left_tiles fl">
				<li><a href="#">Register</a></li>            	
            </ul>
            
            <div class="cl"></div>
    	</div>
    </div>-->
	<!-- End: sub header-->
	<div class="container register_ca">
		<div class="w560 box"> 
    	<div class="reg_inner">
        	<h1><span class="main_hdr">register</span></h1>	
	        <div>your main interest?</div>

                <?php if(Yii::app()->user->hasFlash('register')):?>
    <div class="info success">
        <?php echo Yii::app()->user->getFlash('register'); ?>
    </div>
<?php endif; ?>

                <?php if(Yii::app()->user->hasFlash('register_error')):?>
    <div class="info error">
        <?php echo Yii::app()->user->getFlash('register_error'); ?>
    </div>
<?php endif; ?>

        	<div class="left_ca fl">
				<form class="music_form" id="music_form" method="post" action="<?php echo Yii::app()->createAbsoluteUrl('home/register');?>">
                <div class="tabs">
                    <ul class="navlist">
                        <li class="hide"><input type="hidden" name="interest" value="<?php echo isset($flash_values['interest'])?$flash_values['interest']:'2';?>" /></li>
                        <li class="first"> <a rel="1" class="<?php echo isset($flash_values['interest']) && ($flash_values['interest']==1) ?'active':'';?>" >Start Ups</a></li>
                        <li><a class="<?php echo isset($flash_values['interest'])?(($flash_values['interest']==2)?'active':''):'active';?>" rel="2">Music</a></li>
                        <li class="last"><a rel="3" class="<?php echo isset($flash_values['interest']) && ($flash_values['interest']==3) ?'active':'';?>" >Film</a></li>
                    </ul>
					<div class="clear">&nbsp;</div>
                    <div id="second" class="second">
                       
                       <ul>
                 
                        <li><label for="firstname">First Name</label><input type="text" value="<?php echo isset($flash_values['firstname'])?$flash_values['firstname']:'';?>" name="firstname" class="input_long text" id="firstname" /></li>
                        <li><label for="secondname">Last Name</label><input type="text" value="<?php echo isset($flash_values['secondname'])?$flash_values['secondname']:'';?>" name="secondname" class="input_long text" id="secondname" /></li>
                        <li><label for="loc">Location(Zip Code)</label><input type="text" value="<?php echo isset($flash_values['loc'])?$flash_values['loc']:'';?>" name="loc" class="input_long text" id="loc" /></li>
                        <li><label for="primary_email">Email Address</label><input type="text" value="" name="primary_email" class="input_long text" id="primary_email" /></li>

                        <li><label for="register_password">Pick Password</label><input type="password" name="register_password" class="input_long text" id="register_password" /></li>

                        <li><label for="password_again">Confirm Password</label><input type="password" name="password_again" class="input_long text" id="password_again" /></li>
                        <li class="tr"><input type="submit" name="register" value="Go" class="buttons go" /></li>
                       </ul>

                    </div>
                </div>
              </form>
            </div> <!--left_ca-->
            <div class="right_ca fl">
            	<!--<div class="right_txt">or connect with Facebook, LinedIn, or Google:</div>-->
            </div> <!-- right_ca-->
            <div class="cl"></div>

        </div> <!--reg_inner div-->
		</div>  <!--div with w560 width-->
    </div>
    	    
</div>
<!--end middle nav list-->
<!--Start: footer nav list-->
<div class="footer">
	
</div>
<!--end: footer nav list-->

</body>
</html>
