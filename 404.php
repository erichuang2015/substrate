<?php
/************************************************************************************
*** Template Name: 404
	404 not found template
************************************************************************************/
// Get the header
get_header(); ?>

<section id="content" role="main">
    <div id="post-0" class="post not-found">
        <div class="entry-header">
            <h1 class="entry-title"><?php _e( 'Not Found', 'devmod' ); ?></h1>
        </div>
        <div class="entry-content">
            <p><?php _e( 'Nothing found for the requested page. Try a search instead?', 'devmod' ); ?></p>
            <?php get_search_form(); ?>
        </div>
    </div>
</section>

<?php
// Get the footer
get_footer(); ?>
