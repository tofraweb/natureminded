

<?php get_header(); ?>

  <?php 
    //get current post related categories by hierarchy 
    global $post;
    if ( $post ) {
        $postID = $post->ID;
        $categories = get_the_category( $post->ID );

        //genus category
        $cat_id = $categories[0]->cat_ID;
        $cat_name = $categories[0]->name;
        $cat_data = get_option("category_$cat_id"); //get custom category fields data, added in funcions.php
        if (isset($cat_data['latin_name'])){
          $cat_lat_name = $cat_data['latin_name'];
        }
        if (isset($cat_data['hungarian_name'])){
          $cat_hun_name = $cat_data['hungarian_name'];
        }
        
        //family category
        $p_cat_id = get_category($categories[0]->parent);
        $p_cat_name = $p_cat_id->name;
        $p_cat_data = get_option("category_$p_cat_id->cat_ID");
        if (isset($p_cat_data['latin_name'])){
          $p_cat_lat_name = $p_cat_data['latin_name'];
        }
        if (isset($p_cat_data['hungarian_name'])){
          $p_cat_hun_name = $p_cat_data['hungarian_name'];
        }
       
        //order category
        $pp_cat_id = get_category($p_cat_id->parent);
        $pp_cat_name = $pp_cat_id->name;
        $pp_cat_data = get_option("category_$pp_cat_id->cat_ID");
        if (isset($pp_cat_data['latin_name'])){
          $pp_cat_lat_name = $pp_cat_data['latin_name'];
        }
        if (isset($pp_cat_data['hungarian_name'])){
          $pp_cat_hun_name = $pp_cat_data['hungarian_name'];
        }

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
        </div>
        <div class="row">
          <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

            <div class="col-sm-6 portfolio-image">
              <?php
                $pic_arr = array();
                for($i=1; get_field('picture_'.$i) != null; $i++) {
                  $pic_arr[$i] = get_field('picture_'.$i);
                }
              ?>
              <?php if($pic_arr) { ?>
              <!-- Start of Carousel -->
              <div class="carousel slide carousel-v1" id="myCarousel">
                  <div class="carousel-inner">
                    <?php 
                     // $i = 0;
                      for($i=1; $i < sizeof($pic_arr)+1; $i++){ ?>
                      <div class="item <?php if($i == 1){ echo 'active';} ?>">
                         <img alt="" src="<?php echo $pic_arr[$i]['url']; ?>">
                        <!-- <div class="carousel-caption">
                            <p>Facilisis odio, dapibus ac justo acilisis gestinas.</p>
                        </div> -->
                      </div>
                    <?php }?>
                  </div>
                  <?php if(sizeof($pic_arr) >1){ ?>
                    <div class="carousel-arrow">
                        <a data-slide="prev" href="#myCarousel" class="left carousel-control">
                            <i class="fa fa-angle-left"></i>
                        </a>
                        <a data-slide="next" href="#myCarousel" class="right carousel-control">
                            <i class="fa fa-angle-right"></i>
                        </a>
                    </div>
                  <?php } ?>
              </div>

              <!-- End of Carousel -->

              <?php } else { ?>

                <?php
                  $thumbnail_id = get_post_thumbnail_id();
                  $thumbnail_url = wp_get_attachment_image_src( $thumbnail_id, 'thumbnail-size', true );
                ?>
                <p class="featured-image"><img src="<?php echo $thumbnail_url[0]; ?>" alt="<?php the_title();?> graphic"></p>
              <?php } wp_reset_query(); ?>


            </div>

            <div class="col-sm-6">
 
                <div class="tag-box tag-box-v1 margin-bottom-40">
                 <!--Basic Table-->
                 <div class="panel margin-bottom-20" style="margin-top:5px">
                     <!-- <div class="panel-heading">
                         <h3 class="panel-title"><i class="fa fa-tasks"></i>טקסונומיה - סיווג הצמח</h3>
                     </div> -->
                     <table class="table table-striped table-hover">
                         <thead>
                             <tr>
                                 <th style="font-weight: bold;">שם</th>
                                 <th><?php the_field('hebrew_name'); ?></th>
                                 <th><?php the_field('latin_name'); ?></th>
                                 <th class="hidden-sm"><?php the_field('hungarian_name'); ?></th>
                             </tr>
                         </thead>
                         <tbody>
                             <tr>
                                 <td style="font-weight: bold;">סוג</td>
                                 <td><a href=""><b><?php echo $cat_name;?></b></a></td>
                                 <td><?php echo $cat_lat_name;?></td>
                                 <td class="hidden-sm"><?php echo $cat_hun_name;?></td>
                             </tr>
                             <tr>
                                 <td style="font-weight: bold;">משפחה</td>
                                 <td><a href=""><b><?php echo $p_cat_name;?></b></a></td>
                                 <td><?php echo $p_cat_lat_name;?></td>
                                 <td class="hidden-sm"><?php echo $p_cat_hun_name;?></td>
                             </tr>
                             <tr>
                                 <td style="font-weight: bold;">סדרה</td>
                                 <td><a href=">"><b><?php echo $pp_cat_name;?></b></a></td>
                                 <td><?php echo $pp_cat_lat_name;?></td>
                                 <td class="hidden-sm"><?php echo $pp_cat_hun_name;?></td>
                             </tr>
                         </tbody>
                     </table>
                 </div>
               </div>
               <div class="tag-box tag-box-v1 margin-bottom-40">
                <h4>תיאור המין</h4>
                <p><?php the_content(); ?></p>
               </div>

                <div class="prev-next">
                  <?php previous_post_link( '%link', '<span class="fa fa-hand-o-right" title="לציפור הקודם"></span>' ); ?>
                  <a href="<?php bloginfo('url'); ?>/birds-catalog" title="חזרה"><span class="fa fa-th"></span></a>
                  <?php next_post_link( '%link', '<span class="fa fa-hand-o-left" title="לציפור הבא"></span>' ); ?>
                </div>   

            </div>


          <?php endwhile; else: ?>

            <div class="page-header">
              <h1>Oh no!</h1>
            </div>

            <p>No content is appearing for this page!</p>

          <?php endif; ?>



        </div>

<!--         <div class="row">
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

        </div> -->

        <div class="row">

          <div class="col-sm-6">
             <!--Audio Itentification -->
             <div>
               <table >
                 <?php if(1) { ?>
                 <tr>
                   <th class="info" style="width:30%">קול שירה</th>
                   <td class="centered-td">
                    <?php 
                      $song_data = get_field('audio_song');
                    ?>
                     <audio controls>
                       <source src="<?php echo $song_data[url]; ?>?>">
                     Your browser does not support the audio element.
                     </audio>
                   </td>
                 </tr>
                 <?php } ?>
                 <?php if(1) { ?>
                 <tr>
                   <th class="info" style="width:30%">קול קריאה</th>
                   <td class="centered-td">
                     <audio controls>
                       <source src="">
                     Your browser does not support the audio element.
                     </audio>
                   </td>
                 </tr>
                 <?php } ?>
                 <?php if(1) { ?>
                 <tr>
                   <th class="info" style="width:30%">קול הזהרה</th>
                   <td class="centered-td">
                     <audio controls>
                       <source src="">
                     Your browser does not support the audio element.
                     </audio>
                   </td>
                 </tr>
                 <?php } ?>
               </table>
             </div>
          </div>
          <div class="col-sm-6">
            
          </div>
        </div>

        <div class="row">

          <div class="col-sm-8">
          <!-- Same Family Carousel -->

            <?php 

              $the_query = new WP_Query( array( 
                'post_type' => 'birds', 
                'cat' => $p_cat_id->cat_ID  
              ));

              $numOfPiecesInFamily = $the_query->found_posts;
              $piecesInFamilyArr = array();
              $i = 0;


            ?>
            <?php if($numOfPiecesInFamily > 1) { ?>
              <div class="headline"><h2>עוד מינים ממשפחת <a href=""><?php echo $p_cat_id->name;?></a></h2></div>
              <div class="owl-carousel-v2 margin-bottom-40">
                  <div class="owl-slider-v4">
                      <?php if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                        <?php
                          $thumbnail_id = get_post_thumbnail_id();
                          $thumbnail_url = wp_get_attachment_image_src( $thumbnail_id, 'thumbnail-size', true );
                          $piecesInFamilyArr[$i++] = get_the_ID();
                        ?>
                        <?php if($postID != get_the_ID()) { ?>
                          <div class="item">
                            <a class="fancybox img-hover-v1" href="<?php the_permalink(); ?>">
                              <img class="img-responsive" src="<?php echo $thumbnail_url[0]; ?>" alt="">
                            </a>
                            <h4 style="margin-top:12px">
                              <a href="<?php the_permalink(); ?>"><?php the_field('hebrew_name'); ?></a>
                              <small>
                                <?php the_field('latin_name'); ?>
                              </small>
                            </h4>
                          </div>
                        <?php } ?>
                    <?php endwhile; endif; wp_reset_query(); ?>
                  </div>
              </div>
             <?php } ?>
            

          <!-- End Same Family Carousel -->
             </div> 
             <div class="col-sm-4">
               <?php if($numOfPiecesInFamily > 1) { ?>
                 <div class="headline"><h2>מאפיינים של <a href=""><?php echo $p_cat_id->name;?></a></h2></div>
                 <p> <?php echo $p_cat_id->description; ?></p>
               <?php } ?>
             </div>
          </div>  


          <!-- Same Order Carousel -->

            <?php 


              $the_query = new WP_Query( array( 
                'post_type' => 'birds', 
                'cat' => $pp_cat_id->cat_ID, 
                'showposts' => 30,
                'orderby'   => 'rand'
              ));

            ?>
            <?php if($the_query->found_posts > $numOfPiecesInFamily) { ?>
              <div class="headline"><h2>עוד מינים משדרת <a href=""><?php echo $pp_cat_id->name;?></a></h2></div>
              <div class="owl-carousel-v5 margin-bottom-40">
                  <div class="owl-slider-v2">
                      <?php if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                        <?php
                          $thumbnail_id = get_post_thumbnail_id();
                          $thumbnail_url = wp_get_attachment_image_src( $thumbnail_id, 'thumbnail-size', true );
                        ?>
                        <?php if($postID != get_the_ID() && !in_array(get_the_ID(), $piecesInFamilyArr)) { ?>
                          <div class="item">
                            <a class="fancybox img-hover-v1" href="<?php the_permalink(); ?>">
                              <img class="img-responsive" src="<?php echo $thumbnail_url[0]; ?>" alt="">
                            </a>
                            <h5 style="margin-top:12px">
                              <a href="<?php the_permalink(); ?>"><?php the_field('hebrew_name'); ?></a>
                              <small>
                                <?php the_field('latin_name'); ?>
                              </small>
                            </h5>
                          </div>
                        <?php } ?>
                    <?php endwhile; endif; wp_reset_query(); ?>
                  </div>
              </div><hr>
             <?php } ?>
            

          <!-- End Same Order Carousel -->

          <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

                  <p><em>
                    By <?php the_author(); ?> 
                    on <?php echo the_time( 'l, F jS, Y' ) ?> 
                    in <?php the_category( ', ' ); ?>
                     - <a href="<?php comments_link(); ?>"> <?php comments_number(); ?> </a> 
                  </em></p>

                  <p><?php comments_template(); ?></p>

           <?php endwhile; endif; ?>


      </div> <!-- /container -->

    </main>

<?php get_footer(); ?>
