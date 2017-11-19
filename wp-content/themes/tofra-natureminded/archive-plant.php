<?php get_header(); ?>

    <main role="main">

      <div class="container">
        <!-- Example row of columns -->
        <div class="row">
          <div class="col-md-9"> 

               <div class="page-header">

                  <h1><?php wp_title( '' ); ?>111111</h1>
                  <hr>

                </div>

            <?php 
              $args = array(
                'post_type' => 'birds;',
                'order' => 'ASC'
              );
              $the_query = new WP_Query( $args );
            ?>


            <?php if( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

                <article class="post">

                  <h4><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h4>
                  <p><em>
                    By <?php the_author(); ?> 
                    on <?php echo the_time( 'l, F jS, Y' ) ?> 
                    in <?php the_category( ', ' ); ?>
                     - <a href="<?php comments_link(); ?>"> <?php comments_number(); ?> </a> 
                  </em></p>
                  <p><?php the_excerpt(); ?></p>
                  <hr>
                </article>


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
