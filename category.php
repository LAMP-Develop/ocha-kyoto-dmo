<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
get_header(); ?>
<section class="sec">
<div class="wrap">
<div class="posts-list">
<?php if (have_posts()): while (have_posts()): the_post();
$t = get_the_title();
$p = get_the_permalink();
?>
<article class="posts">
<a href="#">
<figure>
<span class="cat">宇治市</span>
<img src="<?php echo $wp_url; ?>/lib/images/blog_sample.png" alt="">
</figure>
<h3>タイトル</h3>
<time class="crimson">2020.02.02</time>
</a>
</article>
<?php endwhile; endif; ?>
</div>
</div>
</section>
<?php get_footer();