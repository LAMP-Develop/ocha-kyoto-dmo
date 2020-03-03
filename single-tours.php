<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
get_header('low');
if (have_posts()):
while (have_posts()): the_post();
$t = get_the_title();
$id = get_the_ID();
$args = [
    'parent' => 38
];
$terms = get_terms('tour_cat', $args)[0];
$area_nema = $terms->name;
if (has_post_thumbnail()) {
    $i = get_the_post_thumbnail_url(get_the_ID(), 'large');
} else {
    $i = $wp_url.'/lib/images/no-img.png';
}

// ツアーフィールド
$group_size = get_field('group_size');
$overview = [
    'ttl' => get_field('overview_ttl'),
    'content' => get_field('overview_content'),
    'map' => get_field('overview_map')
];
$timeline = get_field('timeline');
?>

<section class="sec tour-detail">
<div class="wrap">
<p>Tours name</p>
<h2><?php echo $t; ?></h2>
<div class="meta">
<p><span>Area</span><?php echo $area_nema; ?></p>
<p><span>Group size</span><?php echo $group_size; ?></p>
</div>

<div class="tabs">

<input id="Overview" type="radio" name="tab_item" checked><label class="tab_item" for="Overview">Overview</label>
<input id="Attractions" type="radio" name="tab_item"><label class="tab_item" for="Attractions">Attractions</label>
<input id="Itinerary" type="radio" name="tab_item"><label class="tab_item" for="Itinerary">Itinerary</label>
<input id="Images" type="radio" name="tab_item"><label class="tab_item" for="Images">Images</label>
<input id="Tour-details" type="radio" name="tab_item"><label class="tab_item" for="Tour-details">Tour details</label>

<div class="tab_content" id="Overview_inner">
<div class="tab_content_description">
<figure>
<img src="<?php echo $i; ?>" alt="<?php echo $t; ?>">
</figure>
<h3><?php echo $overview['ttl']; ?></h3>
<p><?php echo $overview['content']; ?></p>
<div class="gmap">
<iframe src="https://www.google.com/maps?q=<?php echo $overview['map']['lat']; ?>,<?php echo $overview['map']['lng']; ?>&hl=jp&output=embed"></iframe>
</div>
</div>
</div>

<div class="tab_content" id="Attractions_inner">
<div class="tab_content_description">
<?php
for ($i=1; $i <= 6; $i++):
if (get_field('location_img_'.$i) == null || get_field('location_img_'.$i) == '') break;
$location_img = get_field('location_img_'.$i);
$location_ttl = get_field('location_ttl_'.$i);
$location_content = get_field('location_content_'.$i);
?>
<div class="attraction">
<div class="img">
<img src="<?php echo $location_img; ?>" alt="<?php echo $location_ttl; ?>">
</div>
<div class="txt">
<h3><?php echo $location_ttl; ?></h3>
<p><?php echo $location_content; ?></p>
</div>
</div>
<?php endfor; ?>
</div>
</div>

<div class="tab_content" id="Itinerary_inner">
<div class="tab_content_description">
<p><?php echo $timeline; ?></p>
</div>
</div>

<div class="tab_content" id="Images_inner">
<div class="tab_content_description">

</div>
</div>

<div class="tab_content" id="Tour-details_inner">
<div class="tab_content_description">

</div>
</div>

</div>

<div class="to-form">
<div class="img">
<img src="<?php echo $wp_url; ?>/lib/images/booking_img.png" alt="booking form">
</div>
<div class="txt txt-c">
<div>
<h3 class="crimson">Booking Inquiry From</h3>
<div class="btn-3">
<a href="">Apply</a>
</div>
</div>
</div>
</div>

</div>
</section>

<?php endwhile; endif; ?>
<?php get_footer();