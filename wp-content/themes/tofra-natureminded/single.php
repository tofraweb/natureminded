<?php get_header(); ?>

    <main role="main">

      <div class="container">
        <!-- Example row of columns -->
        <div class="row">
          <div class="col-md-9"> 
            <?php if( have_posts() ) : while ( have_posts() ) : the_post(); ?>

                <div class="page-header">

                  <?php
                    $thumbnail_id = get_post_thumbnail_id();
                    $thumbnail_url = wp_get_attachment_image_src( $thumbnail_id, 'thumbnail-size', true );
                    $thumbnail_meta = get_post_meta( $thumbnail_id, '_wp_attachment_image_alt', true);
                  ?>
                  <p class="featured-image"><img src="<?php echo $thumbnail_url[0]; ?>" alt="<?php echo $thumbnail_meta;?>"></p>
                  <h1><?php the_title(); ?></h1>

                  <p><em>
                    By <?php the_author(); ?> 
                    on <?php echo the_time( 'l, F jS, Y' ) ?> 
                    in <?php the_category( ', ' ); ?>
                     - <a href="<?php comments_link(); ?>"> <?php comments_number(); ?> </a> 
                  </em></p>
                  <hr>

                </div>
                <p><?php the_content(); ?></p>
              <hr>
              <p><?php comments_template(); ?></p>

            <?php endwhile; else: ?> 

              <div class="page-header">

                <h1>Hoops..</h1>

              </div>

              <p>No content is available for this page.</p> 

            <?php endif; ?>

          </div>

          <?php get_sidebar( 'blog' ); ?>

        </div>

        <hr>

      </div> <!-- /container -->

    </main>

<?php get_footer(); ?>
