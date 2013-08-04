<?php
/**
 * @package DesignTab
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<div class="left">
			<div class="hentry-thumb">
				<?php if ( has_post_thumbnail() ) {
				the_post_thumbnail('thumbnail');
				} else { ?>
				<img src="<?php bloginfo('template_directory'); ?>/inc/img/default-post-img.png" alt="<?php the_title(); ?>" />
				<?php } ?>
			</div>
			<div class="hentry-info">
				<h1 class="entry-title"><?php the_title(); ?></h1>

				<div class="entry-meta">
					<?php designtab_posted_on(); ?>
				</div><!-- .entry-meta -->
			</div>
		</div>
		<div class="right">
			<div class="difficulty-info">
				<p><strong>Difficulty: </strong>Hard</p>
				<p><strong>EST Completion Time: </strong>30 Mins</p>
			</div>
			<div class="social">
				<div class="fb-like" data-layout="button_count" data-href="http://facebook.com/aaradiome" data-send="false" data-width="100" data-show-faces="false"></div>
				<a href="https://twitter.com/share" class="twitter-share-button" data-url="http://designtab.me" data-text="Free design and website development tutorials!" data-related="Raadiome">Tweet</a>
				<!-- Place this tag where you want the widget to render. -->
				<div class="g-follow" data-annotation="bubble" data-height="20" data-href="//plus.google.com/100176573207486909103" data-rel="author"></div>

				<!-- Place this tag after the last widget tag. -->
				<script type="text/javascript">
				  (function() {
				    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
				    po.src = 'https://apis.google.com/js/plusone.js';
				    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
				  })();
				</script>
			</div>
			<div class="download">
				<button class="blue-submit btn-large">Download Source Files</button>
			</div>
		</div>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'designtab' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-meta">
		<?php
			/* translators: used between list items, there is a space after the comma */
			$category_list = get_the_category_list( __( ', ', 'designtab' ) );

			/* translators: used between list items, there is a space after the comma */
			$tag_list = get_the_tag_list( '', __( ', ', 'designtab' ) );

			if ( ! designtab_categorized_blog() ) {
				// This blog only has 1 category so we just need to worry about tags in the meta text
				if ( '' != $tag_list ) {
					$meta_text = __( 'This entry was tagged %2$s. Bookmark the <a href="%3$s" title="Permalink to %4$s" rel="bookmark">permalink</a>.', 'designtab' );
				} else {
					$meta_text = __( 'Bookmark the <a href="%3$s" title="Permalink to %4$s" rel="bookmark">permalink</a>.', 'designtab' );
				}

			} else {
				// But this blog has loads of categories so we should probably display them here
				if ( '' != $tag_list ) {
					$meta_text = __( 'This entry was posted in %1$s and tagged %2$s. Bookmark the <a href="%3$s" title="Permalink to %4$s" rel="bookmark">permalink</a>.', 'designtab' );
				} else {
					$meta_text = __( 'This entry was posted in %1$s. Bookmark the <a href="%3$s" title="Permalink to %4$s" rel="bookmark">permalink</a>.', 'designtab' );
				}

			} // end check for categories on this blog

			printf(
				$meta_text,
				$category_list,
				$tag_list,
				get_permalink(),
				the_title_attribute( 'echo=0' )
			);
		?>

		<?php edit_post_link( __( 'Edit', 'designtab' ), '<span class="edit-link">', '</span>' ); ?>
	</footer><!-- .entry-meta -->
</article><!-- #post-## -->
