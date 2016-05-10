<h2>Reviews</h2>
<table class="table table-bordered">
    <thead>
        <tr>
            <th>#</th>
            <th>Product name</th>
            <th>First name</th>
            <th>Rate</th>
            <th>Date</th>
	        <th></th>
        </tr>
    </thead>
    <?php
    foreach ($reviews as $item) {
        ?>
        <tr>
            <td><?=$item->id?></td>
            <td><?=$item->product->product_name;?></td>
            <td><?=$item->firstname?></td>
            <td><?=$item->rating?></td>
            <td><?=$item->date?></td>
            <td><?php
	            echo '<a href="/admin/reviews/approve/'.$item->id.'" class="btn btn-primary">Approve</a> ';
	            echo '<a href="/admin/reviews/delete/'.$item->id.'" class="btn btn-primary">Delete</a>';
	            ?>
            </td>
        </tr>
        <?php
        echo '<tr><th colspan="5">Review text</th></tr>';
        echo '<tr><td colspan="5"><blockquote><p>'.$item->review.'</p></blockquote></td></tr>';
    }
echo '</table>';
