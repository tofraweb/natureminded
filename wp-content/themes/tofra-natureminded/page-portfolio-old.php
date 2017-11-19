<?php
/*
Template Name: Portfolio Grid Template
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

        <div class="row">

          <?php 
            $args = array(
              'post_type' => 'portfolio',
              'order' => 'ASC'
            );
            $the_query = new WP_Query( $args );
          ?>

          <?php if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

          <div class="col-sm-3 portfolio-piece">

              <?php
                $thumbnail_id = get_post_thumbnail_id();
                $thumbnail_url = wp_get_attachment_image_src( $thumbnail_id, 'thumbnail-size', true );
              ?>

              <p><a href="<?php the_permalink(); ?>"><img src="<?php echo $thumbnail_url[0]; ?>" alt="<?php the_title();?> graphic"></a></p>
              <h5><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>

          </div>

             <!-- adding new row after each 4 portfolio element -->

            <?php $portfolio_count = $the_query->current_post + 1; ?>
            <?php if ( $portfolio_count % 4 == 0): ?>

            <div class="row"></div>

            <?php endif; ?>

          <?php endwhile; endif; ?>

        </div>

        <hr>

      </div> <!-- /container -->

    </main>

<?php get_footer(); ?>
