<?php
/*
Template Name: Birds Grid Template
*/

?>
<?php get_header(); ?>

    <!-- Page Content -->
    <div class="container">

        <div class="row">

	        <!-- Right Sidebar -->
	        <div class="col-md-3 magazine-page">
	          	<div class="headline" style="text-align:right">
	            	<h2>חיפוש</h2>
<!-- 	            	<div class="widget"><form role="search" method="get" id="searchform" class="searchform" action="http://localhost/tofraweb/natureminded/">
				<div>
					<label class="screen-reader-text" for="s">חפש:</label>
					<input type="text" value="" name="s" id="s" />
					<input type="submit" id="searchsubmit" value="חפש" />
						</div>
						</form>
					</div>	    -->       	
				</div>

<!-- 		        <i class="search fa fa-search search-btn"></i>
 -->              <form method="get" role="search" action="http://localhost/tofraweb/natureminded/">
                  <div class="search-open">
                      <div class="input-group animated fadeInDown">
                          <input type="text" class="form-control" name="s" id="s" placeholder="חיפוש ציפורים">
                          <span class="input-group-btn">
                              <button class="btn-u" type="button">חפש</button>
                          </span>
                      </div>
                  </div>
                </form>

	        </div>
	        <!-- End Right Sidebar -->

	        <!-- Right Sidebar -->
<!-- 	        <div class="col-md-3 magazine-page">
		 		<div class="headline" style="text-align:right">
	            	<h2>חיפוש</h2>
	            	<div class="widget"><form role="search" method="get" id="searchform" class="searchform" action="http://localhost/tofraweb/natureminded/">
				<div>
					<label class="screen-reader-text" for="s">חפש:</label>
					<input type="text" value="" name="s" id="s" />
					<input type="submit" id="searchsubmit" value="חפש" />
				</div>
				</form>
					</div>	          	
				</div>
	        </div> -->
	        <!-- End Right Sidebar -->


	        <div class="col-md-9" style="text-align: center; min-height:700px">
	        <!-- Catalog Section -->

	        <div class="headline" style="text-align:right">
            	<h2>ציפורים <small>ציפורי שיר</small></h2>
          	</div>

	          <?php 


				//Protect against arbitrary paged values
				$paged = ( get_query_var( 'paged' ) ) ? absint( get_query_var( 'paged' ) ) : 1;


	            $args = array(
	              'post_type' => 'birds',
	              'orderby' => 'title', 
	              'posts_per_page'=>12,
	              'order' => 'ASC',
	              'paged' => $paged
	            );
	            $the_query = new WP_Query( $args );
	          ?>

	    		<div class="row margin-bottom-20">   
	    			<?php if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
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
							</div>
							<?php
							    //get current post related categories by hierarchy 

							        $categories = get_the_category( get_the_ID() );
							        $cat_id = $categories[0]->cat_ID;
							        $cat_name = $categories[0]->name;
							        $p_cat_id = $categories[0]->parent;
							        $p_cat_id = get_category($p_cat_id);
							        $p_cat_name = $p_cat_id->name;
							        $pp_cat_id = $p_cat_id->parent;
							        $pp_cat_id = get_category($pp_cat_id);
							        $pp_cat_name = $pp_cat_id->name;
							?>
							<span class="category-label genus-label"><?php echo $categories[0]->name; ?></span> >
							<span class="category-label family-label"><?php echo $p_cat_id->name; ?></span> >
							<span class="category-label order-label"><?php echo $pp_cat_id->name; ?></span>
						</div>
					</div>
					<?php endwhile; endif; ?>

	    		</div>
	    		<div style="text-align:center">

	    		<!--pagination-->	

				<?php
				$big = 999999999; // need an unlikely integer

				echo paginate_links( array(
					'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
					'format' => '?paged=%#%',
					'current' => max( 1, get_query_var('paged') ),
					'total' => $the_query->max_num_pages
				) );
				?>

	         	</div>
<!-- 	         	<a class="btn-u btn-u-large" style="margin-top: 20px;" href="javascript:history.back()">חזרה</a>
 -->			</div><!-- End Catalog Section -->

        </div><!-- end row -->
        <!-- end row -->
	</div><!--/container-->


     <?php get_footer(); ?>
