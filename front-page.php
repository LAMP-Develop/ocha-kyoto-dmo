<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
get_header(); ?>
<div class="mv">
<img src="<?php echo $wp_url; ?>/lib/images/mv1.jpg" alt="">
<img src="<?php echo $wp_url; ?>/lib/images/mv2.jpg" alt="">
<img src="<?php echo $wp_url; ?>/lib/images/mv3.jpg" alt="">
<img src="<?php echo $wp_url; ?>/lib/images/mv4.jpg" alt="">
<img src="<?php echo $wp_url; ?>/lib/images/mv5.jpg" alt="">
</div>

<div class="lead sec">
<div class="wrap">
<h2 class="txt-c ttl2">
<span>＜The birthplace of Japanese tea＞
<br>A heartwarming and enchanting experience in a real village</span>
</h2>
<p>Hidden Kyoto (Kyoto Countryside Tour)takes you to the home of the popular tea brand Uji synonymous with Japanese tea to experience the charm and relaxing countryside it represents.
<br>
<br>Located away from the hustle and bustle, yet in close proximity to the major sightseeing cities of Kyoto, Nara and Osaka, Uji surrounded by rich greenery of the tea plantations and rice fields is in total contrast to the nearby urban landscape. Discover here Satoyama style rural Japan where people have coexisted and manage mountains, forests and farmland in a sustainable lifestyle for centuries.
<br>
<br>Explore the shrines, temples, the old merchant quarters of the tea wholesale district etc the local community inherited from their ancestors and not found in any guide book. Your encounters with the local community of simple village folks here at their hometown could stand out as one of your best memories in Japan.</p>
<p class="txt-c">
<img src="<?php echo $wp_url; ?>/lib/images/top_map.png" alt="">
</p>
<div class="btn txt-c mt-2">
<a class="crimson" href="<?php echo $home; ?>/pdf/rootmap.pdf">Root map</a>
</div>
</div>
</div>

<section id="tours" class="sec">
<div class="wrap">
<h2 class="ttl2 txt-c">
<span class="uppercase crimson">HIDDEN KYOTO COUNTRYSIDE TOUR</span>
<img src="<?php echo $wp_url; ?>/lib/images/icon_tours.png" alt="tours">
</h2>
</div>
<div class="tours-slider-wrap">
<div class="bg-tex"></div>
<div class="tours-slider">
<?php
$args = [
    'posts_per_page' => 10,
    'post_type' => 'tours',
    'orderby' => 'date',
    'order' => 'DESC'
];
$posts = get_posts($args);
foreach ($posts as $post): setup_postdata($post);
$t = get_the_title();
$p = get_the_permalink();
$terms = get_the_terms(get_the_ID(),'tour_cat');
foreach ($terms as $key => $val) {
    if ($val->parent === 38) {
        $area_name = $val->name;
        break;
    }
}
if (has_post_thumbnail()) {
    $i = get_the_post_thumbnail_url(get_the_ID(), 'large');
} else {
    $i = $wp_url.'/lib/images/no-img.png';
}
?>
<div class="inner">
<a href="<?php echo $p; ?>">
<div class="img">
<img src="<?php echo $i; ?>" alt="<?php echo $t; ?>">
</div>
<h3><?php echo $t; ?></h3>
<p><?php echo $area_name; ?></p>
</a>
</div>
<?php endforeach; wp_reset_postdata(); ?>
</div>
</div>
<div class="wrap">

<div class="dmp-2nd">
<img src="<?php echo $wp_url; ?>/lib/images/dmo_2nd_inner.png" alt="">
</div>

<div class="btn txt-c mt-2">
<a class="crimson" href="<?php echo $home; ?>/tours/">More</a>
</div>
</div>
</section>

