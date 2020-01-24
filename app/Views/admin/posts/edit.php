<div class="container">
	<div class="right">
		<button form="save" class="button form-edit">Sauvegarder</button>
	</div>

	<form id="save" method="post" class="form-edit">

		<?= $form->input('title', 'Titre de l\'article'); ?>
		<?= $form->input('content', 'Contenu', ['type' => 'textarea']); ?>
		<?= $form->select('category_id', 'Catégorie', ['type' => $categories]); ?>
		<!-- <button class="button">Sauvegarder</button> -->

	</form>

</div>	
