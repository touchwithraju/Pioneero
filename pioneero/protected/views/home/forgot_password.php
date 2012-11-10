<?php $title= "Pioneero";
  $this->renderPartial("links",array('title'=>$title)); ?>

<body class="pio">

<?php $login= "3"; $this->renderPartial("header",array('login'=>$login)); ?>

<!--start middle nav list-->
<div class="middle_ca pos_rel">



	<!--Start:	sub header-->
    <div class="sub_hdr h40 bg_green">
    	<div class="container">
        	<ul class="left_tiles fl">
				<li><a href="#">Forgot Password</a></li>            	
            </ul>
            
            <div class="cl"></div>
    	</div>
    </div>
	<!-- End: sub header-->
	<div class="container w275 register_ca">
    	<?php if(Yii::app()->user->hasFlash('forgot_success')):?>
        <div class="info success">
        <?php echo Yii::app()->user->getFlash('forgot_success'); ?>
        </div>
        <?php endif; ?>
    
        <?php if(Yii::app()->user->hasFlash('forgot_failure')):?>
        <div class="info error">
            <?php echo Yii::app()->user->getFlash('forgot_failure'); ?>
        </div>
        <?php endif; ?>

    	<form id="forgot_form" class="forgot_form" method="post" action="<?php echo Yii::app()->createAbsoluteUrl('home/forgotpassword');?>">
    	<ul>
          <li>Please enter your email address:</li>
          <li><input type="text" class="forgot_email input_long text" id="forgot_email" value="email" title="email" name="forgot_email"/></li>
          <li class="btn"><input type="submit" name="forgot" value="Submit" id="forgot_submit" class="buttons" /></a></li>
        </ul>
        </form>
    </div>
    	    
</div>
<!--end middle nav list-->
<!--Start: footer nav list-->
<div class="footer">
	
</div>
<!--end: footer nav list-->

</body>
</html>
