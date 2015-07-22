<!-- BC ORIGINAL -->
<div class="col-sm-2">
	<?php
	  $socialblock = module_invoke('sharethis','block_view','sharethis_block');
	  print render($socialblock['content']);
	?>
</div>
<div class="col-sm-10">
	<?php
		$block = block_load('block', 41);
		$output = _block_get_renderable_array(_block_render_blocks(array($block)));
		$output2 = drupal_render($output);
		print render($output2);
		echo views_embed_view('top_100_independents', $display_id = 'block'); 
		$block2 = block_load('block', 44);
		$output = _block_get_renderable_array(_block_render_blocks(array($block2)));
		$output2 = drupal_render($output);
		print render($output2);
	?>
</div>