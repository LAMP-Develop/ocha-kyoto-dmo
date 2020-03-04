<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
get_header(); ?>
<div class="mv">
<img src="<?php echo $wp_url; ?>/lib/images/mv01.png" alt="">
<img src="<?php echo $wp_url; ?>/lib/images/mv02.png" alt="">
<img src="<?php echo $wp_url; ?>/lib/images/mv03.png" alt="">
<img src="<?php echo $wp_url; ?>/lib/images/mv04.png" alt="">
<img src="<?php echo $wp_url; ?>/lib/images/mv05.png" alt="">
</div>

<div class="lead sec">
<div class="wrap">
<h2 class="ttl2 txt-c"><span class="uppercase crimson">Hidden Kyoto Countryside Tour.</span></h2>
<p>The Yamashiro area in southern Kyoto prefecture is the historical center of Japanese green tea production in Kyoto. It covers an area that includes 12 cities, towns and villages. It has long flourished as a hub of people, goods and culture, with many significant temples and shrines being constructed here. In addition to the Unesco World Heritage sites of Byodo-in Temple and Ujigami Shrine in Uji, exquisite temples and shrines designated as National Treasures and important cultural properties are dotted around the area.
<br>But it is the humble tea plant that unites the area and continues to attract visitors from all over the world, eager to unearth its green tea secrets. From its picturesque tea fields, historic buildings and serene temples and shrines, to its contemporary architecture and restaurants, the Yamashiro area reveals a history and culture deeply intertwined with its 800-year tea heritage. Compared with the ever-popular Kyoto and Nara, Yamashiro benefits from being off the main tourist trail, affording the adventurous traveler an authentic Japanese experience without the crowds. Immerse yourself in this ancient land and your next cup of green tea will never have tasted better.</p>
<p class="txt-c">
<img src="<?php echo $wp_url; ?>/lib/images/top_map.png" alt="">
</p>
</div>
</div>

<section id="tours" class="sec">
<div class="wrap">
<h2 class="ttl2 txt-c">
<span class="uppercase crimson">tours</span>
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
$args = [
    'parent' => 38
];
$terms = get_terms('tour_cat', $args)[0];
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
<p><?php echo $terms->name; ?></p>
</a>
</div>
<?php endforeach; wp_reset_postdata(); ?>
</div>
</div>
<div class="wrap">
<p class="color-secondary txt-c mt-3"><span class="b big">DMO Tour 2nd Edition！</span>
<br>We are now planning to organize Kyoto countryside guided tour.
<br>We would like to specialize unique, private and day tour in Kyoto tea country.
<br>Just wait till you see what’s coming next version !
</p>
<div class="btn txt-c mt-2">
<a class="crimson" href="<?php echo $home; ?>/tours/">More</a>
</div>
<h2 class="ttl2 txt-c mt-3">
<span class="uppercase crimson">The  history of Kyoto Tea Country.</span>
</h2>
<p>The Yamashiro area located in the southern part of Kyoto Prefecture is naturally blessed with the soil and climate suited to tea cultivation. Tea fields were first established in the Uji area during the Kamakura period (1185–1333) when the monk Myoe introduced seeds to villagers on return from his travels in China.
<br>So began an 800-year history of tea cultivation and culture in Yamashiro, with Uji tea soon establishing itself as the most prized brand of tea during the Muromachi period (1336–1573), becoming the tea of choice for even the shogunate. This official endorsement prompted the establishment of the first dedicated premium tea plantation in Uji, Shichimeien.
<br>Later during the Sengoku (feudal) era, the act of drinking tea was elevated to a Zen-like pursuit by tea master Sen no Rikyu and grew in popularity with the samurai class. The tea ceremony was born, ushering in a new era of tea appreciation and the demand for premium tea skyrocketed.
<br>Forced to up their game, the Uji farmers responded by developing a covered growing technique for cultivating the richest, most flavorsome tencha leaves, used to grind into the vibrant green matcha powdered tea used during the tea ceremony.
<br>In the Edo era, Nagatani Soen developed a ground-breaking new method of steaming and rolling tea leaves, that resulted in a tea that retained its green color and intense flavor, a far cry from the sun-dried brown tea that had been the norm up until then. His technique sparked a revolution in sencha production, that remains largely unchanged to this day.
<br>It was not long before Uji growers were able to take advantage of Soens’ new steaming and rolling techniques, and apply it to their own shade-grown leaves, bringing to market the most coveted of all premium green teas - gyokuro.
<br>Uji became synonymous with premium tea production and during the Meiji era (1868–1912) as Japanese tea began to reach foreign shores, the area of tea production rapidly expanded from the hillsides to the tops of the mountains, shaping the landscape that still exists to this day.
<br>In 2015, the history and culture of Uji tea and its picturesque tea fields collectively received Japan Heritage status as “A Walk through the 800-year History of Japanese Tea”.
<br>Supported by the patronage of emperors throughout the centuries including Nobunaga, Hideyoshi, and Ieyasu, the Uji brand has continually set the standard for tea production in Japan. Through innovation, expansion and by embracing new technology in the pursuit of unerring quality, Uji is the birthplace of the green tea we know today - of sencha, matcha and gyokuro.
<br>Journey through Yamashiro and follow the trail of tea, discovering a culture that has existed for over 800 years.</p>
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
<span class="uppercase crimson">Model Course</span>
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
$terms = get_terms('model_course_cat', $args)[0];
if (has_post_thumbnail()) {
    $i = get_the_post_thumbnail_url(get_the_ID(), 'large');
} else {
    $i = $wp_url.'/lib/images/no-img.png';
}
?>
<article class="posts">
<a href="<?php echo $p; ?>">
<figure>
<span class="cat"><?php echo $terms->name; ?></span>
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
<h2 class="ttl2 txt-c">
<span class="uppercase crimson">EVENTS</span>
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
$terms = get_terms('model_course_cat', $args)[0];
if (has_post_thumbnail()) {
    $i = get_the_post_thumbnail_url(get_the_ID(), 'large');
} else {
    $i = $wp_url.'/lib/images/no-img.png';
}
?>
<article class="posts">
<a href="<?php echo $p; ?>">
<figure>
<span class="cat"><?php echo $terms->name; ?></span>
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
<div class="grid-container">
<div class="movie">
<img src="<?php echo $wp_url; ?>/lib/images/youtube_sample.png" alt="">
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
<div class="wrap">
<h2 class="ttl2">
<span class="crimson">Photo Gallery</span>
</h2>
</div>
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
<div class="btn txt-c mt-2">
<a class="crimson" href="https://www.instagram.com/ochanokyotodmo/" target="_blank"><i class="fab fa-instagram mr-05"></i>Instagram</a>
</div>
<div class="mt-3 txt-c">
<a href="<?php echo $hoem; ?>/gallery/">
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
