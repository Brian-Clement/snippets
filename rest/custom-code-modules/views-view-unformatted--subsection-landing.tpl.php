<?php

/**
 * @file
 * Template to display a list of rows.
 */
?>
<?php if (!empty($title)): ?>
  <h3><?php print $title; ?></h3>
<?php endif; ?>
<?php foreach ($rows as $delta => $row): ?>
  <?php if ($delta == 1 && $view->current_display == 'block_3' && $view->query->pager->current_page == 0) : ?>
   <?php if(isset($classes_array[$id])){?>
      <div<?php print ' class="' . $classes_array[$id] .'"';   ?>> 
   <?php }else{?><div><?php } ?>
	<?php $output = '<div id="oas-landing-page">
		<!-- 1st Section Begins : Delivery via OAS JX Tag -->
			<script type="text/javascript">
			<!--

				OAS_url = \'http://oasc18009.247realmedia.com\'; // Your OAS cname
				OAS_sitepage = window.location.hostname + window.location.pathname;
				OAS_pos = \'x18\'; // Target Position
				OAS_query = \'\'; // Search Terms/Keywords – remove "Keyword" from query string and from variables in


				var OAS_RN = new String (Math.random());
				var OAS_RNS = OAS_RN.substring (2,11);

				document.write(\'<scr\' + \'ipt type="text/javascript" src="\' + OAS_url + \'/RealMedia/ads/adstream_jx.ads/\' + OAS_sitepage + \'/1\' + OAS_RNS + \'@\' + OAS_pos + \'?\' + OAS_query + \'"></scr\' + \'ipt>\');

			// -->
			</script>
			<!-- 1st Section Ends : Delivery via OAS JX Tag -->

			<!-- 2nd Section Begins : Delivery via OAS NX Tag for older and non-Javascript Browser -->
			<noscript>
				<a
			href="http://oasc18009.247realmedia.com/RealMedia/ads/click_nx.ads/OAS_sitepage/@x18">
					<img src="http://oasc18009.247realmedia.com/RealMedia/ads/adstream_nx.ads/OAS_sitepage/@x18" border="0" />
				</a>
			</noscript>
			<!-- 2nd Section Ends : Delivery via OAS NX Tag -->
		</div>';
	?>
	<?php echo $output; ?>
	<?php print $row; ?>
  </div>
  <?php else : ?>
   
   <?php if(isset($classes_array[$id])){?>
      <div<?php print ' class="' . $classes_array[$id] .'"';   ?>> 
   <?php }else{?><div><?php } ?>
    <?php print $row; ?>
  </div>
  <?php endif; ?>
<?php endforeach; ?>
