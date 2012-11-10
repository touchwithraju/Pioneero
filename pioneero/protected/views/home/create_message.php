<?php $title= "Pioneero"; include("links.php") ?>

<body class="pio">

<?php $login= "2"; include("header.php") ?>

<!--start middle nav list-->
<div class="middle_ca pos_rel">

	<!--Start:	sub header-->
    <div class="sub_hdr h40 bg_green">
    	<div class="container">
        	<?php $tiles = array( "left_tiles" => array("Start ups","Music","Film","ideas","People"),
								  "right_tiles" => array("babson","global")
								); ?>
        	<ul class="left_tiles fl">
            	<?php for($i=0; $i<count($tiles['left_tiles']); $i++) {?>
    	        	<li class="<?php if($i < count($tiles['left_tiles'])-1){ echo 'bdr'; } ?>"><a href="#"><?php echo $tiles['left_tiles'][$i]; ?></a></li>
                <?php } ?>
            </ul>
            
            <ul class="navigation fr mr20">
            	<?php for($i=0; $i<count($tiles['right_tiles']); $i++) {?>
    	        	<li class="<?php if($i < count($tiles['right_tiles'])-1){ echo 'bdr'; } ?>"><a href="#"><?php echo $tiles['right_tiles'][$i]; ?></a></li>
                <?php } ?>
            </ul>
            
            <div class="cl"></div>
    	</div>
    </div>

	<!-- End: sub header-->
   	
	<!--    start col ca-->
    <div class="col_ca">		
    
    <div class="container">
    	<div class="tiles_list">
        	<h1 class="fl tiles_hdr">Hot</h1>
            <div class="fr">
            	<a class="see_more" href="#">See more</a>
                
               <!-- <a class="left_arrow" href="#">left</a>
                <a class="right_arrow" href="#">right</a>-->
            </div>
            <div class="cl">&nbsp;</div>
        </div>
    </div>
		
 	<div class="container">
      <ul id="mycarousel" class="jcarousel-skin-tango container solutions tiles_ca">
        
            <li class="span-6 col c_green first">
            	<div class="slide_inner">
                	<img src="public/css/images/game.png"  alt="Game"/>
                    <div class="slide_txt">Project Name</div>
                </div>
            </li>
            <li class="span-6 c_green col">
            	<div class="slide_inner">
                	<img src="public/css/images/music.png"  alt="Music"/>
                    <div class="slide_txt">Project Name</div>
                </div>
            </li>
            <li class="span-6 c_green col">
            	<div class="slide_inner">
                	<img src="public/css/images/vision.png"  alt="Vision"/>
                    <div class="slide_txt">Project Name</div>
                </div>
            </li>
            <li class="span-6 c_green col last">
            	<div class="slide_inner">
                	<img src="public/css/images/vision.png"  alt="Vision"/>
                    <div class="slide_txt">Project Name</div>
                </div>
            </li>
            
            <li class="span-6 col c_green first">
            	<div class="slide_inner">
                	<img src="public/css/images/game.png"  alt="Game"/>
                    <div class="slide_txt">Project Name</div>
                </div>
            </li>
            <li class="span-6 c_green col">
            	<div class="slide_inner">
                	<img src="public/css/images/music.png"  alt="Music"/>
                    <div class="slide_txt">Project Name</div>
                </div>
            </li>
            <li class="span-6 c_green col">
            	<div class="slide_inner">
                	<img src="public/css/images/vision.png"  alt="Vision"/>
                    <div class="slide_txt">Project Name</div>
                </div>
            </li>
            
            <li class="span-6 col c_green first">
            	<div class="slide_inner">
                	<img src="public/css/images/game.png"  alt="Game"/>
                    <div class="slide_txt">Project Name</div>
                </div>
            </li>
            <li class="span-6 c_green col">
            	<div class="slide_inner">
                	<img src="public/css/images/music.png"  alt="Music"/>
                    <div class="slide_txt">Project Name</div>
                </div>
            </li>
            <li class="span-6 c_green col">
            	<div class="slide_inner">
                	<img src="public/css/images/vision.png"  alt="Vision"/>
                    <div class="slide_txt">Project Name</div>
                </div>
            </li>
            
            <li class="span-6 col c_green first">
            	<div class="slide_inner">
                	<img src="public/css/images/game.png"  alt="Game"/>
                    <div class="slide_txt">Project Name</div>
                </div>
            </li>
            <li class="span-6 c_green col">
            	<div class="slide_inner">
                	<img src="public/css/images/music.png"  alt="Music"/>
                    <div class="slide_txt">Project Name</div>
                </div>
            </li>
            <li class="span-6 c_green col">
            	<div class="slide_inner">
                	<img src="public/css/images/vision.png"  alt="Vision"/>
                    <div class="slide_txt">Project Name</div>
                </div>
            </li>
        </ul>
		</div>
   </div> 
   <!--end col ca-->

	<!--    start col2 ca-->
    <div class="col_ca alt">		
    
    <div class="container">
    	<div class="tiles_list">
        	<h1 class="fl tiles_hdr">Recent</h1>
            <div class="fr">
            	<a class="see_more" href="#">See more</a>
                
           <!--     <a class="left_arrow" href="#">left</a>
                <a class="right_arrow" href="#">right</a>-->
            </div>
            <div class="cl">&nbsp;</div>
        </div>
    </div>
		
 	<div class="container">
      <ul id="mycarousel2" class="jcarousel-skin-tango container solutions tiles_ca">
        
            <li class="span-6 col c_green first">
            	<div class="slide_inner">
                	<img src="public/css/images/game.png"  alt="Game"/>
                    <div class="slide_txt">Project Name</div>
                </div>
            </li>
            <li class="span-6 c_green col">
            	<div class="slide_inner">
                	<img src="public/css/images/music.png"  alt="Music"/>
                    <div class="slide_txt">Project Name</div>
                </div>
            </li>
            <li class="span-6 c_green col">
            	<div class="slide_inner">
                	<img src="public/css/images/vision.png"  alt="Vision"/>
                    <div class="slide_txt">Project Name</div>
                </div>
            </li>
            <li class="span-6 c_green col last">
            	<div class="slide_inner">
                	<img src="public/css/images/vision.png"  alt="Vision"/>
                    <div class="slide_txt">Project Name</div>
                </div>
            </li>
            
            <li class="span-6 col c_green first">
            	<div class="slide_inner">
                	<img src="public/css/images/game.png"  alt="Game"/>
                    <div class="slide_txt">Project Name</div>
                </div>
            </li>
            <li class="span-6 c_green col">
            	<div class="slide_inner">
                	<img src="public/css/images/music.png"  alt="Music"/>
                    <div class="slide_txt">Project Name</div>
                </div>
            </li>
            <li class="span-6 c_green col">
            	<div class="slide_inner">
                	<img src="public/css/images/vision.png"  alt="Vision"/>
                    <div class="slide_txt">Project Name</div>
                </div>
            </li>
            
            <li class="span-6 col c_green first">
            	<div class="slide_inner">
                	<img src="public/css/images/game.png"  alt="Game"/>
                    <div class="slide_txt">Project Name</div>
                </div>
            </li>
            <li class="span-6 c_green col">
            	<div class="slide_inner">
                	<img src="public/css/images/music.png"  alt="Music"/>
                    <div class="slide_txt">Project Name</div>
                </div>
            </li>
            <li class="span-6 c_green col">
            	<div class="slide_inner">
                	<img src="public/css/images/vision.png"  alt="Vision"/>
                    <div class="slide_txt">Project Name</div>
                </div>
            </li>
            
            <li class="span-6 col c_green first">
            	<div class="slide_inner">
                	<img src="public/css/images/game.png"  alt="Game"/>
                    <div class="slide_txt">Project Name</div>
                </div>
            </li>
            <li class="span-6 c_green col">
            	<div class="slide_inner">
                	<img src="public/css/images/music.png"  alt="Music"/>
                    <div class="slide_txt">Project Name</div>
                </div>
            </li>
            <li class="span-6 c_green col">
            	<div class="slide_inner">
                	<img src="public/css/images/vision.png"  alt="Vision"/>
                    <div class="slide_txt">Project Name</div>
                </div>
            </li>
        </ul>
		</div>
   </div> 
   <!--end col2 ca-->

	


    
</div>
<!--end middle nav list-->
<!--Start: footer nav list-->
<div class="footer">
	
</div>
<!--end: footer nav list-->

</body>
</html>
