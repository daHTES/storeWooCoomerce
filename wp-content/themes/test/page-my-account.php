<? get_header(); ?>

<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
    <? the_content(); ?>
<?php endwhile; else: ?>

<?php endif; ?>
<? get_footer(); ?>

