<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
get_header(); ?>
<div class="mv-sub">
<img src="<?php echo $wp_url; ?>/lib/images/mv_about.png" alt="">
<h2 class="txt-c color-white"><?php echo get_the_title(); ?></h2>
</div>
<section class="sec">
<div class="wrap">
</div>
</section>
<?php get_footer();