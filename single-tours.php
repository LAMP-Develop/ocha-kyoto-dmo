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
$taxi_base = get_field('basic_price');
$taxi_level = get_field('taxi_level');
$taxi_price = get_field('guide_price');
$accessmap = get_field('accessmap');
?>

<section class="sec tour-detail">
<div class="wrap">
<p class="meta-small">Tours name</p>
<h2><?php echo $t; ?></h2>
<div class="meta">
<div class="metas">
<p><span class="meta-small">Area</span><?php echo $area_nema; ?></p>
<p><span class="meta-small">Group size</span><?php echo $group_size; ?></p>
</div>
<div class="btn-3">
<a href="">Apply for this tour</a>
</div>
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
if (get_field('location_img_'.$i) == null || get_field('location_img_'.$i) == '') {
    break;
}
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
<?php
$tours_imgs = [];
for ($i=1; $i <= 9 ; $i++) {
    if (get_field('tour_img_'.$i) != null && get_field('tour_img_'.$i) != '') {
        $tours_imgs[] = get_field('tour_img_'.$i);
    }
}
?>
<div class="tours-img">
<div class="img">
<img src="<?php echo $tours_imgs[0]; ?>" alt="">
</div>
<div class="nav-for">
<?php foreach ($tours_imgs as $key => $img): ?>
<div data-src="<?php echo $img; ?>" class="imgs">
<img src="<?php echo $img; ?>" alt="">
</div>
<?php endforeach; ?>
</div>
</div>
</div>
</div>

<div class="tab_content" id="Tour-details_inner">
<div class="tab_content_description">
<div class="tour-details">
<div class="table">
<table>
<?php if (get_field('price')): ?>
<tr>
<td>Charge per person</td>
<td><?php the_field('price'); ?></td>
</tr>
<?php endif; ?>
<?php if (get_field('coupon')): ?>
<tr>
<td>Additional benefits</td>
<td><?php the_field('coupon'); ?></td>
</tr>
<?php endif; ?>
<?php if (get_field('date')): ?>
<tr>
<td>Date</td>
<td><?php the_field('date'); ?></td>
</tr>
<?php endif; ?>
<?php if ($group_size): ?>
<tr>
<td>Group size</td>
<td><?php echo $group_size; ?></td>
</tr>
<?php endif; ?>
<?php if (get_field('languages')): ?>
<tr>
<td>Language</td>
<td><?php the_field('languages'); ?></td>
</tr>
<?php endif; ?>
<?php if (get_field('time')): ?>
<tr>
<td>Time</td>
<td><?php the_field('time'); ?></td>
</tr>
<?php endif; ?>
<?php if (get_field('meeting_point')): ?>
<tr>
<td>Meeting Point</td>
<td><?php the_field('meeting_point'); ?></td>
</tr>
<?php endif; ?>
</table>
</div>
<div class="precautions">
<p><?php the_field('precautions'); ?></p>
</div>
</div>

<div class="taxi-charge mt-3">
<h3 class="ttl3 crimson">Charge(tax incl.)</h3>
<div class="taxi-charge-table">
<div class="inner">
<h4>■Rates (2–8 people)</h4>
<table>
<?php
$no = 2;
foreach ($taxi_base as $key => $taxi): ?>
<tr>
<td><?php echo $no; ?> people</td>
<td><?php echo $taxi; ?></td>
</tr>
<?php $no++; endforeach; ?>
</table>
</div>

<div class="inner txt-c">
<i class="fas fa-plus color-primary"></i>
</div>

<div class="inner">
<h4>■Taxi Rates (4 hrs)</h4>
<table>
<?php
$no = 4;
foreach ($taxi_level as $key => $taxi): ?>
<tr>
<td><?php echo $no; ?> seater</td>
<td><?php echo $taxi; ?></td>
</tr>
<?php $no++;$no++; endforeach; ?>
</table>
<h4 class="mt-2">■Interpreter Guide Rates (4 hrs)</h4>
<table>
<?php
foreach ($taxi_price as $key => $taxi): ?>
<tr>
<td><?php $key == 'guide_standard' ? print 'Standard': print 'Off season'; ?></td>
<td><?php echo $taxi; ?></td>
</tr>
<?php endforeach; ?>
</table>
</div>

</div>
<p><small>※Please enquire about groups larger than 8 people.</small>
<br><small>※With English speaking driver.</small>
<br><small>※Tours can be extended beyond 4 hours for an additional hourly fee. See the rate table on p.3 for details.</small>
<br><small>※An English-speaking driver is included in all packages, but as an optional extra we can arrange for a professional interpreter to accompany you. See the rate table on p.3 for details.</small></p>
<div class="btn txt-c mt-2">
<a class="crimson" href="<?php echo $home; ?>/about-mk/" target="_blank">Private Day-trips by Chartered Taxi?</a>
</div>
</div>

<?php if ($accessmap): ?>
<div class="access-map mt-3">
<h3 class="ttl3 crimson">ACCESS MAP</h3>
<p class="txt-c">
<img src="<?php echo $accessmap; ?>" alt="">
</p>
</div>
<?php endif; ?>

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
<a href="">Apply for this tour</a>
</div>
</div>
</div>
</div>

</div>
</section>

<?php endwhile; endif; ?>
<?php get_footer();
