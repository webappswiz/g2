<script type="text/javascript">
	$(document).ready(function () {
		$(':button.cancel').on('click', function () {
			return window.location.replace("" + url_base + "admin/packages");
		});

	});
</script>
<script type="text/javascript" src="/tinymce/js/tinymce/tinymce.min.js"></script>
<script type="text/javascript">
	tinyMCE.init({
		mode: "textareas",
		plugins: "pagebreak,layer,table,save,insertdatetime,preview,media,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,template",
		theme: "modern",
		extended_valid_elements: "div[align|class|style|id|title]",
		extended_valid_elements: "iframe[name|src|framespacing|border|frameborder|scrolling|title|height|width],object[declare|classid|codebase|data|type|codetype|archive|standby|height|width|usemap|name|tabindex|align|border|hspace|vspace]",
		theme_advanced_buttons1: "bold,italic,underline,emotions,strikethrough,blockquote,forecolor,formatselect,fontselect,fontsizeselect,link,unlink,|,image,media,|,code,preview,fullscreen",
		theme_advanced_buttons2: "charmap,insertdate,inserttime,|,outdent,indent,|,table,justifyleft,justifycenter,justifyright,bullist,numlist,|,undo,redo,|,pagebreak,print",
		theme_advanced_toolbar_align: "left",
		relative_urls: false
	});
</script>
<div style="text-align: center">
	<form class="form-horizontal" style="text-align:center;display:inline-block;" method="POST" autocomplete='off'>
		<fieldset>
			<div class="control-group">
				<label class="control-label" for="product_name">Product name</label>

				<div class="controls">
					<input class="input-xxlarge" type="text" id="product_name" name="product_name"
					       placeholder="Package name"
					       value="<?= $model->product_name ?>">
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="product_subtitle">Product subtitle</label>

				<div class="controls">
					<input class="input-xxlarge" type="text" id="product_subtitle" name="product_subtitle"
					       placeholder="Subtitle"
					       value="<?= $model->product_subtitle ?>">
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="package_price">Package price</label>

				<div class="controls">
					<input class="input-xxlarge" type="text" id="package_price" name="package_price"
					       placeholder="Package price"
					       value="<?= $model->price ?>">
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="package_code">Product code</label>

				<div class="controls">
					<input class="input-xxlarge" type="text" id="package_code" name="package_code"
					       placeholder="Package code"
					       value="<?= $model->product_number ?>">
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="product_cat">Product category</label>

				<div class="controls">
					<select id="product_cat" name="product_cat" class="input-xxlarge">
						<?php
						foreach ( $categories as $category ) {
							?>
							<option <?php echo ($model->product_cat==$category->id)?'selected':'';?> value="<?php echo $category->id ?>"><?php echo $category->cat_name; ?></option>
							<?php
						}
						?>
					</select>
				</div>
			</div>
			<div class="control-group">
				<input type="checkbox" id="package_enabled" name="package_enabled"
					<?php echo ( $model->status == 1 ) ? 'checked="checked"' : '' ?> value="1"> Is available

			</div>
			<div class="control-group">
				<label class="control-label" for="product_description">Product description</label>

				<div class="controls">
					<textarea class="input-xxlarge" rows="10" id="product_description"
					          name="product_description"><?= $model->product_description ?></textarea>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="product_description">Product about</label>

				<div class="controls">
					<textarea class="input-xxlarge" rows="10" id="product_about"
					          name="product_about"><?= $model->product_about ?></textarea>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="product_description">Product composition</label>

				<div class="controls">
					<textarea class="input-xxlarge" rows="10" id="product_composition"
					          name="product_composition"><?= $model->product_composition ?></textarea>
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