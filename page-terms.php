<?php
/*
template name: Terms
*/
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
get_header('low'); ?>
<?php
if (have_posts()):
while (have_posts()): the_post();
?>
<article class="sec article-main">
<div class="wrap">
<h2 class="article-ttl"><?php echo $t; ?></h2>
<div class="post-main">
<?php the_content(); ?>
</div>
</div>
</article>
<?php endwhile; endif; ?>
<?php get_footer();