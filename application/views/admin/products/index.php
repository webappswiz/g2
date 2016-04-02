<?php
$products = ORM::factory( 'Products' )->find_all();
if ( count( $products ) > 0 ) {
	?>
	<h2>Edit packages</h2>
	<table class="table table-stripped">
		<thead>
		<tr>
			<th>#</th>
			<th>Package name</th>
			<th>Package price</th>
			<th>Enabled</th>
			<th>Category</th>
			<th></th>
		</tr>
		</thead>
		<tbody>
		<?php
		$i = 1;
		foreach ( $products as $package ) {
			echo '<tr>';
			echo '<td>' . $i . '</td>';
			echo '<td>' . $package->product_name . '</td>';
			echo '<td>' . $package->price . '</td>';
			echo '<td>' . $package->status . '</td>';
			$cat = ORM::factory('Categories',$package->product_cat);
			echo '<td>' . $cat->cat_name . '</td>';
			echo '<td><a href="/admin/products/edit/' . $package->id . '" class="btn btn-primary">Edit</a> ';
			echo '</td>';
			echo '</tr>';
			$i ++;
		}
		?>
		</tbody>
	</table>
	<?php
}
echo HTML::anchor( '/admin/products/add', 'Add a new product', array( 'class' => 'btn btn-primary' ) );
?>
