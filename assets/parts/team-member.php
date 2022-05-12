<div class="team">

	<!-- the loop -->
	<?php while ($team_query->have_posts()) : $team_query->the_post(); ?>

		<div class="team__mitglied inner-container--medium">
			<div class="flex">
				<div class="team__mitglied__img-wrapper" style="background-image: url(<?php echo get_the_post_thumbnail_url();?>); background-position: 50%">
					<div class="team__mitglied__img-wrapper__txt">
						<p class="team-title"><?php the_title(); ?>
						<p>
						<p><?php echo get_field('team-position'); ?></p>
						<p><?php echo get_field('team-job'); ?></p>
					</div>
				</div>
				<div class="team__mitglied__txt-wrapper">
					<h2 class="text-super text-super-small"><?php echo get_field('team-quote') ?><h2>
							<p><?php the_content() ?></p>
				</div>
			</div>
			<div class="team__mitglied__tags-wrapper">
				<?php
				$terms = get_field('personliche_skills');
				if ($terms) : 
				foreach ($terms as $term) : ?>
								<p class="text-meta team__mitglied__tags-wrapper__tag"><?php echo get_term( $term )->name; ?></p>
						<?php endforeach; 
					endif; ?>
			</div>
		</div>
	<?php endwhile; ?>
	<!-- end of the loop -->

</div>
<?php wp_reset_postdata(); ?>