<?php
/**
 * List block part for displaying page content in page.php
 *
 * @package Magazine 7
 */

?>
<header class="entry-header">
    <?php magazine_7_post_thumbnail(); ?>
    <div class="header-details-wrapper">
        <div class="entry-header-details">
            <?php if ('post' === get_post_type()) : ?>
                <div class="figure-categories figure-categories-bg">
                    <?php echo magazine_7_post_format(get_the_ID()); ?>
                    <?php magazine_7_post_categories('/'); ?>
                </div>
            <?php endif; ?>
            <?php the_title('<h1 class="entry-title">', '</h1>'); ?>
            <?php magazine_7_post_item_meta(); ?>
            <?php if ('post' === get_post_type()) : ?>
            <?php if(has_excerpt()): ?>
                <div class="post-excerpt">
                    <?php the_excerpt(); ?>
                </div>
            <?php endif; ?>

            <?php endif; ?>
        </div>
    </div>
</header><!-- .entry-header -->