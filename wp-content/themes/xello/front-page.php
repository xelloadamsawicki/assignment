<?php
/**
 * The front page template of the Xello assignment
 */

get_header(); ?>

  <div class="section-1 section row no-gutters">
    <div class="col-sm-6 align-self-center">
      <p class="section-title"><?php the_field('section_1_title'); ?></p>
      <h2><?php the_field('section_1_heading'); ?></h2>
      <p><?php the_field('section_1_content'); ?></p>
      <a href="<?php the_field('section_1_link'); ?>"><?php the_field('section_1_link_name'); ?></a>
    </div>
    <div class="col-sm-5 offset-sm-1 align-self-center">
      <?php echo do_shortcode('[contact-form-7 id="35" title="Home Page"]'); ?>
    </div>
  </div>

  <div class="section-2 section row no-gutters">
    <div class="col-sm-4 align-self-center text-center">
      <?php $section_2_image = get_field('section_2_image'); ?>
      <img class="img-fluid" src="<?php echo $section_2_image['url']; ?>" alt="<?php echo $section_2_image['alt']; ?>" />
    </div>
    <div class="col-sm-7 offset-sm-1 align-self-center">
      <p class="section-title"><?php the_field('section_2_title'); ?></p>
      <h2><?php the_field('section_2_heading'); ?></h2>
      <p><?php the_field('section_2_content'); ?></p>
      <a href="<?php the_field('section_2_link'); ?>"><?php the_field('section_2_link_name'); ?></a>
    </div>
  </div>

  <hr class="d-xs-block d-sm-none" />

  <div class="section-3 section row no-gutters">
    <div class="col-sm-6 align-self-center">
      <p><?php the_field('section_3_title'); ?></p>
      <h2><?php the_field('section_3_heading'); ?></h2>
      <p><?php the_field('section_3_content'); ?></p>
      <a href="<?php the_field('section_3_link'); ?>"><?php the_field('section_3_link_name'); ?></a>
    </div>
    <div class="col-sm-5 offset-sm-1 align-self-center text-center">
      <?php $section_3_image = get_field('section_3_image'); ?>
      <img class="img-fluid" src="<?php echo $section_3_image['url']; ?>" alt="<?php echo $section_3_image['alt']; ?>" />
    </div>
  </div>

  <div class="section-4 section row no-gutters">
    <div class="col text-center">
      <?php $section_4_image = get_field('section_4_image'); ?>
      <img class="img-fluid" src="<?php echo $section_4_image['url']; ?>" alt="<?php echo $section_4_image['alt']; ?>" />
      <h2><?php the_field('section_4_heading'); ?></h2>
    </div>
  </div>

  <div class="section-5 section row no-gutters">
    <div class="feature col-sm-4 text-center">
      <?php $section_5_image_1 = get_field('section_5_image_1'); ?>
      <img class="img-fluid" src="<?php echo $section_5_image_1['url']; ?>" alt="<?php echo $section_5_image_1['alt']; ?>" />
      <h3><?php the_field('section_5_heading_1'); ?></h3>
      <p><?php the_field('section_5_content_1'); ?></p>
    </div>
    <div class="feature col-sm-4 text-center">
      <?php $section_5_image_2 = get_field('section_5_image_2'); ?>
      <img class="img-fluid" src="<?php echo $section_5_image_2['url']; ?>" alt="<?php echo $section_5_image_2['alt']; ?>" />
      <h3><?php the_field('section_5_heading_2'); ?></h3>
      <p><?php the_field('section_5_content_2'); ?></p>
    </div>
    <div class="feature col-sm-4 text-center">
      <?php $section_5_image_3 = get_field('section_5_image_3'); ?>
      <img class="img-fluid" src="<?php echo $section_5_image_3['url']; ?>" alt="<?php echo $section_5_image_3['alt']; ?>" />
      <h3><?php the_field('section_5_heading_3'); ?></h3>
      <p><?php the_field('section_5_content_3'); ?></p>
    </div>
  </div>

<?php get_footer();
