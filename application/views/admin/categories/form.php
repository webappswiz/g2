<script type="text/javascript">
	$(document).ready(function () {
		$(':button.cancel').on('click', function () {
			return window.location.replace("" + url_base + "admin/categories");
		});

	});
</script>
<div style="text-align: center">
	<form class="form-horizontal" style="text-align:center;display:inline-block;" method="POST" autocomplete='off'>
		<fieldset>
			<div class="control-group">
				<label class="control-label" for="cat_name">Category name</label>

				<div class="controls">
					<input type="text" id="cat_name" name="cat_name" placeholder="Category name"
					       value="<?php echo $model->cat_name ?>">
				</div>
			</div>

			<div class="control-group">
				<label class="control-label" for="package_name">Menu order</label>

				<div class="controls">
					<input type="text" id="menu_order" name="menu_order" placeholder="Menu Order"
					       value="<?php echo $model->sort ?>">
				</div>
			</div>

			<div class="form-actions">
				<button type="submit" class="btn btn-primary">Submit</button>
				<button type="button" class="btn cancel">Cancel</button>
			</div>
		</fieldset>
		<?php
		echo Form::hidden( 'id', $model->id );
		?>
	</form>
</div>