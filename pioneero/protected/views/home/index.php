<?php $title= "Pioneero";
  $this->renderPartial("links",array('title'=>$title)); ?>

<body class="pio">

<?php $login= "1"; $this->renderPartial("header",array('login'=>$login)); ?>

<!--start middle nav list-->
<div class="middle_ca pos_rel">
	<div class="pos_rel">
    	<h1 class="hdr_title">&quot; To connect. To Showcase. To Grow &quot;</h1>
		<img class="slide_img" src="<?php echo Yii::app()->request->baseUrl; ?>/public/css/images/slide.png" alt="slide" />
    </div>
    <div class="container section">
      <div class="sec_inner">
    	<h3>"The Creative Network"</h3>
    	<div class="span12 sec_txt">Pioneero is a place where visionaries and artists come together to change the world</div>
        <div class="mtb10 tac font_helevetica_bold sec_hdr"><b><i>What's your idea?</i></b></div>

        <div class="container solutions">

            <div class="span-8 col first c_green">
            	<div class="slide_inner">
                	<img src="<?php echo Yii::app()->request->baseUrl; ?>/public/css/images/game.png"  alt="Game"/>
                    <div class="slide_txt">Entrepeneurs & Innovators</div>
                </div>
            </div>
            <div class="span-8 col c_orange">
            	<div class="slide_inner">
                	<img src="<?php echo Yii::app()->request->baseUrl; ?>/public/css/images/music.png"  alt="Music"/>
                    <div class="slide_txt">Musicians & Producers</div>
                </div>
            </div>
            <div class="span-8 col c_yellow last">
            	<div class="slide_inner">
                	<img src="<?php echo Yii::app()->request->baseUrl; ?>/public/css/images/vision.png"  alt="Vision"/>
                    <div class="slide_txt">Filmmakers & Photographers</div>
                </div>
            </div>
			<div class="cl"></div>
        </div>
       </div> <!--sec_inner div-->
    </div>


	<!--<div class="container middle_slide"><img src="public/css/images/slide.png" alt="slide" /></div>-->
</div>
<!--end middle nav list-->

<!--Start: footer nav list-->
<div class="footer">

</div>
<!--end: footer nav list-->

</body>
</html>
