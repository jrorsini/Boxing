<?php 
session_start();
?>
<?php 
require_once 'cnx.php';
?>
<html>
	<head>
	<?php include 'templates/header_sources.html'; ?>
	</head>
	<body>
		<?php include 'templates/_header.html';?>
		<div class="wrapper">
			<?php include 'templates/blocks/index.html';?>
		</div>
		<?php include 'templates/_footer.html';?>
		<?php include 'templates/footer_sources.html';?>
		<script>document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')</script>
	</body>
</html>