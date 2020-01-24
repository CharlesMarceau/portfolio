<?php

	$success = '';

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		
		$name = $_POST["name"];
		$email = $_POST["email"];
		$message = $_POST["message"];
		$antispam = $_POST["antispam"];

		if(isset($name) && empty($name) ){

			$errorName = 'Nom invalide !';
		}

		if( isset($name) && !filter_var($email, FILTER_VALIDATE_EMAIL ) ){

			$errorEmail = 'Courriel invalide !';
		}

		if(isset($message) && empty($message) ){

			$errorMessage = 'Le champ ne peut pas être vide !';
		}

		if( !isset($errorName) && !isset($errorEmail) && !isset($errorMessage) && empty($antispam) ){

			$to = "info@charlesmarceau.com";
			$subject = "Formulaire de mon site !";

			$txt = "<html>
					<head>
						<title>Message de mon formulaire de contact</title>
					</head>
						<body>
							<h1>Message de mon formulaire de contact</h1>
								
							<table>
							<tr>
								<td>Nom : " . $name . "</td>
							</tr>
							<tr>
								<td>Courriel : " . $email . "</td>
							</tr>
							<tr>
								<td>Message : " . $message . "</td>
							</tr>
							</table>
						</body>
					</html>";

			$headers  = 'MIME-Version: 1.0' . "\r\n";
			$headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
			$headers .= "From: web@charlesmarceau.com";

			mail($to, $subject, $txt, $headers);
			$success = true;

		}
	}

?>

<div class="container contact">
	<h1>Contact</h1>

	<?php if( $success != true ) : ?>

		<p class="max-750 txt-align-ctr sm-padding">Veuillez remplir le formulaire suivant pour communiquer avec moi. Il me fera plaisir de vous répondre dans un bref délai.</p>
		<p>* Champs obligatoires</p>
		<form action="#" method="post">

			<div class="row">
				<div class="col-xs-12 col-sm-6">
					<span class="alert"><?= (isset($errorName)) ? $errorName : ''; ?></span>
					<?= $form->input('name', 'Nom *'); ?>
				</div>
				<div class="col-xs-12 col-sm-6">
					<span class="alert"><?= (isset($errorEmail)) ? $errorEmail : ''; ?></span>
					<?= $form->input('email', 'Courriel *'); ?>
				</div>
			</div>

			<span class="alert"><?= (isset($errorMessage)) ? $errorMessage : ''; ?></span>	
			<?= $form->input('message', 'Message *', 'textarea'); ?>

			<div style="display: none;">				
			<?= $form->input('antispam','antispam'); ?>
			</div>

			<button class="button"><i class="fa fa-paper-plane"></i>&nbsp;Envoyer</button>
		</form>

	<?php else : ?>

		<p class="max-750 txt-align-ctr sm-padding">
			<i class="fa fa-thumbs-up" style="font-size: 5em;"></i>
		</p>
		<p class="max-750 txt-align-ctr sm-padding">Merci d'avoir pris de votre temps précieux pour m'écrire. J'ai reçu votre message, je ne tarderai pas à vous répondre !</p>

	<?php endif; ?>

</div>