<section id="charm" class="sec">
<div class="charms">
<div class="inner">
<a href="<?php echo $home; ?>/charms#uji-city">
<h3>UJI CITY</h3>
<p>Already famous as a tourist destination as much for its green tea houses as its Unesco World Heritage sites of Byodo-in Temple and Ujigami Shrine. The perfect beginning to any exploration of the area.</p>
</a>
</div>
<div class="inner">
<a href="<?php echo $home; ?>/charms#joyo-city">
<h3>JOYO CITY</h3>
<p>Joyo, located between Kyoto and Nara, is the birth place at Gyokuro tea leaves and an ancient town famous for its historical tombs and sites.</p>
</a>
</div>
<div class="inner">
<a href="<?php echo $home; ?>/charms#yawata-city">
<h3>YAWATA CITY</h3>
<p>A culturally important town centered around the impressive Iwashimizu Hachimangu Shrine and the beautiful Shokado Japanese gardens - famous for its Shokado Bento lunchbox.</p>
</a>
</div>
<div class="inner">
<a href="<?php echo $home; ?>/charms#kyotanabe-city">
<h3>KYOTANABE CITY</h3>
<p>Famous for its Ikkyu-ji Temple - where the renowned Zen buddhist monk Ikkyu Sojun spent his last days-and for its production of premium Gyokuro tea leaves.</p>
</a>
</div>
<div class="inner">
<a href="<?php echo $home; ?>/charms#kidugawa-city">
<h3>KIZUGAWA CITY</h3>
<p>Kizugawa City sits at the southernmost tip of Kyoto Prefecture and is second only to Kyoto City for its sheer number of national treasures and important cultural assets.</p>
</a>
</div>
<div class="inner">
<a href="<?php echo $home; ?>/charms#kumiyama-town">
<h3>KUMIYAMA TOWN</h3>
<p>A hub of industry centered around the Ujigawa and Kizugawa rivers, Kumiyama is also famous for its production of Kyo-yasai Kyoto vegetables.</p>
</a>
</div>
<div class="inner">
<a href="<?php echo $home; ?>/charms#ide-town">
<h3>IDE TOWN</h3>
<p>Tucked between the ancient walking paths that span the mountains connecting Kyoto and Nara, Ide Town is a hiker’s paradise. Enjoy the Tamagawa River cherry blossoms in spring and catch a glimpse of fireflies along the Minami Tanigawa river in June.</p>
</a>
</div>
<div class="inner">
<a href="<?php echo $home; ?>/charms#ujitawara-town">
<h3>UJITAWARA TOWN</h3>
<p>Birthplace of the 18th Century tea master Nagatani Soen, who developed a revolutionary new method of steaming and rolling green tea that has remained largely unchanged to this day.</p>
</a>
</div>
<div class="inner">
<a href="<?php echo $home; ?>/charms#kasagi-town">
<h3>KASAGI TOWN</h3>
<p>Surrounded by unspoilt nature, Kasagi Town boasts the serene mountain top Kasagi-dera Temple, whose enormous buddha effigies carved into the Rock face is a sight to behold.</p>
</a>
</div>
<div class="inner">
<a href="<?php echo $home; ?>/charms#wazuka-town">
<h3>WAZUKA TOWN</h3>
<p>Cameras at the ready when visiting Wazuka Town, whose hills are covered in perfectly manicured tea fields. The farm dwellings framed against the rows of tea evoke a rural landscape untouched by time.</p>
</a>
</div>
<div class="inner">
<a href="<?php echo $home; ?>/charms#seika-town">
<h3>SEIKA TOWN</h3>
<p>A prosperous town with a sweet tooth, as its plethora of cake shops and bakeries attest. Try strawberry picking in early spring or taking a stroll through the large Keihanna Commemorative Park.</p>
</a>
</div>
<div class="inner">
<a href="<?php echo $home; ?>/charms#minami-yamashiro-town">
<h3>MINAMI YAMASHIRO TOWN</h3>
<p>A popular destination for cyclists who are drawn to its rural back roads and steep picturesque climbs, Minami Yamashiro is blessed with verdant nature.</p>
</a>
</div>
</div>
</section>

<section class="sec">
<div class="wrap">
<h2 class="ttl2 txt-c">
<span class="uppercase crimson">ADDITIONAL ITINERARIES</span>
<img src="<?php echo $wp_url; ?>/lib/images/icon_tours.png" alt="tours">
</h2>
<div class="tours-slider-wrap">
<div class="bg-tex"></div>
<div class="posts-list">
<?php
$args = [
    'posts_per_page' => 3,
    'post_type' => 'model_course',
    'orderby' => 'date',
    'order' => 'DESC'
];
$posts = get_posts($args);
foreach ($posts as $post): setup_postdata($post);
$t = get_the_title();
$p = get_the_permalink();
$terms = (array)get_the_terms(get_the_ID(),'model_course_cat');
foreach ($terms as $key => $val) {
    $area_name = $val->name;
}
if (has_post_thumbnail()) {
    $i = get_the_post_thumbnail_url(get_the_ID(), 'large');
} else {
    $i = $wp_url.'/lib/images/no-img.png';
}
?>
<article class="posts">
<a href="<?php echo $p; ?>">
<figure>
<span class="cat"><?php echo $area_name; ?></span>
<img src="<?php echo $i; ?>" alt="">
</figure>
<h3><?php echo $t; ?></h3>
<time class="crimson" datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('m.d.Y'); ?></time>
</a>
</article>
<?php endforeach; wp_reset_postdata(); ?>
</div>
</div>
<div class="btn txt-c mt-2">
<a class="crimson" href="<?php echo $home; ?>/model_course/">More</a>
</div>
</div>
</section>

