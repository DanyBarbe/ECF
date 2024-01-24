<!doctype html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
	      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="../styles/style.css">
	<title>Charles Cantin - Photographe</title>
</head>
<body>
<?php
	include '../controller/header.html';
?>

<main id="contact">
	<h2>contact</h2>
	
	<form action="">
		<span>
			<label for="nom">
				nom
				<span class="required">*</span>
			</label>
			<input type="text" id="nom" placeholder="nom">
		</span>
		
		<span>
			<label for="company">société</label>
			<input type="text" id="company" placeholder="société">
		</span>
		
		<span>
			<label for="email">
				email
				<span class="required">*</span>
			</label>
			<input type="email" id="email" placeholder="email">
		</span>
		
		<span>
			<label for="phone">
				téléphone
				<span class="required">*</span>
			</label>
			<input type="text" id="phone" placeholder="téléphone">
		</span>
		
		<span>
			<label for="message">
				message
				<span class="required">*</span>
			</label>
			<textarea name="" id="message" placeholder="message" cols="30" rows="10"></textarea>
		</span>
		<span class="text">
			<p class="required">*</p>
			<p>champ requit</p>
		</span>
		<button type="submit">
			<span class="icon-content">
				<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
          <path d="M16.1 260.2c-22.6 12.9-20.5 47.3 3.6 57.3L160 376V479.3c0 18.1 14.6 32.7 32.7 32.7c9.7 0 18.9-4.3 25.1-11.8l62-74.3 123.9 51.6c18.9 7.9 40.8-4.5 43.9-24.7l64-416c1.9-12.1-3.4-24.3-13.5-31.2s-23.3-7.5-34-1.4l-448 256zm52.1 25.5L409.7 90.6 190.1 336l1.2 1L68.2 285.7zM403.3 425.4L236.7 355.9 450.8 116.6 403.3 425.4z"/>
				</svg>
			</span>
			envoyer
		</button>
	</form>
</main>

<?php
	include '../controller/footer.html';
?>

</body>
</html>

