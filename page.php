<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
get_header(); ?>
<section class="sec lower-layer-wrap">
<div class="wrap lower-layer">
<h2 class="page-ttl"><?php echo get_the_title(); ?></h2>
<?php the_content(); ?>
</div>
</section>
<?php get_footer();