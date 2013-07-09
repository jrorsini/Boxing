$(document).ready(function(){
	$("#envoyer").click(function(){
		//valid=true;
		if($("#email").val()===""){
			$('.info_email').css({"opacity":"1"});
			//valid=false;
		}else{
			if(!$("#email").val().match(/^[a-z0-9\-_.]+@[a-z0-9\-_.]+[a-z0-9\-_.]$/i)) {
				$('.info_email').css({"opacity":"1"});
			}else{
				$('.info_email').css({"opacity":"1","right":"23px"});
			}
		}
		if($("#sujet").val()===""){
			$('.info_sujet').css({"opacity":"1"});
			//valid=false;
		}else{
			$('.info_sujet').css({"opacity":"1","right":"23px"});
		}
		if($("#message").val()===""){
			$('.info_message').css({"opacity":"1"});
			//valid=false;
		}else{
			$('.info_message').css({"opacity":"1","right":"23px"});
		}
	});
	$('#email').blur(function(){
		var email = $('#email').val();
		var emailReg = /^([\w-\.]+@([\w]+\.)+[\w]{2,14})?$/;
		if(!emailReg.test(email) ||  email===''){
			_invalid('email');
		}
		else{
			_valid('email');
		}
	});
	$('#sujet').blur(function(){
		var sujet = $('#sujet').val();
		if(sujet.length>0){
			_valid('sujet');
		}
		else{
			_invalid('sujet');
		}
	});
	$('#message').blur(function(){
		var message = $('#message').val();
		if(message.length>0){
			_valid('message');
		}
		else{
			_invalid('message');
		}
	});

	function _valid(name){
		$('.info_'+ name).css({"opacity":"1","right":"23px"});
	}
	function _invalid(name){
		$('.info_'+ name).css({"opacity":"1"});
	}

	$("#connect").click(function(){
		if($(".login").is(":hidden")){
			$(".login").fadeIn(200);
		}else{
			$(".login").fadeOut(200);
		}
	});
	$("#subscribe").click(function(){
		if($(".subscribe").is(":hidden")){
			$(".subscribe").slideDown(200);
		}else{
			$(".subscribe").slideUp(200);
		}
	});

	$(".mobil_btn").click(function(){
		if($(".mobile_device nav").is(":hidden")){
			$(".mobile_device nav").slideDown(200);
		}else{
			$(".mobile_device nav").slideUp(200);
		}
	});
});
