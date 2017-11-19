

<?php get_header(); ?>

  <?php 
    //get current post related categories by hierarchy 
    global $post;
    if ( $post ) {
        $categories = get_the_category( $post->ID );
        // echo "<pre>";
        // var_dump($categories[0]);
        // echo "</pre>";
        // exit;
        $cat_id = $categories[0]->cat_ID;
        $cat_name = $categories[0]->name;
        $p_cat_id = $categories[0]->parent;
        $p_cat_id = get_category($p_cat_id);
        $p_cat_name = $p_cat_id->name;
        $pp_cat_id = $p_cat_id->parent;
        $pp_cat_id = get_category($pp_cat_id);
        $cat_lat_name = ucfirst(urldecode($pp_cat_id->slug));
        $cat_hun_name = $pp_cat_id->description;
        $pp_cat_name = $pp_cat_id->name;
    } 
  ?>  

    <main role="main">

      <div class="container">
        <!-- Example row of columns -->
<!--          <div class="row">

            <div class="col-md-12">
              <h1>Portfolio</h1>
              <hr>

            </div>

        </div> -->

        <div class="row">

          <div class="headline" style="text-align:right">
            <h2 style="margin-right: 20px"><?php the_field('hebrew_name'); ?> <small><?php the_field('latin_name'); ?></small></h2>
            <div class="tofra_breadcrumbs"><?php echo get_category_parents( $cat_id, true, ' &raquo; ' ); echo the_title();?></div>
          </div>

          <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

            <div class="col-sm-8 portfolio-image">
              <?php
                $thumbnail_id = get_post_thumbnail_id();
                $thumbnail_url = wp_get_attachment_image_src( $thumbnail_id, 'thumbnail-size', true );
              ?>

              <p class="featured-image"><img src="<?php echo $thumbnail_url[0]; ?>" alt="<?php the_title();?> graphic"></p>

            </div>

            <div class="col-sm-4">

              <div class="headline" style="text-align:right">
                <h5><small>סדרה</small> <?php echo $pp_cat_name; ?> </h5>
              </div>  
              <div class="headline" style="text-align:right">
                <h4><small>משפחה</small> <?php echo $p_cat_name; ?> </h4>
              </div>   
              <div class="headline" style="text-align:right">
                <h2><small>סוג</small> <?php echo $cat_name; ?> </h2>
              </div> 

                <ul class="list-inline badge-lists margin-bottom-30">
                  <li>
                    <a class="btn-u btn-u-xs btn-u-default" href="#">Info</a>
                    <span class="badge badge-blue">7</span>
                  </li>
                  <li>
                    <a class="btn-u btn-u-xs btn-u-dark" href="#"><?php echo $cat_hun_name; ?></a>
                    <span class="badge badge-red rounded-2x">9</span> 
                  </li>
                  <li>
                    <a class="btn-u btn-u-xs btn-u-default" href="#"><?php echo $cat_lat_name; ?></a>
                    <span class="badge badge-green rounded">1</span>
                  </li>
                </ul>

              <h1><?php the_title(); ?></h1>
              <?php the_field('hungarian_name'); ?>
              <?php the_content(); ?>
              <!--<p><a class="btn btn-large btn-primary" href="<?php the_field('link'); ?>">View Final Piece <span class="glyphicon glyphicon-arrow-right"></span></a></p>-->
              <div class="prev-next">
                <?php previous_post_link( '%link', '<span class="fa fa-angle-double-right" title="לציפור הקודם"></span>' ); ?>
                <a href="<?php bloginfo('url'); ?>/birds-catalog" title="חזרה"><span class="fa fa-home"></span></a>
                <?php next_post_link( '%link', '<span class="fa fa-angle-double-left" title="לציפור הבא"></span>' ); ?>
              </div>      
            </div>


          <?php endwhile; else: ?>

            <div class="page-header">
              <h1>Oh no!</h1>
            </div>

            <p>No content is appearing for this page!</p>

          <?php endif; ?>



        </div>

        <div class="row">
          <div class="col-sm-4">
              <div class="headline" style="text-align:right">
                <h2><small>טקסונומיה - </small> <?php echo $pp_cat_name; ?> </h2>
              </div> 
              <ul>
                <?php wp_list_categories( array(
                  'orderby'            => 'id',
                  'current_category' => $cat_id,
                  'use_desc_for_title' => false,
                  'child_of'           => $pp_cat_id->cat_ID,
                  'title_li'  => '' 
                ) ); ?> 
              </ul>
          </div>
          <div class="col-sm-8">
            
          </div>

        </div>

        <hr>

      </div> <!-- /container -->

    </main>

<?php get_footer(); ?>
