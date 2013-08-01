<?php 
session_start();
?>
<?php 
require_once 'config/cnx.php';
?>
<html>
	<head>
	<?php include 'templates/header_sources.html'; ?>
	</head>
	<body>
		<?php include 'templates/_header.html';?>
		<div class="wrapper">
			<?php include 'templates/blocks/fight_view.html';?>
		</div>
		<?php include 'templates/_footer.html';?>
		<?php include 'templates/footer_sources.html';?>		
	</body>
</html>