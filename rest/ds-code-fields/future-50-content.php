<div class="col-sm-2">
	<?php
	  $socialblock = module_invoke('sharethis','block_view','sharethis_block');
	  print render($socialblock['content']);
	?>
</div>
<div class="col-sm-10">
	<?php
		$block = module_invoke('future_50', 'block_view', 'future_50_content');
		print render($block['content']);
		echo views_embed_view('future_50', $display_id = 'block'); 
		$block2 = block_load('block', 38);
		$output = _block_get_renderable_array(_block_render_blocks(array($block2)));
		$output2 = drupal_render($output);
		print render($output2);
	?>
</div>