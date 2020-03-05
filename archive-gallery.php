<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
get_header(); ?>

<div class="mv-sub">
<img src="<?php echo $wp_url; ?>/lib/images/mv_tours.png" alt="">
<h2 class="txt-c color-white">Gallery</h2>
</div>

<section class="sec">
<div class="wrap tow-column">

<aside class="sidebar">
<div class="inner category category-2">
<h3 class="crimson">Category</h3>
<ul>
<?php
$args = [
    'exclude_tree' => [71],
    'exclude' => [71],
];
$c_terms = get_terms('gallery_cat', $args);
foreach ($c_terms as $key => $c_term):
$c_term_slug = $c_term->slug;
$c_term_name = $c_term->name;
?>
<li>
<a href="<?php echo $home.'/gallery_cat/'.$c_term_slug; ?>"><?php echo $c_term_name; ?></a>
</li>
<?php endforeach; ?>
</ul>
</div>

<div class="inner category">
<h3 class="crimson">12 Villages and Towns</h3>
<ul>
<?php
$args = [
    'parent' => 71
];
$c_terms = get_terms('gallery_cat', $args);
foreach ($c_terms as $key => $c_term):
$c_term_slug = $c_term->slug;
$c_term_name = $c_term->name;
?>
<li>
<a href="<?php echo $home.'/gallery_cat/'.$c_term_slug; ?>"><?php echo $c_term_name; ?></a>
</li>
<?php endforeach; ?>
</ul>
</div>
</aside>

<div class="main">
<?php if (have_posts()):
$current_pgae = get_query_var('paged');
$current_pgae = $current_pgae == 0 ? '1' : $current_pgae;
?>
<p class="mb-1"><small><?php echo $wp_query->found_posts; ?> results to appear in page <?php echo $current_pgae; ?></small></p>
<div class="tours-lists gallery-lists">
<?php
while (have_posts()): the_post();
$id = get_the_ID();
$t = get_the_title();
$p = get_the_permalink();
$args = [
];
$terms = (array)get_the_terms(get_the_ID(), 'gallery_cat');
$pic = get_field('gallery_pic', $id);
$size_w = get_field('pic_w', $id);
$size_h = get_field('pic_h', $id);
?>

<div class="card">
<figure>
<img src="<?php echo $pic; ?>" alt="<?php echo $t; ?>">
</figure>
<div class="txt">
<h3><?php echo $t; ?></h3>
<span class="size"><?php echo $size_w; ?>×<?php echo $size_h; ?></span>
</div>
<div class="area">
<span><?php foreach ($terms as $key => $val) {
    echo $val->name.' / ';
} ?></span>
</div>
</div>

<?php endwhile; ?>
</div>
<?php endif; ?>
<?php if (function_exists('wp_pagenavi')) {
    wp_pagenavi();
} ?>
</div>

</div>
</section>
<?php get_template_part('templates/gallery-guide'); ?>
<?php get_footer();
