
$.extend({
	clearinput: function(id){

		$(id).live("focus",function(){
			if($(this).val()==$(this).attr("title")){
				 $(this).val("").removeClass("blur");
			}
		});
		$(id).live("blur",function(){
           if($(this).val()==$(this).attr("title")|| $.trim($(this).val())==""){
               $(this).val($(this).attr("title")).addClass("blur");
            }
		});
	},
	
	placeholder: function(id){
		$(id).live("keydown",function(){
				if($.trim($(this).val())==""){
					$(this).prev().hide();		
					$(".clear_search").show();
				}
		});
		$(id).live("blur",function(){
				if($.trim($(this).val())==""){							
					$(this).prev().show();
					$(".clear_search").hide();
				}
		});
	},
	
	crossBrowser: function(){
					/****CROSS PLATFORM****/
			if(navigator.platform.toLowerCase().indexOf("mac")>=0){
				$(".pio").addClass("mac");
				$("html").addClass("mac");
			}else if(navigator.platform.toLowerCase().indexOf("win")>=0){
				$(".pio").addClass("win");
			}
			
			/****NAVIGATOR****/
			var nav = navigator.userAgent.toLowerCase();
			if(nav.indexOf("msie")>=0){
				$(".pio").addClass("ie");
				if($.browser.version<8){
					$(".pio").addClass("old");
				}
			}
			if(nav.indexOf("firefox")>=0) $(".pio").addClass("ff");
			if(nav.indexOf("safari")>=0){
				$(".pio").addClass("wk");
				if(nav.indexOf("chrome")>=0){
					$(".pio").addClass("ch");
				}else{
					$(".pio").addClass("sf");
				}
			}
			if(nav.indexOf("ipad")>=0) {
				$(".pio").addClass("ios");
			}
			if(nav.indexOf("iphone")>=0) $(".pio").addClass("sf");
			
	},
	
	clearSearch : function(){
				
	}

});