<?php
/*
template name: Terms
*/

$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
get_header('low'); ?>

<section class="sec lower-layer-wrap mt-0">
<div class="wrap lower-layer pl-1 pr-1">
<h2 class="page-ttl crimson"><?php echo get_the_title(); ?></h2>
<?php the_content(); ?>
</div>
</section>

<?php get_footer();