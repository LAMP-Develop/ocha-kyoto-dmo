<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
get_header(); ?>
<div class="mv-sub">
<img src="<?php echo $wp_url; ?>/lib/images/mv_about.png" alt="">
<h2 class="txt-c color-white"><?php echo get_the_title(); ?></h2>
</div>

<div class="sec">
<div class="wrap">
<p>This is a sightseeing plan for foreign tourists brought to you by MK Taxi, a taxi company based in Kyoto that operates in 8 cities nationwide. This plan allows you to explore Kyoto in a chartered taxi, and offers a wide selection of seven different hands-on experiences in the Yamashiro region (a famous tea-growing area in Kyoto), as well as 12 different tour routes.
<br>You can create a personalized itinerary by choosing your favorite hands-on experience from the seven options on offer, and combine it with any of the 12 available tour routes. After departing Kyoto city, you can relax and enjoy your 4 to 8-hour (including traveling time) sightseeing trip of the Yamashiro region by traveling in the comfort of the chartered taxi.
<br>
<br>The basic price for each plan will be the total of the cost of the selected hands-on experience and the chartered taxi fare. An English-speaking driver is included in all packages, but as an optional extra we can arrange for a professional interpreter to accompany you.
<br>
<br>For enquiries regarding the Taxi Tour Plan or details of the tour packages, please contact Ocha no Kyoto DMO. To make a reservation, please contact MK Travel directly.</p>
</div>
</div>

<section class="sec">
<div class="wrap">
<h2 class="ttl2"><span class="crimson">Model(image)</span></h2>
<p class="txt-c">
<img src="<?php echo $wp_url; ?>/lib/images/mk_taxi.png" alt="">
</p>
</div>
</section>

<section class="sec mk-taxi">
<div class="wrap">
<h2 class="ttl2"><span class="crimson">Taxi Rates(tax incl.)</span></h2>
<p>■Standard (Mar 21–Jun 20, Oct 1–Nov 30)　■Off season (All other dates)</p>
<?php the_content(); ?>
<p>※With English speaking driver.<br>※Rates are based on pickup/drop-off from the MK Taxi VIP Station at Kyoto Station Hachijoguchi, but pickup/dropoff from any hotel in Kyoto can be arranged at no additional charge.</p>
</div>
</section>

<section class="sec">
<div class="wrap">
<h2 class="ttl2"><span class="crimson">Interpreter Guide Rates (tax incl.)</span></h2>
<p>■Standard (Mar 1– May 31, Oct 1– Nov 30)　■Off season (All other dates)</p>
<div class="guide-rates">
<table class="wp-block-advgb-table advgb-table-frontend inner">
<tbody>
<tr>
<td></td>
<td>Standard</td>
<td>Off season</td>
</tr>
<tr>
<td>4 hrs</td>
<td>25,000 JPY</td>
<td>20,000 JPY</td>
</tr>
</tbody>
</table>
<p class="inner">※Interpreter Guide Cancellation Fees
<br>Should you wish to cancel your interpreter booking, the following cancellation fees will apply:
<br>More than 2 days prior to departure = Basic Fee x No.Days Booked @ 60%
<br>Within 1 day prior to departure = Basic Fee x No.Days Booked @ 80%
<br>Same-day of departure = Basic Fee x No.Days Booked @ 100%</p>
</div>
</div>
</section>

<section class="sec">
<div class="wrap">
<h2 class="ttl2"><span class="crimson">Contact</span></h2>
<div class="guide-rates">
<div class="inner">
<p><img src="<?php echo $wp_url; ?>/lib/images/mk_tel.png" alt=""></p>
<p><img src="<?php echo $wp_url; ?>/lib/images/dmo_contact.png" alt=""></p>
</div>
<div class="inner">
<p><img src="<?php echo $wp_url; ?>/lib/images/mk_map.png" alt=""></p>
</div>
</div>
</div>
</section>
<?php get_footer();