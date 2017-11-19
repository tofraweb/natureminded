<?php get_header(); ?>

  <?php 
    //get current post related categories by hierarchy 
    global $post;
    if ( $post ) {
        $categories = the_category( $post->ID );
        $cat_id = $categories[0]->cat_ID;
        $cat_name = $categories[0]->name;
        $p_cat_id = $categories[0]->parent;
        $p_cat_id = get_category($p_cat_id);
        $p_cat_name = $p_cat_id->name;
        $pp_cat_id = $p_cat_id->parent;
        $pp_cat_id = get_category($pp_cat_id);
        $pp_cat_name = $pp_cat_id->name;
    } 
  ?> 
    <main role="main">

      <div class="container">
        <!-- Example row of columns -->
        <div class="row">

           <?php get_sidebar( 'blog' ); ?>

          <div class="col-md-9"> 

               <div class="page-header">

                  <h1><?php wp_title( '' ); ?></h1>

                </div>

             <div class="row margin-bottom-20">
            <?php if( have_posts() ) : while ( have_posts() ) : the_post(); ?>

                <div class="col-md-4 col-sm-6">
                  <?php
                    $thumbnail_id = get_post_thumbnail_id();
                    $thumbnail_url = wp_get_attachment_image_src( $thumbnail_id, 'thumbnail-size', true );
                  ?>
                  <div class="thumbnails thumbnail-style thumbnail-kenburn">
                    <div class="thumbnail-img">
                      <div class="overflow-hidden">
                          <a class="hover-effect" href="<?php the_permalink(); ?>"><img class="img-responsive img-catalog" src="<?php echo $thumbnail_url[0]; ?>" alt="<?php the_title();?> graphic"></a>
                      </div>
                      <a class="btn-more hover-effect" href="<?php the_permalink(); ?>"><?php the_field('latin_name'); ?></a>
                    </div>
                    <div class="caption" style="text-align:center">
                      <h3><a class="hover-effect" href="<?php the_permalink(); ?>"><?php the_field('hebrew_name'); ?></a></h3>
                    </div><?php the_category( ' &gt; ' ); ?>
                  </div>
                </div>

            <?php endwhile; else: ?> 

              <div class="page-header">

                <h1>Hoops..</h1>

              </div>

              <p>No content is available for this page.</p> 

            <?php endif; ?>

            </div>

          </div>

        </div>

        <hr>

      </div> <!-- /container -->

    </main>

<?php get_footer(); ?>
