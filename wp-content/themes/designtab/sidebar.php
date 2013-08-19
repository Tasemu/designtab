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
				<!--START Scripts : this is the script part you can add to the header of your theme-->
				<script type="text/javascript" src="http://localhost/~montaguemonro/designtab/wp-includes/js/jquery/jquery.js?ver=2.5.5"></script>
				<script type="text/javascript" src="http://localhost/~montaguemonro/designtab/wp-content/plugins/wysija-newsletters/js/validate/languages/jquery.validationEngine-en.js?ver=2.5.5"></script>
				<script type="text/javascript" src="http://localhost/~montaguemonro/designtab/wp-content/plugins/wysija-newsletters/js/validate/jquery.validationEngine.js?ver=2.5.5"></script>
				<script type="text/javascript" src="http://localhost/~montaguemonro/designtab/wp-content/plugins/wysija-newsletters/js/front-subscribers.js?ver=2.5.5"></script>
				<script type="text/javascript">
				                /* <![CDATA[ */
				                var wysijaAJAX = {"action":"wysija_ajax","controller":"subscribers","ajaxurl":"http://localhost/~montaguemonro/designtab/wp-admin/admin-ajax.php","loadingTrans":"Loading..."};
				                /* ]]> */
				                </script><script type="text/javascript" src="http://localhost/~montaguemonro/designtab/wp-content/plugins/wysija-newsletters/js/front-subscribers.js?ver=2.5.5"></script>
				<!--END Scripts-->

				<div class="widget_wysija_cont html_wysija"><div id="msg-form-wysija-html520e077733730-1" class="wysija-msg ajax"></div><form id="form-wysija-html520e077733730-1" method="post" action="#wysija" class="widget_wysija html_wysija">
				    <h2>Subscribe to email newsletter</h2>
				    <input type="text" name="wysija[user][email]" class="wysija-input validate[required,custom[email]] sidebar-text-field" title="Email"  value="" />
				    <input class="wysija-submit wysija-submit-field blue-submit" type="submit" value="Subscribe!" />
				    
				    <span class="abs-req">
				        <input type="text" name="wysija[user][abs][email]" class="wysija-input validated[abs][email]" value="" />
				    </span>
				    
				</p>

				    <input type="hidden" name="form_id" value="1" />
				    <input type="hidden" name="action" value="save" />
				    <input type="hidden" name="controller" value="subscribers" />
				    <input type="hidden" value="1" name="wysija-page" />

				    
				        <input type="hidden" name="wysija[user_list][list_ids]" value="1" />
				    
				 </form>
				</div>
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