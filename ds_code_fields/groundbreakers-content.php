<div class="row">
	<div class="col-sm-2 ">
		<div class="hidden-xs mgt30">
		<?php 
			$block = module_invoke('sharethis', 'block_view', 'sharethis_block');
			print render($block['content']);
         ?>
		</div>
	</div>
	<div class="col-sm-10 ">
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce turpis orci, sodales eget vulputate ut, maximus et nulla. Etiam tincidunt, tellus sit amet vulputate scelerisque, eros nunc faucibus velit, et blandit elit ex pellentesque purus. Sed sed orci pulvinar, semper lacus sed, porta orci. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce turpis orci, sodales eget vulputate ut, maximus et nulla. Etiam tincidunt, tellus sit amet vulputate scelerisque, eros nunc faucibus velit, et blandit elit ex pellentesque purus.</p>
     <?php print views_embed_view('groundbreakers_landing', 'block_3'); ?>
     <?php
		$block2 = block_load('block', 79);
		$output = _block_get_renderable_array(_block_render_blocks(array($block2)));
		$output2 = drupal_render($output);
		print render($output2);
	?>
	</div>
</div>