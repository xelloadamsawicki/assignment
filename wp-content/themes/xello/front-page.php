<?php
/**
 * The front page template of the Xello assignment
 */

get_header(); ?>

  <div class="row">
    <div class="col-sm-6">
      <p><?php the_field('section_1_title'); ?></p>
      <h2><?php the_field('section_1_heading'); ?></h2>
      <p><?php the_field('section_1_content'); ?></p>
      <a href="<?php the_field('section_1_link'); ?>"><?php the_field('section_1_link_name'); ?></a>
    </div>
    <div class="col-sm-6">
      <form>
        <div class="form-group">
          <label for="input-1">Lorem ipsum</label>
          <input type="text" class="form-control" id="input-1" name="input-1" placeholder="Placeholder text">
        </div>
        <div class="form-group">
          <label for="input-2">Lorem ipsum</label>
          <input type="text" class="form-control" id="input-2" name="input-2" placeholder="Placeholder text">
        </div>
        <div class="form-check">
          <input type="checkbox" class="form-check-input" id="input-check">
          <label class="form-check-label" for="input-check">Check me out</label>
        </div>
        <button type="submit" class="btn btn-primary">Register</button>
      </form>
    </div>
  </div>

  <div class="row">
    <div class="col-sm-4">
      <?php $section_2_image = get_field('section_2_image'); ?>
      <img src="<?php echo $section_2_image['url']; ?>" alt="<?php echo $section_2_image['alt']; ?>" />
    </div>
    <div class="col-sm-8">
      <p><?php the_field('section_2_title'); ?></p>
      <h2><?php the_field('section_2_heading'); ?></h2>
      <p><?php the_field('section_2_content'); ?></p>
      <a href="<?php the_field('section_2_link'); ?>"><?php the_field('section_2_link_name'); ?></a>
    </div>
  </div>

  <div class="row">
    <div class="col-sm-6">
      <p><?php the_field('section_3_title'); ?></p>
      <h2><?php the_field('section_3_heading'); ?></h2>
      <p><?php the_field('section_3_content'); ?></p>
      <a href="<?php the_field('section_3_link'); ?>"><?php the_field('section_3_link_name'); ?></a>
    </div>
    <div class="col-sm-6">
      <?php $section_3_image = get_field('section_3_image'); ?>
      <img src="<?php echo $section_3_image['url']; ?>" alt="<?php echo $section_3_image['alt']; ?>" />
    </div>
  </div>

  <div class="row">
    <div class="col text-center">
      <?php $section_4_image = get_field('section_4_image'); ?>
      <img src="<?php echo $section_4_image['url']; ?>" alt="<?php echo $section_4_image['alt']; ?>" />
      <h2><?php the_field('section_4_heading'); ?></h2>
    </div>
  </div>

  <div class="row">
    <div class="col-sm-4 text-center">
      <?php $section_5_image_1 = get_field('section_5_image_1'); ?>
      <img src="<?php echo $section_5_image_1['url']; ?>" alt="<?php echo $section_5_image_1['alt']; ?>" />
      <h3><?php the_field('section_5_heading_1'); ?></h3>
      <p><?php the_field('section_5_content_1'); ?></p>
    </div>
    <div class="col-sm-4 text-center">
      <?php $section_5_image_2 = get_field('section_5_image_2'); ?>
      <img src="<?php echo $section_5_image_2['url']; ?>" alt="<?php echo $section_5_image_2['alt']; ?>" />
      <h3><?php the_field('section_5_heading_2'); ?></h3>
      <p><?php the_field('section_5_content_2'); ?></p>
    </div>
    <div class="col-sm-4 text-center">
      <?php $section_5_image_3 = get_field('section_5_image_3'); ?>
      <img src="<?php echo $section_5_image_3['url']; ?>" alt="<?php echo $section_5_image_3['alt']; ?>" />
      <h3><?php the_field('section_5_heading_3'); ?></h3>
      <p><?php the_field('section_5_content_3'); ?></p>
    </div>
  </div>

<?php get_footer();
