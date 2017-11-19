<?php get_header(); ?>

    <main role="main">

      <div class="container">
        <!-- Example row of columns -->
        <div class="row">
          <div class="col-md-9"> 

               <div class="page-header">

                  <h1><?php wp_title( '' ); ?></h1>
                  <hr>

                </div>


                <?php 
                  $args = array(
                    'post_type'  => 'post',
                    'category_name' => "news"
                  );

                  $the_query = new WP_Query( $args );
                ?>
                                

                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                  <ol class="carousel-indicators">
                    <?php if( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                     <li data-target="#myCarousel" data-slide-to="<?php echo $the_query->current_post; ?>" class="<?php if($the_query->current_post == 0):?>active<?php endif;?>">
                    <?php endwhile; endif; ?>
                    <?php rewind_posts(); ?>
                  </ol>



                  <div class="carousel-inner">
                  <?php if( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                    <div class="carousel-item featured-image <?php if($the_query->current_post == 0):?>active<?php endif;?>">
                      <?php
                        $thumbnail_id = get_post_thumbnail_id();
                        $thumbnail_url = wp_get_attachment_image_src( $thumbnail_id, 'thumbnail-size', true );
                        $thumbnail_meta = get_post_meta( $thumbnail_id, '_wp_attachment_image_alt', true);
                      ?>
                      <a href="<?php the_permalink(); ?>"><img src="<?php echo $thumbnail_url[0]; ?>" alt="<?php echo $thumbnail_meta;?>"></a>
                      <div class="container">
                        <div class="carousel-caption text-left">
                          <h1><?php the_title();?></h1>
                          <p><a class="btn btn-lg btn-primary" href="#" role="button">Read more</a></p>
                        </div>
                      </div>
                    </div>
                  <?php endwhile; endif; ?>
                  </div>
                  <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </a>
                </div>


            <?php if( have_posts() ) : while ( have_posts() ) : the_post(); ?>

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
