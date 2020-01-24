<div class="container admin-edit">
	<h1>Modification d'une compétence</h1>
	<div class="clearfix">
		<div class="right">
			<button form="save" class="button form-edit"><i class="fa fa-save"></i><!-- Sauvegarder --></button>
			<a href="<?= BASE_URL; ?>admin/competences/index/" class="button form-edit" title="Voir la liste"><i class="fa fa-list"></i><!-- Liste --></a>
		</div>
	</div>

	<form id="save" method="post" class="form-edit" enctype="multipart/form-data">

		<?= $form->input('title', 'Nom de la compétence'); ?>
		<?= $form->input('text', 'Détails de la compétence', 'textarea' ); ?>
		<?= $form->input('icon', 'Classe de l\'icone ( FontAwesome )' ); ?>

	</form>
	<?php if(isset($competence)) : ?>
	<form action="<?= BASE_URL; ?>admin/competences/delete/" method="post" style="display: inline;" onsubmit="return confirm('Voulez-vous vraiment supprimer la compétence ?');">
		<input type="hidden" name="id" value="<?= $competence->id; ?>">
		<button type="submit" class="button form-edit alert right" title="Supprimer"><i class="fa fa-trash"></i><!-- Supprimer --></button>
	</form>
	<?php endif; ?>
</div>
