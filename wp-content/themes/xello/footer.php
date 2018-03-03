      </main>

      <footer>
        <img class="footer-logo mx-auto" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/xello-logo.svg" alt="Reach out to Xello today" />
        <div class="footer-social text-center">
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

      <?php wp_footer(); ?>

    </div> <!-- /.container -->

  </body>

</html>