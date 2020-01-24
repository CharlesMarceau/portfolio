<div class="target">
	<form class="target-ctr connexion" method="post">

		<?php if($errors) : ?>
		<div class="txt-align-ctr alert">
			Nom d'utilisateur ou mot de passe incorrect.
		</div>
		<?php endif; ?>

		<?= $form->input('username', 'Utilisateur'); ?>
		<?= $form->password('password', 'Mot de passe'); ?>
		<button class="button">Connexion</button>

	</form>
</div>
