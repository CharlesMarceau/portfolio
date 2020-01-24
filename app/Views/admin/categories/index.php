<div class="container admin-list">

	<h1>Gérez les catégories </h1>

	<p>
		<a href="?p=admin/categories/add" class="button button-success">Ajouter</a>
	</p>

	<table class="table">
		
		<thead>
			
			<tr>
				<td>Ordre</td>
				<td>Titre</td>
				<td>Actions</td>
			</tr>

		</thead>

		<tbody>
			
			<?php foreach( $categories as $index => $category ) : ?>

				<tr>
					<td><?= $index+1; ?></td> 
					<td><?= $category->title; ?></td> 
					<td>
						<a href="?p=admin/categories/edit&id=<?= $category->id; ?>" class="button button-primary">Éditer</a>
		
						<form action="?p=admin/categories/delete" method="post" style="display: inline;" onsubmit="return confirm('Voulez-vous vraiment supprimer cette catégorie ?');">
							<input type="hidden" name="id" value="<?= $category->id; ?>">
							<button type="submit" class="button button-danger">Supprimer</button>
						</form>

					</td> 
				</tr>

			<?php endforeach; ?>
		</tbody>

	</table>

</div>