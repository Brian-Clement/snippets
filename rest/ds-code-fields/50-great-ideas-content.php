<div class="col-sm-2">
	<?php
	  $socialblock = module_invoke('sharethis','block_view','sharethis_block');
	  print render($socialblock['content']);
	?>
</div>
<div class="col-sm-10">
	<?php
		$block = module_invoke('fifty_great_ideas', 'block_view', 'fifty_great_ideas_content');
		print render($block['content']);
		echo views_embed_view('50_great_ideas_list', $display_id = 'block_4'); 
		$block2 = block_load('block', 45);
		$output = _block_get_renderable_array(_block_render_blocks(array($block2)));
		$output2 = drupal_render($output);
		print render($output2);
	?>
</div>