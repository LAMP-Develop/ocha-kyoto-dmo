<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
get_header(); ?>

<div class="mv-sub">
<img src="<?php echo $wp_url; ?>/lib/images/mv_tours.png" alt="">
<h2 class="txt-c color-white">Event</h2>
</div>

<section class="sec">
<div class="wrap tow-column">

<aside class="sidebar">
<div class="inner category">
<h3 class="crimson">12 Villages and Towns</h3>
<ul>
<?php
$c_terms = get_terms('events_cat', $args);
foreach ($c_terms as $key => $c_term):
$c_term_slug = $c_term->slug;
$c_term_name = $c_term->name;
?>
<li>
<a href="<?php echo $home.'/model_course_cat/'.$c_term_slug; ?>"><?php echo $c_term_name; ?></a>
</li>
<?php endforeach; ?>
</ul>
</div>
</aside>

<div class="main">
<div class="tours-lists">
<?php
if (have_posts()): while (have_posts()): the_post();
$t = get_the_title();
$id = get_the_ID();
$p = get_the_permalink();
$args = [
];
$terms = (array)get_the_terms(get_the_ID(),'events_cat');
foreach ($terms as $key => $val) {
    $area_name = $val->name;
}
if (has_post_thumbnail()) {
    $i = get_the_post_thumbnail_url(get_the_ID(), 'large');
} else {
    $i = $wp_url.'/lib/images/no-img.png';
}
?>

<div class="card">
<a href="<?php echo $p; ?>">
<figure>
<img src="<?php echo $i; ?>" alt="<?php echo $t; ?>">
</figure>
<div class="txt">
<h3><?php echo $t; ?></h3>
</div>
<div class="area">
<span><i class="fas fa-map-marker-alt mr-05 color-secondary"></i><?php echo $area_name; ?></span>
</div>
</a>
</div>

<?php endwhile; endif; ?>
</div>
<?php if (function_exists('wp_pagenavi')) {
    wp_pagenavi();
} ?>
</div>

</div>
</section>
<?php get_footer();
