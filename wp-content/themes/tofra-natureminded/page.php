<?php get_header(); ?>

    <main role="main">

      <div class="container">
        <!-- Example row of columns -->
        <div class="row row-offcanvas row-offcanvas-right">
          <div class="col-md-9"> 

          <p class="float-right d-md-none">
            <button type="button" class="btn btn-primary btn-sm" data-toggle="offcanvas">Toggle Sidebar</button>
          </p>

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

          <?php get_sidebar(); ?>

        </div>

        <hr>

      </div> <!-- /container -->

    </main>

<?php get_footer(); ?>
