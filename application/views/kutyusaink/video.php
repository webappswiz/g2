<section>
	<div class="row flx-center">
		<div class="content-box faq">
			<h1 class="text-center"><?php echo __( 'Goodiebox videók' ); ?></h1>
			<div id="videok" style="text-align: center">
				<?php
				/*$xml_data = file_get_contents('http://gdata.youtube.com/feeds/api/users/UCAnqUKt9dkY7Tw2kndO9JAA/uploads?max-results=4');
				$xml = simplexml_load_string($xml_data) or die("Error: Cannot create object");
				foreach ($xml->entry as $entry) {
					$link = $entry->id;
					$link_array = explode('/', $link);
					$video_id = array_pop($link_array);
					echo '<iframe width="315" height="315" src="//www.youtube.com/embed/' . $video_id . '" frameborder="0" allowfullscreen></iframe> ';
				}*/
				echo '<iframe width="315" height="315" src="https://www.youtube.com/embed/videoseries?list=PL4ZnDVm3eIp0fjo7W2dGCdirkuboJ_kzt&loop=1" frameborder="0" allowfullscreen></iframe> ';
				?>
				<br/><br/>
				<a href="https://www.youtube.com/channel/UCAnqUKt9dkY7Tw2kndO9JAA/videos"
				   style="color:green;cursor: pointer;font-weight: bold"><?php echo __( 'Klikkelj a többi videóért!' ); ?></a>
			</div>
		</div>
	</div>
</section>