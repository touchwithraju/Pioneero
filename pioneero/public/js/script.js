
$(function(){

	$.crossBrowser();
	
	$(".clear_search").prev.val("");	
	
	/*	header login event*/
	$("#login").on("click", function(){
		$.dropdown();
		$.placeholder($("#password, #email"));		
		
		$("#login_submit").on("click", function(){
				$.validateloginform();			
		});
	});	
	
	
	/*	header register event*/
	$.clearinput("#register_email");
	$("#register").on("click", function(){
										
		$.dropdown_register();
		$.placeholder("#register_email");
		
		/*	registration page submit button*/
		$("#go_submit").on("click", function(){
											 
			$.registerform();	// Registration form  										 
			if($("#register_form").valid()){
					
					var register_val = $("#register_email").val();
					var sliceval = register_val.slice(-4);
					if(sliceval == ".edu"){
						$.successalert();
						
						var str = "email="+$("#register_email").val()+"&type=register";
						 $.ajax({
								type: "POST",
								url: join_url,
								dataType: "json",
								data: str,
								beforeSend: function(){
																		
								},
								success: function(dataD){
									$.resendform();
								}
						});
					}
					else{
						$.failurealert();
					}
			}
		});

	});
	
	/* join/sorry form */
	$.placeholder("#join_fld");
	$("#join").on("click", function(){
			$.joinform();
	});
	
	$("#not_student").on("click", function(){
			$("#dropdown_register").slideUp("slow");							   
			$.failurealert();
	});
		
	$.clearinput("#forgot_email");
/*	$.clearinput("#forgot_email");
	$("#forgot_pwd").live("click", function(){
		$("#dropdown_login").slideUp("slow");
		$.forgotpassword();	
	});
*/
	$("#forgot_submit").live("click", function(){
		$.forgotpassword();
	});
	
	
	$.musicform();  //new Registration page music form
	
	$(".navlist li a").live("click", function(){
		$('.navlist .active').removeClass('active');
		$(this).addClass('active');
		$('.navlist input:hidden').val($(this).attr('rel'));
	});
	
	$('#mycarousel').jcarousel({
        visible: 4
    });
	
	$('#mycarousel2').jcarousel({
        visible: 4,
		wrap: 'circular'
    });
	
	$("body.click").live("click", function(){
			$("body").removeClass("click");
			if($("#login").hasClass("act")){
				$("#login").removeClass("act");
				$("#dropdown_login").slideUp("slow");
				$("#register_email").val("");
			}
			if($("#register").hasClass("act")){
				$("#register").removeClass("act");
				$("#dropdown_register").slideUp("slow");
			}						   
	});
	

});
$.extend({
		 
/*	dropdown: function(){

		var dropdown =	$("#dropdown_login"); 
		var dropdown_register = $("#dropdown_register");
		
		$("#login, #register").live("click", function(e){
			$(this).addClass("act");
			$("body").addClass("click");

			if($(this).attr("id")=="login"){
				dropdown.slideDown("slow");
			}
			else{
				dropdown_register.slideDown("slow");
			}
			
		});
		
		$("body.click").live("click", function(){
			$("#login,#register").removeClass("act");											   
			$("body").removeClass("click");		 
			
			dropdown.add(dropdown_register).slideUp("slow");
			
		});
		
		dropdown.live("click", function(e){
			e.stopPropagation();
		});	
		dropdown_register.live("click", function(e){
			e.stopPropagation();
		});
	},*/
	
	dropdown: function(){
		var dropdown =	$("#dropdown_login"); 

		$("#login").live("click", function(e){
			var me = $(this);			

			dropdown.slideDown("slow", function(){
				me.addClass("act");
				$("body").addClass("click");
			});
		});
		
		dropdown.live("click", function(e){
			e.stopPropagation();
		});
	},
	
	dropdown_register: function(){
	
		$(".input_label").show();
		var dropdown_register = $("#dropdown_register");
		
		$("#register").live("click", function(e){
			 var me = $(this);
			dropdown_register.slideDown("slow", function(){
				me.addClass("act");
				$("body").addClass("click");
			});
		});
		
		dropdown_register.live("click", function(e){
			e.stopPropagation();
		});
		
	},
	
	validateloginform: function(){

		$("#login_form").validate({
			errorClass: "error_msg",					  
			rules: {
				email: {
					required: true,
					email: true
				},
				password: "required"
			},
			messages: {
				email: "Email is required",
				password: "Password is mandatory"
			}
		});
	},
	
	registerform: function(){
		$("#register_form").validate({
				errorClass: "error_msg",									 
				rules: {
					register_email: {
						email: true,
						required: true
					}
				},
				messages: {
					register_email: "Email is required"
				},
		});
		
	},
	
	musicform: function(){
		
		$.validator.addMethod("eduEmail", function(value, element) { 
		  return value.slice(-4) == ".edu";
		}, "Please specify the correct domain with edu");
		
		$("#music_form").validate({
				errorClass: "error_msg",	
				rules:{
					firstname: "required",
					secondname: "required",
					primary_email: { 
						email: true,
						required: true,
						eduEmail: true
					},
					register_password: "required",
					"password_again": { 
						  equalTo: "#register_password" 
					}
				},
				messages: {
					firstname: "FirstName is Required",
					secondname: "SecondName is Required",
					primary_email: {
						email: "Please enter valid Email Id",
						required: "Primary Email is mandatory"
					},
					register_password: "Password is mandatory",
					password_again: "Not match with password"
				}					  
		});
/*		var primary_email = $("#primary_email").val();
		if(primary_email.slice("-4")== ".edu"){
			
		}*/
	},
	
	
	 successalert: function(){	
		 $( "#confirm_dialog" ).dialog({
			   autoOpen: true,
			/*	height: 182,*/
				width: 302,
				title: "Confirm",
				modal: true,
				resizable: false,
				dialogClass: "succes_modal",
				closeOnEscape: true,
				draggable: true
			});
	},
	
	failurealert: function(){
  		 	$("#dropdown_register").slideUp("slow");
  		 $("#register_email").val("");
		 $( "#sorry_dialog" ).dialog({
			   autoOpen: true,
/*				height: 312,*/
				width: 362,
				title: "Sorry",
				modal: true,
				resizable: false,
				dialogClass: "sorry_modal",
				closeOnEscape: true,
				draggable: true
			});
	 },
	 
	forgotpassword: function(){
		$("#forgot_form").validate({
			errorClass: "error_msg",
				rules:{
					forgot_email: {
						email: true,
						required: true
					}
				},
				messages: {
					forgot_email: "Please enter emailid"
				}
		})
	},
	/* forgotpassword: function(){
		$.placeholder("#forgot_email");
		$( "#forgot_dialog" ).dialog({
			   autoOpen: true,
				height: 182,
				width: 302,
				title: "Forgot Password",
				modal: true,
				resizable: false,
				dialogClass: "forgot_modal",
				closeOnEscape: true,
				draggable: true
		});
		
		$("#forgot_form").validate({
				errorClass: "error_msg",
				rules:{
					forgot_email: {
						email: true,
						required: true
					}
				},
				messages: {
					forgot_email: "Please enter emailid"
				},
				success: function(){
					var str = "email="+$("#forgot_email").val()+"&type=forgot";
					 $.ajax({
								type: "POST",
								url: fogot_url,
								dataType: "json",
								data:str,
								beforeSend: function(){
																		
								},
								success: function(dataD){
										$(".ui-dialog-titlebar .ui-dialog-titlebar-close").trigger("click");
								}
					});
				}
		});
	},*/
	 
	 forgot_email: function(){
		$("#forgot_form").validate({
				errorClass: "error_msg",
				rules:{
					forgot_email: {
						email: true,
						required: true
					}
				},
				messages: {
					forgot_email: "Please enter emailid"
				},
				success: function(){
					var str = "email="+$("#forgot_email").val()+"&type=forgot";
					 $.ajax({
								type: "POST",
								url: fogot_url,
								dataType: "json",
								data:str,
								beforeSend: function(){
																		
								},
								success: function(dataD){
										$(".ui-dialog-titlebar .ui-dialog-titlebar-close").trigger("click");
								}
					});
				}
		});	
	},
	
	 joinform: function(){
			$("#join_form").validate({
					errorClass: "error_msg",									 
					rules: {
						join_email: {
							email: true,
							required: true
						}
					},
					messages: {
						join_email: "Email is required"
					},
					success: function(){
						
						var str = "email="+$("#join_fld").val()+"&type=join";
						 $.ajax({
									type: "POST",
									url: join_url,
									dataType: "json",
									data:str,
									beforeSend: function(){
																			
									},
									success: function(dataD){
											$(".ui-dialog-titlebar .ui-dialog-titlebar-close").trigger("click");
									}
						});
					}
			});
			
			
	

	},
	
	resendform: function(){
		$("#resend_email").on("click",function(){
			var str = "email="+$("#register_email").val()+"&type=resend";
				 $.ajax({
							type: "POST",
							url: join_url,
							dataType: "json",
							data:str,
							beforeSend: function(){
																	
							},
							success: function(dataD){
								$("#confirm_dialog").html("<p>we will contact soon</p>");
								setTimeout(function(){
									$(".ui-dialog-titlebar .ui-dialog-titlebar-close").trigger("click");
								},10000);
							}
				});
		});
	}
	 
	

});

