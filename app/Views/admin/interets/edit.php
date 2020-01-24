<div class="container admin-edit">
	<h1>Modification d'un intérêt</h1>
	<div class="clearfix">
		<div class="right">
			<button form="save" class="button form-edit" title="Sauvegarder"><i class="fa fa-save"></i><!-- Sauvegarder --></button>
			<a href="<?= BASE_URL; ?>admin/interets/index/" class="button form-edit" title="Voir la liste"><i class="fa fa-list"></i><!-- Liste --></a>
		</div>
	</div>

	<form id="save" method="post" class="form-edit" enctype="multipart/form-data">

		<?= $form->input('name', 'Intérêt'); ?>
		<?= $form->select('category_id', 'Catégorie', ['type' => $categories]); ?>

	</form>
	
	<?php if(isset($interet)) : ?>
	<form action="<?= BASE_URL; ?>admin/interets/delete/" method="post" style="display: inline;" onsubmit="return confirm('Voulez-vous vraiment supprimer cet intérêt ?');">
		<input type="hidden" name="id" value="<?= $interet->id; ?>">
		<button type="submit" class="button form-edit alert right" title="Supprimer"><i class="fa fa-trash"></i><!-- Supprimer --></button>
	</form>
	<?php endif; ?>
</div>

