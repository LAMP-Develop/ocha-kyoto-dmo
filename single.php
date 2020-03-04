<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
get_header('low'); ?>
<?php
if (have_posts()):
while (have_posts()): the_post();
$t = get_the_title();
$category = get_the_category();
$cat_name = $category[0]->cat_name;
$posttags = get_the_tags();
$time = get_the_time('Y-m-d');
?>
<article class="sec article-main">
<div class="wrap">
<h2 class="article-ttl"><?php echo $t; ?></h2>
<div class="meta">
<span>Modified date：<?php the_modified_time('m.d.Y'); ?></span>
</div>
<div class="post-main">
<?php the_content(); ?>
</div>
</div>
</article>
<?php endwhile; endif; ?>
<?php get_footer();
