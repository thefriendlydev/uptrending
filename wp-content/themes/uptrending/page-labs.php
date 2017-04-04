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

<div class="section labs">
  <div class="container">

  </div>
</div>

<?php get_footer(); ?>
