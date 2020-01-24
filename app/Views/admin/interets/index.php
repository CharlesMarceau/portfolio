<div class="container admin-edit-list">

	<h1>Gestion des intérêts</h1>

	<p>
		<div class="clearfix">
			<a href="<?= BASE_URL; ?>admin/interets/add/" class="button right form-edit" title="Ajouter"><i class="fa fa-plus-circle"></i><!-- Ajouter --></a>
		</div>
	</p>

	<table class="table">
		
		<thead>

			<tr>
				<td>Catégorie</td>
				<td>Intérêt</td>
				<td>Actions</td>
			</tr>

		</thead>

		<tbody>
			
			<?php foreach( $interets as $index => $interet ) : ?>

				<tr>
					<td><?= $interet->category; ?></td>
					<td><?= $interet->name; ?></td>
					<td>
						<a href="<?= BASE_URL; ?>admin/interets/edit/<?= $interet->id; ?>/" class="button" title="Éditer"><i class="fa fa-edit"></i><!-- Éditer --></a>
		
						<form action="<?= BASE_URL; ?>admin/interets/delete/" method="post" style="display: inline;" onsubmit="return confirm('Voulez-vous vraiment supprimer cet intérêt ?');">
							<input type="hidden" name="id" value="<?= $interet->id; ?>">
							<button type="submit" class="button alert right" title="Supprimer"><i class="fa fa-trash"></i><!-- Supprimer --></button>
						</form>

					</td> 
				</tr>

			<?php endforeach; ?>
		</tbody>

	</table>

</div>

