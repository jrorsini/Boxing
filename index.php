<?php 
if (!empty($_POST)) {
	extract($_POST);
	$valid = true;
	if (empty($sujet)) {
		$valid=false;
	}
	if (!preg_match("/^[a-z0-9\-_.]+@[a-z0-9\-_.]+\.[a-z]{2,3}$/i", $email)) {
		$valid=false;
	}
	if (empty($email)) {
		$valid=false;
	}
	if (empty($message)) {
		$valid=false;
	}
	if ($valid) {
		$to = "jeanroger.orsini@gmail.com";
		$header = "From : <$email>";
		if (mail($to, $sujet, $message, $header)) {
			$erreur = "Votre mail nous est bien parvenu";
			unset($email);
			unset($sujet);
			unset($message);
		}
		else{
			$erreur = "une erreur est survenue et votre mail";
		}
	}
}
?>
<html>
	<head>
		<title>DEVEL</title>
		<link rel="stylesheet" href="css/style.css">
		<link href='http://fonts.googleapis.com/css?family=Alef' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Orienta' rel='stylesheet' type='text/css'>
		<script src="js/jquery.js"></script>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta charset="utf-8">
	</head>
	<body>
		<header>
		<nav>
			<ul class="web_device">
				<li><a href="#">Boxing<em class="color_gold">Senior</em>.com</a></li>
				<li><a href="#" class="border_gold">Boxeurs</a><span class="bg_gold"></span></li>
				<li><a href="#" class="border_orange">Combats</a><span class="bg_orange"></span></li>
				<li><a href="#" class="border_blue">Actualitées</a><span class="bg_blue"></span></li>
				<li><a href="#" class="border_marron">Clubs</a><span class="bg_marron"></span></li>
				<li>
					<a href="#" id="connect">Connexion<div class="arrow_down"></div></a>
					<div class="login">
						<div class="arrow_up_border"><div class="arrow_up"></div></div>
						<form action="">
							<input type="text" placeholder="Votre pseudo">
							<input type="password" placeholder="Votre mot de passe">
							<input type="submit" value="Se connecter">
						</form>
					</div>
				</li>
				<li><a href="#">Inscription</a></li>
			</ul>
		</nav>
		</header>
		<div class="mobile_device">
			<div class="mobil_header">
				<h1><a href="#">Boxing<em class="color_gold">Senior</em>.com</a></h1>
				<div class="mobil_btn"></div>
			</div>
			<nav>
				<ul class="mobil_ul">
					<li><a href="#" class="bg_gold">Boxeurs</a><span class="bg_gold"></span></li>
					<li><a href="#" class="bg_orange">Combats</a><span class="bg_orange"></span></li>
					<li><a href="#" class="bg_blue">Actualitées</a><span class="bg_blue"></span></li>
					<li><a href="#" class="bg_marron">Clubs</a><span class="bg_marron"></span></li>
				</ul>
			</nav>
		</div>
		<div class="wrapper">
			<div id="slider">
				<ul class="bjqs">
					<li><img src="img/slide1.png" title="Reviver les plus grands combats"></li>
					<li><img src="img/slide2.png" title="Suiver l'actulaité de la boxe"></li>
					<li><img src="img/slide3.png" title="Rechercher un club en France"></li>
				</ul>
			</div>

			<section class="boxers_bloc">
				<h2 class="bg_gold">Derniers Boxeurs</h2>
				<article>
					<img src="img/img1.png" class="border_gold">
					<p class="color_gold">Mike Tyson est un boxeur des année 80 qui a grandit dans le coin de Brownsville .</p>
					<div class="see"><span class="color_gold"></span><a href="#">Voir le boxeur<div class="underline bg_gold"></div></a></div>
				</article>
			</section>
			<section class="fights_bloc">
				<h2 class="bg_orange">Derniers Combats</h2>
				<article>
					<img src="img/img2.png" class="border_orange">
					<p class="color_orange">Joe Frazier face à Muhammad Ali à été l’un des combat les plus violent des année 70</p>
					<div class="see"><span class="color_orange"></span><a href="#">Voir le combat<div class="underline bg_orange"></div></a></div>
				</article>
			</section>
			<section class="news_bloc">
				<h2 class="bg_blue">Dernieres Actualitées</h2>
				<article>
					<img src="img/img3.png" class="border_blue">
					<p class="color_blue">Floyd Mayweather reste Invaincu au bour de 44 combats consécutifs , à l’age de 36 ans</p>
					<div class="see"><span class="color_blue"></span><a href="#">Lire la news<div class="underline bg_blue"></div></a></div>
				</article>
			</section>
			<div class="somewords">
				<h2>BoxingSenior en quelques mots...</h2>
				<p>
					Retrouver un <a href="#" class="color_gold">boxeur</a> des années 1950 à aujourd'hui . Découvrez son parcours avec un contenu riche et interactif .
					Revivez les plus grands <a href="#" class="color_orange">combats</a> et championnats qui ont marqués l'histoire de la boxe.
					Tout les plus grands champions de Boxe poid lourd: Rocky Marciano , Muhammad Ali , Mike Tyson ou encore Wladimir Klitschko...
					Restez informé sur l'<a href="#" class="color_blue">actualitée</a> de la boxe.
					Noter un boxeur ou un combat et donnez y votre avis. Vous pouvez aussi chercher un <a href="#" class="color_marron">club</a> à travers toute la france !
				</p>
			</div>
		</div>
		<footer>
			<div class="footer_content">
				<section class="newsletter_form">
					<h2>BoxingSenior.com</h2>
					<div class="website_structure">
						<a href="#" class="color_gold">Boxeurs</a>
						<a href="#" class="color_orange">Combats</a>
						<a href="#" class="color_blue">Actualités</a>
						<a href="#" class="color_marron">Clubs</a>
					</div>
					<h3>Newsletter :</h3>
					<form action="">
						<input type="text" placeholder="Votre Adresse mail">				
						<button type="submit">S'inscrire</button>
					</form>
				</section>
				<section class="contact_form">
					<h2>Contactez-nous</h2>
					<form action="index.php" method="post">
						<input type="email" name="email" id="email" value="<?php if (isset($nom)) {echo $nom;} ?>" placeholder="Votre Adresse mail">
						<div class="mask_form mask_form1"><span class="info_email error check"></span></div>
						<input type="text" name="sujet" id="sujet" value="<?php if (isset($nom)) {echo $nom;} ?>" placeholder="Votre sujet">
						<div class="mask_form mask_form2"><span class="info_sujet error check"></span></div>
						<textarea id="message" name="message" value="<?php if (isset($nom)) {echo $nom;} ?>" placeholder="Votre message..."></textarea>
						<div class="mask_form mask_form3"><span class="info_message error check"></span></div>
						<button type="submit" id="envoyer">Envoyer</button>
					</form>
				</section>
				<section class="footer_links">
					<h2>Suivez-nous</h2>
					<div id="social_links">
						<div class="social_links social_links1">
							<div class="mask maskf">
								<a href="#" class="f"></a>
							</div>
							<div class="info_links links1">Facebook</div>
						</div>
						<div class="social_links social_links2">
							<div class="mask maskt">
								<a href="#" class="t"></a>
							</div>
							<div class="info_links links2">Twitter</div>
						</div>
						<div class="social_links social_links3">
							<div class="mask masky">
								<a href="#" class="y"></a>
							</div>
							<div class="info_links links3">Youtube</div>
						</div>
						<div class="social_links social_links4">
							<div class="mask maskv">
								<a href="#" class="v"></a>
							</div>
							<div class="info_links links4">Vimeo</div>
						</div>
						<div class="social_links social_links5">
							<div class="mask maski">
								<a href="#" class="i"></a>
							</div>
							<div class="info_links links5">Google +</div>
						</div>
						<div class="social_links social_links6">
							<div class="mask maskp">
								<a href="#" class="p"></a>
							</div>
							<div class="info_links links6">Pinterest</div>
						</div>
						<div class="social_links social_links7">
							<div class="mask maskr">
								<a href="#" class="r"></a>
							</div>
							<div class="info_links links7">RSS</div>
						</div>
					</div>
				</section>
			</div>
		</footer>
		<script>
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
		});
		</script>
		<script class="secret-source">
		jQuery(document).ready(function($) {
			$('#slider').bjqs({
			height      : 340,
			width       : 940,
			responsive  : true
			});
		});
		</script>
		<script>
			$(document).ready(function(){
				$("#connect").click(function(){
					if($(".login").is(":hidden")){
						$(".login").fadeIn(200);
					}else{
						$(".login").fadeOut(200);
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
		</script>
		<script src="js/lte-ie7.js"></script>
		<script src="js/slider.js"></script>
		<script src="js/secret-source.js"></script>
		<script>document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')</script>
	</body>
</html>