<div class="container admin-edit">
	<h1>Ajout / Modification d'un site</h1>
	<div class="clearfix">
		<div class="right">
			<button form="save" class="button form-edit"><i class="fa fa-save"></i><!-- Sauvegarder --></button>
			<a href="<?= BASE_URL; ?>admin/sites/index/" class="button form-edit" title="Voir la liste"><i class="fa fa-list"></i><!-- Liste --></a>
		</div>
	</div>

	<form id="save" method="post" class="form-edit" enctype="multipart/form-data">

		<?= $form->input('title', 'Nom du site'); ?>

		<label>Image du site version bureau</label>
		<?= (!empty($site->img_mobile) ) ? '<img class="thumbnail" src="' . IMAGES . $site->img_desktop . '"><input id="img_desktop" name="img_desktop" type="hidden" value="'. $site->img_desktop .'">' : "Pas d'image sélectionnée!"; ?>
		<?= $form->inputImg('img_desktop'); ?>

		<label>Image du site version mobile</label>
		<?= (!empty($site->img_mobile) ) ? '<img class="thumbnail" src="' . IMAGES . $site->img_mobile . '"><input id="img_mobile" name="img_mobile" type="hidden" value="'. $site->img_mobile .'">' : "Pas d'image sélectionnée!"; ?>
		<?= $form->inputImg('img_mobile'); ?>

		<?= $form->input('web', 'Lien du site'); ?>
		<?= $form->input('experience', 'Description du site', 'textarea' ); ?>

	</form>
	<?php if(isset($site)) : ?>
	<form action="<?= BASE_URL; ?>admin/sites/delete/" method="post" style="display: inline;" onsubmit="return confirm('Voulez-vous vraiment supprimer ce site ?');">
		<input type="hidden" name="id" value="<?= $site->id; ?>">
		<button type="submit" class="button form-edit alert right" title="Supprimer"><i class="fa fa-trash"></i><!-- Supprimer --></button>
	</form>
	<?php endif; ?>
</div>

