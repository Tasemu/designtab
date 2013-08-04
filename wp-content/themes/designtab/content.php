<?php
/**
 * @package DesignTab
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

		<div class="hentry-thumb">
			<?php if ( has_post_thumbnail() ) {
			the_post_thumbnail('thumbnail');
			} else { ?>
			<img src="<?php bloginfo('template_directory'); ?>/inc/img/default-post-img.png" alt="<?php the_title(); ?>" />
			<?php } ?>
		</div>
		<div class="hentry-info">
			<header class="entry-header">
				<h1 class="entry-title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h1>

				<?php if ( 'post' == get_post_type() ) : ?>
				<div class="entry-meta">
					<?php designtab_posted_on(); ?>
				</div><!-- .entry-meta -->
				<?php endif; ?>
			</header><!-- .entry-header -->

			<footer class="entry-meta">
				<?php if ( 'post' == get_post_type() ) : // Hide category and tag text for pages on Search ?>
					<?php
						/* translators: used between list items, there is a space after the comma */
						$categories_list = get_the_category_list( __( ', ', 'designtab' ) );
						if ( $categories_list && designtab_categorized_blog() ) :
					?>
					<span class="cat-links">
						<?php printf( __( 'Posted in %1$s', 'designtab' ), $categories_list ); ?>
					</span>
					<?php endif; // End if categories ?>

					<?php
						/* translators: used between list items, there is a space after the comma */
						$tags_list = get_the_tag_list( '', __( ', ', 'designtab' ) );
						if ( $tags_list ) :
					?>
					<span class="tags-links">
						<?php printf( __( 'Tagged %1$s', 'designtab' ), $tags_list ); ?>
					</span>
					<?php endif; // End if $tags_list ?>
				<?php endif; // End if 'post' == get_post_type() ?>

				<?php edit_post_link( __( 'Edit', 'designtab' ), '<span class="edit-link">', '</span>' ); ?>
			</footer><!-- .entry-meta -->
		</div>
</article><!-- #post-## -->

