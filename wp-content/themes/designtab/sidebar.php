<?php
/**
 * The Sidebar containing the main widget areas.
 *
 * @package DesignTab
 */
?>
	<div id="secondary" class="widget-area" role="complementary">
		<?php do_action( 'before_sidebar' ); ?>
		<?php if ( ! dynamic_sidebar( 'sidebar-1' ) ) : ?>

			<div id="email-subscribe">
				<h2>Subscribe to email updates:</h2>
				<form>
					<input class="sidebar-text-field" type="text"></input>
					<input class="blue-submit" type="submit"></input>
				</form>
			</div>

		<?php endif; // end sidebar widget area ?>
	</div><!-- #secondary -->

	<div id="tertiary" class="widget-area" role="complementary">
		<?php do_action( 'before_sidebar' ); ?>
		<?php if ( ! dynamic_sidebar( 'sidebar-2' ) ) : ?>

			<div id="rss-subscribe">
				<h2>Subscribe to RSS Feed</h2>
				<button class="brown-submit">Full Post RSS</button>
				<button class="brown-submit">Summary RSS</button>
			</div>

		<?php endif; // end sidebar widget area ?>
	</div><!-- #secondary -->