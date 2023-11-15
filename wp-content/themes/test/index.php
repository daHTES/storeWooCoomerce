<? get_header(); ?>

<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
    <h2><? the_title() ?></h2>
        <? the_content(); ?>
<?php endwhile; else: ?>
Записей нет
<?php endif; ?>
<? get_footer(); ?>
