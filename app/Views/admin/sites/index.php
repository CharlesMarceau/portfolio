<div class="container admin-edit-list">

	<h1>Gestion des sites</h1>

	<p>
		<div class="clearfix">
			<a href="<?= BASE_URL; ?>admin/sites/add/" class="button right form-edit" title="Ajouter"><i class="fa fa-plus-circle"></i><!-- Ajouter --></a>
		</div>
	</p>

	<table class="table">
		
		<thead>

			<tr>
				<td>Ordre</td>
				<td>Titre</td>
				<td>Image version bureau</td>
				<td>Image version mobile</td>
				<td>Actions</td>
			</tr>

		</thead>

		<tbody>

			<?php foreach( $sites as $index => $site ) : ?>

				<tr>
					<td><?= $index+1; ?></td> 
					<td><?= $site->title; ?></td> 
					<td><?= (!empty( $site->img_desktop )) ? '<img src="' . IMAGES . $site->img_desktop . '"  class="thumbnail">' : ''; ?></td> 
					<td><?= (!empty( $site->img_mobile )) ? '<img src="' . IMAGES . $site->img_mobile . '"  class="thumbnail">' : ''; ?></td> 
					<td>
						<a href="<?= BASE_URL; ?>admin/sites/edit/<?= $site->id; ?>/" class="button" title="Éditer"><i class="fa fa-edit"></i><!-- Éditer --></a>
		
						<form action="<?= BASE_URL; ?>admin/sites/delete/" method="post" style="display: inline;" onsubmit="return confirm('Voulez-vous vraiment supprimer ce site ?');">
							<input type="hidden" name="id" value="<?= $site->id; ?>">
							<button type="submit" class="button alert right" title="Supprimer"><i class="fa fa-trash"></i><!-- Supprimer --></button>
						</form>

					</td> 
				</tr>

			<?php endforeach; ?>
		</tbody>

	</table>

</div>

