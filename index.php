<?php get_header(); ?>
			<div id="mainContent" class="large-8 columns">
				<?php if (have_posts()): while(have_posts()): the_post(); ?>
					<article>
					<h2><?php the_title(); ?></h2>

						<?php the_content(); ?>
						<?php edit_post_link('Bewerken'); ?>
					</article>
				<?php endwhile; else : ?>
					<article>
						<p>
							Helaas konden we niets vinden. Probeer een zoekopdracht.
						</p>
					</article>
				<?php endif;  ?>
			</div><!--  end mainContent  -->
			<div id="sideBarWrap" class="large-4 columns">
				<?php get_sidebar(); ?>
			</div><!--  end sideBarWrap  -->
<?php get_footer(); ?>