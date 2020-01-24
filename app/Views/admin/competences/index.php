<div class="container admin-edit-list">

	<h1>Gestion des compétences</h1>

	<p>
		<div class="clearfix">
			<a href="<?= BASE_URL; ?>admin/competences/add/" class="button right form-edit" title="Ajouter"><i class="fa fa-plus-circle"></i><!-- Ajouter --></a>
		</div>
	</p>

	<table class="table">
		
		<thead>

			<tr>
				<td>Ordre</td>
				<td>Titre</td>
				<td>Icone</td>
				<td>Actions</td>
			</tr>

		</thead>

		<tbody>

			<?php foreach( $competences as $index => $competence ) : ?>

				<tr>
					<td><?= $index+1; ?></td> 
					<td><?= $competence->title; ?></td> 
					<td><i class="fa <?= $competence->icon; ?>"></i></td> 
					<td>
						<a href="<?= BASE_URL; ?>admin/competences/edit/<?= $competence->id; ?>/" class="button" title="Éditer"><i class="fa fa-edit"></i><!-- Éditer --></a>
		
						<form action="<?= BASE_URL; ?>admin/competences/delete/" method="post" style="display: inline;" onsubmit="return confirm('Voulez-vous vraiment supprimer la compétence ?');">
							<input type="hidden" name="id" value="<?= $competence->id; ?>">
							<button type="submit" class="button alert right" title="Supprimer"><i class="fa fa-trash"></i><!-- Supprimer --></button>
						</form>

					</td> 
				</tr>

			<?php endforeach; ?>
		</tbody>

	</table>

</div>

