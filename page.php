<?php

  // Calling header
  get_header();


    while(have_posts())
    {
        the_post();
        ?>

          <h1>Page.php
            <?php
              the_title();
              ?>
          </h1>
          <?php

    }


    // Calling footer
    get_footer();


?>