<section class="sec">
<div class="wrap">
<h2 class="ttl2 txt-c">
<span class="uppercase crimson">EVENT</span>
<img src="<?php echo $wp_url; ?>/lib/images/icon_events.png" alt="tours">
</h2>
<div class="tours-slider-wrap">
<div class="bg-tex"></div>
<div class="posts-list">
<?php
$args = [
    'posts_per_page' => 3,
    'post_type' => 'events',
    'orderby' => 'date',
    'order' => 'DESC'
];
$posts = get_posts($args);
foreach ($posts as $post): setup_postdata($post);
$t = get_the_title();
$p = get_the_permalink();
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
<article class="posts">
<a href="<?php echo $p; ?>">
<figure>
<span class="cat"><?php echo $area_name; ?></span>
<img src="<?php echo $i; ?>" alt="">
</figure>
<h3><?php echo $t; ?></h3>
<time class="crimson" datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('m.d.Y'); ?></time>
</a>
</article>
<?php endforeach; wp_reset_postdata(); ?>
</div>
</div>
<div class="btn txt-c mt-2">
<a class="crimson" href="<?php echo $home; ?>/events/">More</a>
</div>
</div>
</section>

<section class="sec">
<div class="wrap">
<div class="grid-container">
<div class="movie">
<img src="<?php echo $wp_url; ?>/lib/images/youtube_banner.jpg" alt="">
<div class="abs">
<h2 class="color-white">DMO tour in Video</h2>
<div class="btn-2 mt-1">
<a class="crimson" href="https://www.youtube.com/channel/UC6rj9P6GqctRmQY5TK0MZpg" target="_blank">YouTube Channel</a>
</div>
</div>
</div>
<div class="youtube-1">
<iframe src="https://www.youtube.com/embed/uvJpbimn8Gg"></iframe>
</div>
<div class="youtube-2">
<iframe src="https://www.youtube.com/embed/2u6GYNpUnKs"></iframe>
</div>
<div class="youtube-3">
<iframe src="https://www.youtube.com/embed/P3_Bi2kMw3U"></iframe>
</div>
</div>
</div>
</section>

<section class="sec">
<div class="gallery-pics">
<?php
$args = [
    'posts_per_page' => 10,
    'post_type' => 'gallery'
];
$posts = get_posts($args);
foreach ($posts as $post): setup_postdata($post);
$pics = get_field('gallery_pic', get_the_ID());
if ($pics === null || $pics === '') {
    continue;
}
?>
<img src="<?php echo $pics; ?>" alt="ギャラリー">
<?php endforeach; wp_reset_postdata(); ?>
</div>
<div class="wrap">
<!-- <div class="btn txt-c mt-2">
<a class="crimson" href="https://www.instagram.com/ochanokyotodmo/" target="_blank"><i class="fab fa-instagram mr-05"></i>Instagram</a>
</div> -->
<div class="mt-3 txt-c">
<a href="<?php echo $home; ?>/gallery/">
<img src="<?php echo $wp_url; ?>/lib/images/bnr_gallery.png" alt="">
</a>
</div>
</div>
</section>

<section class="sec">
<div class="wrap">
<h2 class="ttl2-2">
<span class="crimson">BLOG</span>
<a href="<?php echo $home; ?>/blog/">Read More<i class="fas fa-chevron-circle-right ml-05 color-primary"></i></a>
</h2>
<div class="posts-list">
<?php
$args = [
    'posts_per_page' => 3,
    'post_type' => 'post',
    'orderby' => 'date',
    'order' => 'DESC'
];
$posts = get_posts($args);
foreach ($posts as $post): setup_postdata($post);
$t = get_the_title();
$p = get_the_permalink();
if (has_post_thumbnail()) {
    $i = get_the_post_thumbnail_url(get_the_ID(), 'large');
} else {
    $i = $wp_url.'/lib/images/no-img.png';
}
?>
<article class="posts">
<a href="<?php echo $p; ?>">
<figure>
<img src="<?php echo $i; ?>" alt="<?php echo $t; ?>">
</figure>
<h3><?php echo $t; ?></h3>
<time class="crimson" datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('m.d.Y'); ?></time>
</a>
</article>
<?php endforeach; wp_reset_postdata(); ?>
</div>
</div>
</section>

<section class="sec">
<div class="wrap news-wrap">
<div class="news">
<h2 class="ttl2-2">
<span class="crimson">NEWS</span>
<a href="<?php echo $home; ?>/news/">Read More<i class="fas fa-chevron-circle-right ml-05 color-primary"></i></a>
</h2>
<div class="news-list">
<?php
$args = [
    'posts_per_page' => 4,
    'post_type' => 'news',
    'orderby' => 'date',
    'order' => 'DESC'
];
$posts = get_posts($args);
foreach ($posts as $post): setup_postdata($post);
$t = get_the_title();
$p = get_the_permalink();
?>
<a href="<?php echo $p; ?>">
<time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('m.d.Y'); ?></time>
<p><?php echo $t; ?></p>
</a>
<?php endforeach; wp_reset_postdata(); ?>
</div>
</div>
<div class="facebook">
<h2 class="ttl2-2">
<span class="crimson">Facebook</span>
</h2>
<div class="fb-feed txt-c">
<iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fochanokyoto%2F&tabs=timeline&width=340&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=false&appId=321970501560993" width="340" height="340" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
</div>
</div>
</div>
</section>

<?php get_footer();
