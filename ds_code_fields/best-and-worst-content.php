<div class="col-sm-2">
	<?php
	  $socialblock = module_invoke('sharethis','block_view','sharethis_block');
	  print render($socialblock['content']);
	?>
</div>
<div class="col-sm-10">
	<?php
		$block = block_load('block', 80);
		$output = _block_get_renderable_array(_block_render_blocks(array($block)));
		$output2 = drupal_render($output);
		print render($output2);
		echo views_embed_view('best_and_worst_places_restaurant', $display_id = 'block_4'); 
		$block2 = block_load('block', 43);
		$output = _block_get_renderable_array(_block_render_blocks(array($block2)));
		$output2 = drupal_render($output);
		print render($output2);
	?>
</div>
