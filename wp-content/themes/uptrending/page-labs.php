<?php
/*
 Template Name: Labs
 *
 * This is your custom page template. You can create as many of these as you need.
 * Simply name is "page-whatever.php" and in add the "Template Name" title at the
 * top, the same way it is here.
 *
 * When you create your page, you can just select the template and viola, you have
 * a custom page template to call your very own. Your mother would be so proud.
 *
 * For more info: http://codex.wordpress.org/Page_Templates
*/
?>

<?php get_header(); ?>

<div class="section hero">
  <div class="bgImage" style="background-image: url(<?= the_field('hero_background_image'); ?>)">
    <div class="container container--narrow">
      <div class="hero-tagline"><?php the_field('hero_tagline'); ?></div>
      <div class="hero-subTagline"><?php the_field('hero_sub_tagline'); ?></div>

      <?php if( get_field('anchor_scroll_link') ): ?>
        <a class="hero-anchorLink" href="<?php the_field('anchor_scroll_link'); ?>"></a>
      <?php endif; ?>
    </div>
  </div>
</div>

<div class="section labsList">
  <div class="container">
    <div class="grid labsList-grid">
      <?php $labs = get_field('labs'); if( $labs ): ?>
        <?php foreach( $labs as $post): setup_postdata($post); ?>
          <div class="grid-1of3 grid-1of2--lap grid-1of1--palm">
            <div class="lab">
              <div class="lab-top" style="background-color: <?php the_field('card_background_color'); ?>; background-image: url(<?= the_field('card_background_image'); ?>);">
              </div>
              <div class="lab-bottom">

              </div>
            </div>
          </div>
        <?php endforeach; wp_reset_postdata(); ?>
      <?php endif; ?>
      <div class="grid-1of3 grid-1of2--lap grid-1of1--palm">
        <div class="labsCta">
          <div class="labsCta-title"><?php the_field('labs_cta_title'); ?></div>
          <div class="labsCta-paragraph"><?php the_field('labs_cta_paragraph'); ?></div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php get_footer(); ?>
