<?php $title= "Pioneero";
  $this->renderPartial("links",array('title'=>$title)); ?>

<body class="pio">

<?php $login= "1"; $this->renderPartial("header",array('login'=>$login)); ?>

<!--start middle nav list-->
<div class="middle_ca pos_rel">
<?php if(Yii::app()->user->hasFlash('register')):?>
    <div class="info">
        <?php echo Yii::app()->user->getFlash('register'); ?>
    </div>
<?php endif; ?>

	<div class="container register_ca">
		<div class="w560 box"> 
    	<div class="reg_inner">
        	<h1><span class="main_hdr">login</span></h1>
                  <?php if(Yii::app()->user->hasFlash('login')):?>
    <div class="info error">
        <?php echo Yii::app()->user->getFlash('login'); ?>
    </div>
<?php endif; ?>
			
			<div class="left_ca fl">
           <form method="post" action="<?php echo Yii::app()->createAbsoluteUrl('home/login');?>" class="login_form" id="login_form">
	           	<ul>
                  <li class="drop_hdr f14"><span>Welcome Pioneer!</span></li>
                  <li><label>Email</label><input type="text"  name="email" class="input_long text" id="firstname"></li>
                  <li><label>Password</label><input type="password" name="password" class="input_long text" id="password" /></li>	  
				
                  <li class="tr"><input type="submit" name="login" value="Login!" id="login_submit" class="buttons" /></li>
               </ul> 
            </form>
        	</div>
            
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
