<script type="text/javascript">
	$(document).ready(function () {
		$(':button.cancel').on('click', function () {
			return window.location.replace("" + url_base + "admin/products");
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
				<label class="control-label" for="package_price">Package sale price</label>

				<div class="controls">
					<input class="input-xxlarge" type="text" id="package_sale_price" name="package_sale_price"
					       placeholder="Package sale price"
					       value="<?= $model->sale_price ?>">
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
							<option <?php echo ( $model->product_cat == $category->id ) ? 'selected' : ''; ?>
								value="<?php echo $category->id ?>"><?php echo $category->cat_name; ?></option>
							<?php
						}
						?>
					</select>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="product_cat">Product size</label>
				<div class="controls">
					<?php $sizes = json_decode($model->product_size);?>
					<select id="product_size" name="product_size[]" class="input-xxlarge" multiple="multiple">
						<option value="1" <?php echo (in_array(1,$sizes)) ? 'selected="selected"' : '' ?>>Small</option>
						<option value="2" <?php echo (in_array(2,$sizes)) ? 'selected="selected"' : '' ?>>Medium</option>
						<option value="3" <?php echo (in_array(3,$sizes)) ? 'selected="selected"' : '' ?>>Large</option>
						<option value="4" <?php echo (in_array(4,$sizes)) ? 'selected="selected"' : '' ?>>Good for all dog sizes</option>
					</select>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="product_cat">Dog age</label>
				<div class="controls">
					<select id="dog_age" name="dog_age" class="input-xxlarge">
						<option value="1" <?php echo ( $model->product_age == 1 ) ? 'selected="selected"' : '' ?>>From 3 months +</option>
						<option value="2" <?php echo ( $model->product_age == 2 ) ? 'selected="selected"' : '' ?>>From 4 months +</option>
						<option value="3" <?php echo ( $model->product_age == 3 ) ? 'selected="selected"' : '' ?>>From 1 year +</option>
						<option value="4" <?php echo ( $model->product_age == 4 ) ? 'selected="selected"' : '' ?>>Good for all ages</option>
					</select>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="package_code">Product quantity</label>

				<div class="controls">
					<input class="input-xxlarge" type="text" id="product_qty" name="product_qty"
					       placeholder=""
					       value="<?= $model->qty ?>">
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="package_code">Product weight</label>

				<div class="controls">
					<input class="input-xxlarge" type="text" id="package_weight" name="package_weight"
					       placeholder="Package weight"
					       value="<?= $model->weight ?>">
				</div>
			</div>
			<div class="control-group">
				<input type="checkbox" id="package_enabled" name="package_enabled"
					<?php echo ( $model->status == 1 ) ? 'checked="checked"' : '' ?> value="1"> Is available

			</div>
			<div class="control-group">
				<input type="checkbox" id="package_new" name="package_new"
						<?php echo ( $model->new == 1 ) ? 'checked="checked"' : '' ?> value="1"> Is new product?

			</div>
			<div class="control-group">
				<input type="checkbox" id="package_onsale" name="package_onsale"
						<?php echo ( $model->on_sale == 1 ) ? 'checked="checked"' : '' ?> value="1"> Is on-sale

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
			<div class="control-group">
				<label class="control-label" for="package_code">Video link</label>

				<div class="controls">
					<input class="input-xxlarge" type="text" id="video_link" name="video_link"
					       value="<?= $model->video_link ?>">
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
	</form><br/>
	<?php if($model->id):?>
	<div class="control-group" style="text-align: center">
	<?php
		if(count($product_images)>0){
			echo '<h3>Product Images</h3>';
			foreach($product_images as $image){
				echo '<div><img src="'.URL::base(true, true).'uploads/products/'.$image->img_name.'" style="width:100px;height:100px"><br/>
				<a href="'.URL::base(true, true).'admin/products/del_img/'.$image->id.'">Delete</a>
				</div>';
			}
		}
		?>
		</div>
		<div style="clear: both;"></div>

		<div class="control-group" style="text-align: center">
			<?php
			if(count($product_add_images)>0){
				echo '<h3>Product Addon Images</h3>';
				foreach($product_add_images as $a_image){
					echo '<div><img src="'.URL::base(true, true).'uploads/products/'.$a_image->img_name.'" style="width:100px;height:100px"><br/>
				<a href="'.URL::base(true, true).'admin/products/del_img/'.$a_image->id.'">Delete</a>
				</div>';
				}
			}
			?>
		</div>
		<div style="clear: both;"></div>
	<h3>Upload images</h3>
	<script>
		/*jslint unparam: true, regexp: true */
		/*global window, $ */
		$(function () {
			'use strict';
			// Change this to the location of your server-side upload handler:
			var url = '<?php echo URL::base(true, true) ?>admin/products/upload',
				uploadButton = $('<button/>')
					.addClass('btn btn-primary')
					.prop('disabled', true)
					.text('Processing...')
					.on('click', function () {
						var $this = $(this),
							data = $this.data();
						$this
							.off('click')
							.text('Abort')
							.on('click', function () {
								$this.remove();
								data.abort();
							});
						data.submit().always(function () {
							$this.remove();
						});
					});
			$('.fileupload').fileupload({
				url: url,
				dataType: 'json',
				autoUpload: false,
				acceptFileTypes: /(\.|\/)(gif|jpe?g|png)$/i,
				maxFileSize: 999000,

				// Enable image resizing, except for Android and Opera,
				// which actually support image resizing, but fail to
				// send Blob objects via XHR requests:
				disableImageResize: /Android(?!.*Chrome)|Opera/
					.test(window.navigator.userAgent),
				previewMaxWidth: 100,
				previewMaxHeight: 100,
				previewCrop: true
			}).on('fileuploadadd', function (e, data) {
				var upload_type = $(this).data('value');
				data.formData = {"product_id": <?php echo $model->id; ?>,"upload_type": upload_type};

				data.context = $('<div/>').appendTo('#files');
				$.each(data.files, function (index, file) {
					var node = $('<p/>')
						.append($('<span/>').text(file.name));
					if (!index) {
						node
							.append('<br>')
							.append(uploadButton.clone(true).data(data));
					}
					node.appendTo(data.context);
				});
			}).on('fileuploadprocessalways', function (e, data) {
				var index = data.index,
					file = data.files[index],
					node = $(data.context.children()[index]);
				if (file.preview) {
					node
						.prepend('<br>')
						.prepend(file.preview);
				}
				if (file.error) {
					node
						.append('<br>')
						.append($('<span class="text-danger"/>').text(file.error));
				}
				if (index + 1 === data.files.length) {
					data.context.find('button')
						.text('Upload')
						.prop('disabled', !!data.files.error);
				}
			}).on('fileuploadprogressall', function (e, data) {
				var progress = parseInt(data.loaded / data.total * 100, 10);
				$('#progress .progress-bar').css(
					'width',
					progress + '%'
				);
			}).on('fileuploaddone', function (e, data) {
				$.each(data.result.files, function (index, file) {
					if (file.url) {
						var link = $('<a>')
							.attr('target', '_blank')
							.prop('href', file.url);
						$(data.context.children()[index])
							.wrap(link);
					} else if (file.error) {
						var error = $('<span class="text-danger"/>').text(file.error);
						$(data.context.children()[index])
							.append('<br>')
							.append(error);
					}
				});
			}).on('fileuploadfail', function (e, data) {
				$.each(data.files, function (index) {
					var error = $('');
					$(data.context.children()[index])
						.append('<br>')
						.append(error);
				});
			}).prop('disabled', !$.support.fileInput)
				.parent().addClass($.support.fileInput ? undefined : 'disabled');
		});
	</script>
	<!-- The fileinput-button span is used to style the file input field as button -->
    <span class="btn btn-success fileinput-button">
        <i class="glyphicon glyphicon-plus"></i>
        <span>Add files...</span>
	    <!-- The file input field used as target for the file upload widget -->
        <input class="fileupload" type="file" name="files[]" data-value="1" multiple accept=".jpg,.png,.PNG,.JPG">

    </span>
	<h3>Upload photos for the photos tab</h3>
		<span class="btn btn-success fileinput-button">
        <i class="glyphicon glyphicon-plus"></i>
        <span>Add additional photos...</span>
			<!-- The file input field used as target for the file upload widget -->
        <input class="fileupload" type="file" name="files[]" data-value="2" multiple accept=".jpg,.png,.PNG,.JPG">

    </span>
	<br>
		<br>
	<!-- The global progress bar -->
	<div id="progress" class="progress">
		<div class="progress-bar progress-bar-success"></div>
	</div>
	<!-- The container for the uploaded files -->
	<div id="files" class="files"></div>
	<?php endif; ?>
</div>
