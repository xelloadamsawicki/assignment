      </main>

      <footer>
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/xello-logo.svg" alt="Reach out to Xello today" />
        <div class="text-center">
          <a href="<?php the_field('social_link_1'); ?>">
            <?php $social_icon_1 = get_field('social_icon_1'); ?>
            <img src="<?php echo $social_icon_1['url']; ?>" alt="<?php echo $social_icon_1['alt']; ?>" />
          </a>
          <a href="<?php the_field('social_link_2'); ?>">
            <?php $social_icon_2 = get_field('social_icon_2'); ?>
            <img src="<?php echo $social_icon_2['url']; ?>" alt="<?php echo $social_icon_2['alt']; ?>" />
          </a>
          <a href="<?php the_field('social_link_3'); ?>">
            <?php $social_icon_3 = get_field('social_icon_3'); ?>
            <img src="<?php echo $social_icon_3['url']; ?>" alt="<?php echo $social_icon_3['alt']; ?>" />
          </a>
          <a href="<?php the_field('social_link_4'); ?>">
            <?php $social_icon_4 = get_field('social_icon_4'); ?>
            <img src="<?php echo $social_icon_4['url']; ?>" alt="<?php echo $social_icon_4['alt']; ?>" />
          </a>
        </div>
      </footer>

      <?php // wp_footer(); ?>

    </div> <!-- /.container -->

  </body>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</html>