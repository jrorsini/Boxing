<?php 
require 'cnx.php';
if (isset($_GET['motclef'])) {
	$motclef = $_GET['motclef'];
	$q = array('motclef'=>$motclef. '%');
	$sql = 'SELECT *
		FROM fights
		WHERE fight_opponent LIKE :motclef
		OR red_corner_name LIKE :motclef
		OR blue_corner_name LIKE :motclef
	';
	$req = $bdd->prepare($sql);
	$req->execute($q);
	$count = $req->rowCount($sql);

	if ($count >= 1) {
		while ($result = $req->fetch(PDO::FETCH_OBJ)) {
			echo '
				<li>
					<a href="https://www.google.fr/">
					<img class="search_img_red" src="templates/img/mini/'.$result->red_corner_img.'"/>
					'.$result->fight_opponent.'
					<img class="search_img_blue" src="templates/img/mini/'.$result->blue_corner_img.'"/>
					</a>
				</li>
			';
		}
	}else{
		echo '<li><p>Aucun boxeurs trouvés pour : '.$motclef.'</p></li>';
	}
}

 ?>