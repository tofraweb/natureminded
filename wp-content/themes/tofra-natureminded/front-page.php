<?php get_header(); ?>

<!--=== Content Part ===-->
<div class="container content-sm">
		<!-- Recent Works -->
		<div class="headline"><h2>על צמחים וציפורים</h2></div>
		<div class="row margin-bottom-20">
				<div class="col-md-3 col-sm-6">
						<div class="thumbnails thumbnail-style thumbnail-kenburn">
								<div class="thumbnail-img">
										<div class="overflow-hidden">
												<img class="img-responsive" src="<?php echo get_template_directory_uri();?>/img/1.jpg" alt="">
										</div>
										<a class="btn-more hover-effect" href="#">ראה עוד</a>
								</div>
								<div class="caption">
										<h3><a class="hover-effect" href="#">ציפורים</a></h3>
										<p>לורם איפסום דולור סיט אמט, קונסקטורר אדיפיסינג אלית קולורס מונפרד אדנדום סילקוף, מרגשי ומרגשח. עמחליף קוואזי במר מודוף. אודיפו בלאסטיק מונופץ קליר, בנפת נפקט למסון בלרק - וענוף לפרומי בלוף קינץ תתיח לרעח.</p>
								</div>
						</div>
				</div>
				<div class="col-md-3 col-sm-6">
						<div class="thumbnails thumbnail-style thumbnail-kenburn">
								<div class="thumbnail-img">
										<div class="overflow-hidden">
												<img class="img-responsive" src="<?php echo get_template_directory_uri();?>/img/2.jpg" alt="">
										</div>
										<a class="btn-more hover-effect" href="#">ראה עוד</a>
								</div>
								<div class="caption">
										<h3><a class="hover-effect" href="#">צמחי גינה</a></h3>
										<p>לורם איפסום דולור סיט אמט, קונסקטורר אדיפיסינג אלית קולורס מונפרד אדנדום סילקוף, מרגשי ומרגשח. עמחליף קוואזי במר מודוף. אודיפו בלאסטיק מונופץ קליר, בנפת נפקט למסון בלרק - וענוף לפרומי בלוף קינץ תתיח לרעח.</p>
								</div>
						</div>
				</div>
				<div class="col-md-3 col-sm-6">
						<div class="thumbnails thumbnail-style thumbnail-kenburn">
								<div class="thumbnail-img">
										<div class="overflow-hidden">
												<img class="img-responsive" src="<?php echo get_template_directory_uri();?>/img/3.jpg" alt="">
										</div>
										<a class="btn-more hover-effect" href="#" class="btn btn-primary">ראה עוד</a>
								</div>
								<div class="caption">
										<h3><a class="hover-effect" href="#" class="btn btn-primary">פרחי שדה</a></h3>
										<p>לורם איפסום דולור סיט אמט, קונסקטורר אדיפיסינג אלית קולורס מונפרד אדנדום סילקוף, מרגשי ומרגשח. עמחליף קוואזי במר מודוף. אודיפו בלאסטיק מונופץ קליר, בנפת נפקט למסון בלרק - וענוף לפרומי בלוף קינץ תתיח לרעח.</p>
								</div>
						</div>
				</div>
				<div class="col-md-3 col-sm-6">
						<div class="thumbnails thumbnail-style thumbnail-kenburn">
								<div class="thumbnail-img">
										<div class="overflow-hidden">
												<img class="img-responsive" src="<?php echo get_template_directory_uri();?>/img/4.jpg" alt="">
										</div>
										<a class="btn-more hover-effect" href="#" class="btn btn-primary">ראה עוד</a>
								</div>
								<div class="caption">
										<h3><a class="hover-effect" href="#" class="btn btn-primary">עצים ושיחים</a></h3>
										<p>לורם איפסום דולור סיט אמט, קונסקטורר אדיפיסינג אלית קולורס מונפרד אדנדום סילקוף, מרגשי ומרגשח. עמחליף קוואזי במר מודוף. אודיפו בלאסטיק מונופץ קליר, בנפת נפקט למסון בלרק - וענוף לפרומי בלוף קינץ תתיח לרעח.</p>
								</div>
						</div>
				</div>
		</div>
		<!-- End Recent Works -->

		<!-- Birds Section -->
		<div class="headline"><h2>לחופש נולדו</h2></div>

		<div class="row margin-bottom-20">
			<?php
				$args = array(
	              'post_type' => 'birds',
	              'tag_slug__in' => 'featured',
	              'showposts' => 3,
	              'orderby'   => 'rand', 
	              'order' => 'ASC'	            );
	            $the_query = new WP_Query( $args );
	        ?>
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
						<h3><a class="hover-effect" href="<?php the_permalink(); ?>"><?php the_field('hebrew_name'); ?>  
							<small>
								<!--show hungarian name only if user is admin -->
								<?php if(current_user_can('administrator')) {
									the_field('hungarian_name');
								} ?>		
							</small></a></h3>
					</div>
				</div>
			</div>
			<?php endwhile; endif; ?>
		</div>
		<!-- End Birds Section -->

		<!-- Info Blokcs -->
		<div class="row margin-bottom-30">
				<!-- Welcome Block -->
				<div class="col-md-8 md-margin-bottom-40">
						<div class="headline"><h2>צאו לטייל</h2></div>
						<div class="row">
								<div class="col-sm-4">
										<img class="img-responsive margin-bottom-20" src="<?php echo get_template_directory_uri();?>/img/family.jpg" alt="">
								</div>
								<div class="col-sm-8">
										<p>לורם איפסום דולור סיט אמט, קונסקטורר אדיפיסינג אלית קולורס מונפרד אדנדום סילקוף, מרגשי ומרגשח. עמחליף קוואזי במר מודוף. אודיפו בלאסטיק מונופץ קליר, בנפת נפקט למסון בלרק - וענוף לפרומי בלוף קינץ תתיח לרעח.</p>
										<ul class="list-unstyled margin-bottom-20">
												<li><i class="fa fa-check color-green"></i>עושה טוב לנפש</li>
												<li><i class="fa fa-check color-green"></i>בריא לגוף</li>
												<li><i class="fa fa-check color-green"></i>מפתח את הילדים</li>
												<li><i class="fa fa-check color-green"></i>מעניין וכייפי</li>
												<li><i class="fa fa-check color-green"></i>אפשרות לילמוד</li>
										</ul>
								</div>
						</div>

						<blockquote class="hero-unify">
								<p>לורם איפסום דולור סיט אמט, קונסקטורר אדיפיסינג אלית קולורס מונפרד אדנדום סילקוף, מרגשי ומרגשח. עמחליף קוואזי במר מודוף. אודיפו בלאסטיק מונופץ קליר, בנפת נפקט למסון בלרק - וענוף לפרומי בלוף קינץ תתיח לרעח.</p>
								<small>טומי פרנק</small>
						</blockquote>
				</div><!--/col-md-8-->

				<!-- Latest Shots -->
				<div class="col-md-4">
						<div class="headline"><h2>תמונות אחרונות</h2></div>
						<?php if( dynamic_sidebar( 'front-left' ) ); ?>
				</div><!--/col-md-4-->
		</div>
		<!-- End Info Blokcs -->


		<!-- Service Blocks -->
		<div class="row margin-bottom-30">
				<div class="col-md-4">
						<div class="service">
								<i class="fa  fa-file-image-o service-icon"></i>
								<div class="desc">
										<h4>צילומים מקוריים</h4>
										<p>כל התמונות באתר הן תמונות שצולמו ע"י צוות האתר</p>
								</div>
						</div>
				</div>
				<div class="col-md-4">
						<div class="service">
								<i class="fa  fa-leaf service-icon"></i>
								<div class="desc">
										<h4>צמחים שראינו וצילמנו</h4>
										<p>כל הצמחים שמופיעים באתר הם רק כאלה שראינו שפגנו אותם בטבע וצילמנו אותם</p>
								</div>
						</div>
				</div>
				<div class="col-md-4">
						<div class="service">
								<i class="fa fa-rocket service-icon"></i>
								<div class="desc">
										<h4>ציפורי ארץ ישראל</h4>
										<p>הציפורים שצולמו הן הציפורים שראינו בארץ ישראל וצילמנו בעצמינו</p>
								</div>
						</div>
				</div>
		</div>
		<!-- End Service Blokcs -->
</div><!--/container-->


<!-- End Content Part -->
<?php get_footer(); ?>