<?php 
require 'config/cnx.php';
if (isset($_GET['motclef'])) {
	$motclef = $_GET['motclef'];
	$q = array('motclef'=>$motclef. '%');
	$sql = 'SELECT *
		FROM boxers
		WHERE boxer_first_name LIKE :motclef
		OR boxer_full_name LIKE :motclef
		OR boxer_last_name LIKE :motclef
	';
	$req = $bdd->prepare($sql);
	$req->execute($q);
	$count = $req->rowCount($sql);

	if ($count >= 1) {
		while ($result = $req->fetch(PDO::FETCH_OBJ)) {
			$win = $result->boxer_wins*1 .'px';
			$loss = $result->boxer_losses*1 .'px';
			$draw = $result->boxer_draws*1 .'px';
			$ko = $result->boxer_ko*1 .'px';
			echo '
				<li>
					<a href="boxer_view.php?boxer_id='.$result->id.'">
					<img src="templates/img/mini/'.$result->boxer_picture.'"/>
					'.$result->boxer_full_name.'
						<div class="ratio_wld">
							<span class="rw" style="width:'.$win.'">
								<!--<span class="rko" style="width:'.$ko.'"></span>-->
							</span>
							<span class="rl" style="width:'.$loss.'"></span>
							<span class="rd" style="width:'.$draw.'"></span>
						</div>
					</a>
				</li>
			';
		}
	}else{
		echo '<li><p>Aucun boxeurs trouvés pour : '.$motclef.'</p></li>';
	}
}

 ?>