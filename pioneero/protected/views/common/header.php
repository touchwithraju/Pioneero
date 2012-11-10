<!--start navbar div-->
<div class="navbar header">

	<!--Start:navbar inner div-->
	<div class="navbar-inner">
    
    	<div class="container">
          <div class="hdr_ca">
        	<a href="index.php" class="fl logo"><img src="public/css/images/logo.png" alt="Pioneer"  /></a>
            <a href="aboutus.php" class="fl c95 list_about">About</a>
            
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
                                <form id="register_form" class="register_form" method="" action="">
                                    <ul class="drop_ul">
                                        <li class="drop_hdr c_white f12"><span>Please enter your school email address:</span></li>
                                        <li class="li_first pos_rel"><span class="input_label">email</span><input type="text" class="register_email text" id="register_email" title="email" name="register_email"/></li>
                                        <li class="btn"><a id="not_student" class="not_college btn_submit">I'm not in college though!</a><input type="button" class="btn_submit btn_login" id="go_submit" value="Go!" /></li>
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
                              	<form method="" action="" class="login_form" id="login_form">
                              	<ul class="drop_ul">
                                  <li class="drop_hdr c_white f14"><span>Welcome Pioneer!</span></li>
                                  <li class="pos_rel li_first"><label><span class="input_label">email</span><input type="text" name="email" class="text" id="email" /></label></li>
                                  <li class="pos_rel"><label><span class="input_label">Password</span><input type="password" name="password" class="text" id="password" /></label></li>
                                  <li class="forgot"><a href="forgot_password.php" class="forgot_pwd">Forgot Password?</a></li>
                                  <li class="tr"><input type="submit" value="Login" id="login_submit" class="btn_submit btn_login" /></li>
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
