<?php
$categories = ORM::factory( 'Categories' )->find_all();
if ( count( $categories ) > 0 ) {
	?>
	<h2>Edit categories</h2>
	<table class="table table-stripped">
		<thead>
		<tr>
			<th>#</th>
			<th>Category name</th>
			<th>Menu order</th>
			<th></th>
		</tr>
		</thead>
		<tbody>
		<?php
		$i = 1;
		foreach ( $categories as $category ) {
			echo '<tr>';
			echo '<td>' . $i . '</td>';
			echo '<td>' . $category->cat_name . '</td>';
			echo '<td>' . $category->sort . '</td>';
			echo '<td><a href="/admin/categories/edit/' . $category->id . '" class="btn btn-primary">Edit</a> ';
			echo '</td>';
			echo '</tr>';
			$i ++;
		}
		?>
		</tbody>
	</table>
	<?php
}
echo HTML::anchor( '/admin/categories/add', 'Add a new category', array( 'class' => 'btn btn-primary' ) );
?>
