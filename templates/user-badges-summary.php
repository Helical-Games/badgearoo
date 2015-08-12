<?php 
/**
 * Shows a summary of a user's badges and points
 */
?>
<div class="user-badges-summary">

	<ul class="ub-badges">
		<?php 
		foreach ( $badges as $badge ) {
			?>
			<li class="ub-badge-list">
				<?php 
				ub_get_template_part( 'badge', null, true, array(
						'show_title' => true,
						'logo_type' => $badge->logo_type,
						'logo_image' => $badge->logo_image,
						'logo_html' => $badge->logo_html,
						'excerpt' => $badge->excerpt,
						'title' => $badge->title,
						'content' => $badge->content
				) );
				?>
			</li>
		<?php
		} ?>
	</ul>
	
	<?php
	
	ub_get_template_part( 'points', null, true, array(
			'points' => $points
	) );
	
	
	?>
</div>