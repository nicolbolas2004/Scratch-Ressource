<!DOCTYPE html>
<html>
<head>
	<title>Ressource Scratch -- Par nicolbolas2004</title>
	<link rel="stylesheet" href="design/design.css">
<body>
	<div id="lcont">
		<div class="logo">
			<img src="img/ScratchLogo.png" alt="Scratch logo">
		</div>
		<div class="logo">
			<img src="img/MyLogo.png" alt="nicolbolas2004" width="120%">
		</div>
		<h1>Bienvenue sur mon site de ressource Scratch</h1>
		<?php echo date('h:i');?>
	</div>
		<a href="https://scratch.mit.edu/" target="blank">Scratch</a>
		<a href="https://scratch.mit.edu/users/nicolbolas2004/" target="blank">Mon profil</a>
	<p>
		<div class="pretext">
			<h4>C'est ici que je compte partager mes tutoriels, afin notamment
			de m'entrainer sur la création de page web.<br>
			Les tutoriels seront probablement tous en français, mais mon
			Scratch sera quand même mis en anglais afin d'être un minimum
			bilingue lors de mes tutoriels </h4>
		</div>
	</p>
	<?php $screen = 400 ?>
	<video src="video/GD1.mp4" id="video" controls width="<?php echo $screen ?>"></video>
	<button onclick="resize()">Changer de taille</button>
	<script>
		function resize()
		{
			if ($screen == 400)
			{
				$screen = 900;
				document.getElementById('video').width = $screen;
			}
			else
			{
				$screen = 400;
				document.getElementById('video').width = $screen;
			}
		}
	</script>
</body>
</html>