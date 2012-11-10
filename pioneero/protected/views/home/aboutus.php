<?php $title= "Pioneero";

  $this->renderPartial("links",array('title'=>$title)); ?>

<body class="pio">

<?php $login= "1"; $this->renderPartial("header",array('login'=>$login,'class'=>$class)); ?>

<!--start middle nav list-->
<div class="middle_ca pos_rel">

	<div class="container">
	  <div class="box about_box fl">
	    <h1><span class="main_hdr">about</span></h1>
		<h2 class="tac c_blue">This is a place for people who think different</h2>
    	<ul>
	        <li>"Have you ever had a great idea?</li>
            <li>....no wait</li>
            <li>An amazing idea?</li>
            <li>Of course you have... you're only human after all, and the human spirit is an amazing thing indeed. However, where we sometimes come into trouble is communication...creating and maintaining new relationships... making meaningsful connections...</li>
            <li>Amazing ideas that sit idle and isolated from the rest of the human enterprise sadly end up withering away in all too many cases.</li>
            <li class="tac">"To showcase. To connect. To grow"</li>
            <li>These are the goals we hope to achieve for you... the pioneers of the world. We want to showcase everyone. We want to connect everyone. We want to help everyone grow. </li>
            <li>We are The Creative Network.</li>
            <li>Pioneero is a place where you can find like-minded people to connect with and create magnificent things together. Whether you are an artist or an aspiring entrepreneur, there are millions upon millions out there that share your passion....that want to change the world for the better. </li>
			<li>Find one another today and unite. We will help."</li>
        </ul>

        </div>
        <div class="fl side_about">
        	      <div class="sec_inner">
                    <h3>"The Creative Network"</h3>
                    <div class="span12 sec_txt">Pioneero is a place where visionaries and artists come together to change the world</div>
                    <div class="mtb10 tac font_helevetica_bold sec_hdr"><b><i>What's your idea?</i></b></div>
            
                    <div class="solutions">
            
                        <div class="span-6 col first c_green">
                            <div class="slide_inner">
                                <img src="<?php echo Yii::app()->request->baseUrl; ?>/public/css/images/game.png"  alt="Game"/>
                                <div class="slide_txt">Entrepeneurs & Innovators</div>
                            </div>
                        </div>
                        <div class="span-6 col c_orange">
                            <div class="slide_inner">
                                <img src="<?php echo Yii::app()->request->baseUrl; ?>/public/css/images/music.png"  alt="Music"/>
                                <div class="slide_txt">Musicians & Producers</div>
                            </div>
                        </div>
                        <div class="span-6 col c_yellow last">
                            <div class="slide_inner">
                                <img src="<?php echo Yii::app()->request->baseUrl; ?>/public/css/images/vision.png"  alt="Vision"/>
                                <div class="slide_txt">Filmmakers & Photographers</div>
                            </div>
                        </div>
            			<div class="cl"></div>
                    </div>
                   </div> <!--sec_inner div-->

        </div>
    </div>

</div>
<!--end middle nav list-->
<!--Start: footer nav list-->
<div class="footer">

</div>
<!--end: footer nav list-->

</body>
</html>
