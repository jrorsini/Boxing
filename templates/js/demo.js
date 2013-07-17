/*
***************************************
	DETECTIONS DU FORMAT DES CHAMPS
***************************************
*/

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

/*
***************************************
	POP UP POUR LA CONNEXION ET L'INSCRIPTION
***************************************
*/

	$("#connect").click(function(){
		if($(".login").is(":hidden")){
			$(".login").fadeIn(200);
		}else{
			$(".login").fadeOut(200);
		}
	});
	$("#subscribe").click(function(){
		if($(".subscribe").is(":hidden")){
			$(".subscribe").fadeIn(200);
		}else{
			$(".subscribe").fadeOut(200);
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

/*
***************************************
	MOTEUR DE RECHERCHE POUR LES BOXEURS
***************************************
*/

var currentSelection = 0;
var currentUrl = '';

function setSelected(result_item) {
	$(".result ul li a").removeClass("itemhover");
	$(".result ul li a").eq(result_item).addClass("itemhover");
	currentUrl = $(".result ul li a").eq(result_item).attr("href");
}

function navigate(direction) {
	if($(".result ul li .itemhover").size() === 0) {
		currentSelection = -1;
	}

	if(direction === 'up' && currentSelection !== -1) {
		if(currentSelection !== 0) {
			currentSelection--;
		}
	} else if (direction === 'down') {
		if(currentSelection !== $(".result ul li").size() -1) {
			currentSelection++;
		}
	}
	setSelected(currentSelection);
}

google.setOnLoadCallback(function()
{
	$(document).keypress(function(e) {
		switch(e.keyCode) {
			case 38:
				navigate('up');
			break;
			case 40:
				navigate('down');
			break;
			case 13:
				if(currentUrl !== '') {
					window.location = currentUrl;
				}
			break;
		}
	});
	
	for(var i = 0; i < $(".result ul li a").size(); i++) {
		$(".result ul li a").eq(i).data("number", i);
	}
	
	$(".result ul li a").hover(
		function () {
			currentSelection = $(this).data("number");
			setSelected(currentSelection);
		}, function() {
			$(".result ul li a").removeClass("itemhover");
			currentUrl = '';
		}
	);
});

$(document).keydown(function(e){

    //jump from search field to search results on keydown
    if (e.keyCode === 40) {
        $(".boxer_search, .fight_search").blur();
          return false;
    }

    //hide search results on ESC
    if (e.keyCode === 27) {
        $(".results").hide();
        $(".result ul").blur();
          return false;
    }

    //focus on search field on back arrow or backspace press
    if (e.keyCode === 37 || e.keyCode === 8) {
        $(".boxer_search, .fight_search").focus();
    }
    $("body").click(function() {
        $(".result ul").hide();
    });
});

/*
****************************************
    RECHERCHE EN AJAX DU BOXEUR
****************************************
*/
$(document).ready(function(){
	$(".boxer_search").keyup(function(){
		var recherche = $(".search_boxer input").val();
		var data = 'motclef=' + recherche;
		if (recherche.length>0){
			$.ajax({
				type : "GET",
				url : "boxer_results.php",
				data : data,
				success: function(server_response){
					$(".result ul").html(server_response).show();
				}
			});
		}
	});
});

/*
****************************************
    RECHERCHE EN AJAX DU BOXEUR
****************************************
*/
$(document).ready(function(){
	$(".search_fight").keyup(function(){
		var recherche = $(".search_fight input").val();
		var data = 'motclef=' + recherche;
		if (recherche.length>0){
			$.ajax({
				type : "GET",
				url : "fight_results.php",
				data : data,
				success: function(server_response){
					$(".result ul").html(server_response).show();
				}
			});
		}
	});
});