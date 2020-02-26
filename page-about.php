<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
get_header(); ?>
<div class="mv-sub">
<img src="<?php echo $wp_url; ?>/lib/images/mv_about.png" alt="">
<h2 class="txt-c color-white"><?php echo get_the_title(); ?></h2>
</div>
<section class="sec">
<div class="wrap">
<h2 class="txt-c ttl2">
<span>＜The birthplace of Japanese tea＞
<br>A heartwarming and enchanting experience in a real village</span>
</h2>
<p>Hidden Kyoto (Kyoto Tea Countryside Tour)takes you to the home of the popular tea brand Uji synonymous with Japanese tea to experience the charm and relaxing countryside it represents.
<br>
<br>Located away from the hustle and bustle, yet in close proximity to the major sightseeing cities of Kyoto, Nara and Osaka, Uji surrounded by rich greenery of the tea plantations and rice fields is in total contrast to the nearby urban landscape. Discover here Satoyama style rural Japan where people have coexisted and manage mountains, forests and farmland in a sustainable lifestyle for centuries.
<br>
<br>Explore the shrines, temples, the old merchant quarters of the tea wholesale district etc the local community inherited from their ancestors and not found in any guide book. Your encounters with the local community of simple village folks here at their hometown could stand out as one of your best memories in Japan.</p>
</div>
</section>
<?php get_footer();