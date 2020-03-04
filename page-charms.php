<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
get_header(); ?>
<div class="mv-sub">
<img src="<?php echo $wp_url; ?>/lib/images/mv_charms.png" alt="">
<h2 class="txt-c color-white"><?php echo get_the_title(); ?></h2>
</div>
<section class="sec">
<div class="wrap tow-column">

<aside class="sidebar">
<div class="inner category">
<h3 class="crimson">12 Villages and Towns</h3>
<ul>
<?php
$c_terms = get_terms('charm_cat', $args);
foreach ($c_terms as $key => $c_term):
$c_term_slug = $c_term->slug;
$c_term_name = $c_term->name;
?>
<li>
<a href="#<?php echo $c_term_slug; ?>"><?php echo $c_term_name; ?></a>
</li>
<?php endforeach; ?>
</ul>
</div>
</aside>

<div class="main">
<?php
$c_terms = get_terms('charm_cat', $args);
foreach ($c_terms as $key => $c_term):
$c_term_slug = $c_term->slug;
?>
<div id="<?php echo $c_term_slug; ?>" class="charms-list">
<?php
$args = [
    'posts_per_page' => 999,
    'post_type' => 'charm',
    'orderby' => 'date',
    'order' => 'DESC',
    'tax_query' => [
      [
        'taxonomy' => 'charm_cat',
        'field' => 'slug',
        'terms'=> $c_term_slug
      ]
    ]
];
$posts = get_posts($args);
foreach ($posts as $post): setup_postdata($post);
$t = get_the_title();
$id = get_the_ID();
if (has_post_thumbnail()) {
    $i = get_the_post_thumbnail_url(get_the_ID(), 'large');
} else {
    $i = $wp_url.'/lib/images/no-img.png';
}
$terms = get_the_terms($id, 'charm_cat');
$terms_name = $terms[0]->name;
$ttl = get_field('spot_name', $id);
$content = get_field('spot_content', $id);
$spot_map = get_field('spot_map', $id);
?>
<div class="charms-post">
<h3 class="txt-c crimson"><?php echo $terms_name; ?></h3>
<div class="inner">
<div class="img">
<img src="<?php echo $i; ?>" alt="<?php echo $t; ?>">
</div>
<div class="txt">
<h4><?php echo $ttl; ?></h4>
<p><?php echo $content; ?></p>
</div>
</div>
<div class="gmap">
<iframe src="https://www.google.com/maps?q=<?php echo $spot_map['lat']; ?>,<?php echo $spot_map['lng']; ?>&hl=jp&output=embed"></iframe>
</div>
<hr>
<div class="txt-r">
<a href="#">Pagetop<i class="fas fa-angle-up ml-05"></i></a>
</div>
</div>
<?php endforeach; wp_reset_postdata(); ?>
</div>
<?php endforeach; ?>
</div>

</div>
</section>
<?php get_footer();
