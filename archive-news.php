<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
get_header(); ?>

<div class="mv-sub">
<img src="<?php echo $wp_url; ?>/lib/images/mv_tours.png" alt="">
<h2 class="txt-c color-white">News</h2>
</div>

<section class="sec">
<div class="wrap">
<div class="news-list">
<?php
if (have_posts()): while (have_posts()): the_post();
$id = get_the_ID();
$t = get_the_title();
$p = get_the_permalink();
?>
<a href="<?php echo $p; ?>">
<time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('m.d.Y'); ?></time>
<p><?php echo $t; ?></p>
</a>
<?php endwhile; endif; ?>
</div>
</div>
</section>
<?php get_footer();
