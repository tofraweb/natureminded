<?php
/*
Template Name: Full Width Template
*/

?>


<?php get_header(); ?>

    <main role="main">

      <div class="container">
        <!-- Example row of columns -->
        <div class="row">
          <div class="col-md-12"> 

            <?php if( have_posts() ) : while ( have_posts() ) : the_post(); ?>

                <div class="page-header">

                  <h1><?php the_title(); ?></h1>
                  <hr>

                </div>

              <p><?php the_content(); ?></p>

            <?php endwhile; else: ?> 

              <div class="page-header">

                <h1>Hoops..</h1>

              </div>

              <p>No content is available for this page.</p> 

            <?php endif; ?>

          </div>

        </div>

        <hr>

      </div> <!-- /container -->

    </main>

<?php get_footer(); ?>
