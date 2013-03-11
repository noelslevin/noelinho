<?php
/**
 * Template Name: Search page
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>

	<div id="primary" class="site-content">
		<div id="content" role="main">

			<article class="page type-page status-publish hentry">
			<header class="entry-header">
			<h1 class="entry-title">Search</h1>
			</header>
			<div class="entry-content">
			<p>Can't find what you're looking for? Not a problem. I can help you find it.</p>
			<p>On this page, you can search through my site's post categories, post tags and see a complete list of my post archives. Simply click through for more information.</p>
			<p>If you still can't find what you're looking for, use the search box on the 
right-hand side, and failing that, you can contact me by clicking <em>Contact</em> on the menu at the top of the page.</p>

			<h2>Tags</h2>
			<p>The tags below are displayed alphabetically. The larger tags are the most frequently used tags on the site.</p>
			<div class="tag-cloud">
			<?php wp_tag_cloud('smallest=10&largest=24'); ?>
			</div>
			
			<h2>Still Searching?</h2>
			<p>If you've still not quite found what you're after, look at the sidebar on the right-hand side, where you can find recent posts, a full archive of posts, and the full list of post categories.</p>
			
			</div><!-- .entry-content -->
			</article>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>