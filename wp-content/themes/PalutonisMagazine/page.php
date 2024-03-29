<?php get_header(); ?>

<?php if ((get_option('swt_slider') == 'Hide') || (! is_front_page())) { ?>
<?php { echo ''; } ?>
<?php } else { include(TEMPLATEPATH . '/includes/slide.php'); } ?>


<div id="contentwraps">

	<?php if (have_posts()) : ?>

		<?php while (have_posts()) : the_post(); ?>

			<div class="post" id="post-<?php the_ID(); ?>">
				<h2 class="title"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>

				<div class="entry">
					<?php the_content(''); ?>
				</div>
			</div>
            <div class="post-bot"></div>

            <div class="inn">
            <?php comments_template(true, ''); ?>
            </div>
		<?php endwhile; ?>

	<?php endif; ?>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
