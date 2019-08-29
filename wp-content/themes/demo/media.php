<?php 
	/*Template Name: media*/
 ?>


<?php get_header(); ?>
<section id="page-header" class="pagetop">
	<div class="container-fluid">
		<div class="row">
			<h1>Media</h1>
		</div>
	</div>
</section>

<section>


<section id="media-content">
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-12 col-md-4 col-lg-3 sitebar">
				<!--Accordion wrapper-->
				<div class="accordion md-accordion" id="accordionEx1" role="tablist" aria-multiselectable="true">

				  <!-- Accordion card -->
				  <?php
				  $i = 0;
				  $categories = get_categories( array ('orderby' => 'name', 'order' => 'asc' ) );

					foreach ($categories as $category){ $i++;?>
					

				  <div class="card">

				    <!-- Card header -->
				    <div class="card-header" role="tab" id="headingTwo<?php echo $i ?>">
				      <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx1" href="#collapseTwo<?php echo $i ?>"
				        aria-expanded="false" aria-controls="collapseTwo<?php echo $i ?>">
				        <h5 class="mb-0">
				          <?php echo $category->name ?>  
				        </h5>
				      </a>
				    </div>

				    <!-- Card body -->
				    <div id="collapseTwo<?php echo $i ?>" class="collapse" role="tabpanel" aria-labelledby="headingTwo"
				      data-parent="#accordionEx1">
				      <div class="card-body">
				      	<?php

							$query = array(
							'post_type'      => 'post',
							'category_name'  => $category->slug,
							'order' => 'asc'
							);

							$featured_home = new WP_Query( $query );

							if( $featured_home->have_posts() ) {?>
							    <?php while ( $featured_home->have_posts() ) : $featured_home->the_post();?>

							    	<a class="cat_body" href="<?php the_permalink(); ?>">-<?php the_title(); ?></a>

							<?php
							endwhile;
						}
							wp_reset_postdata();
						?>
				        
				       
				      </div>
				    </div>

				  </div>
				  <!-- Accordion card -->
			<?php	} //end foreach

				wp_reset_postdata();
				?>


				</div>
				<!-- Accordion wrapper -->
			</div>
			<div class="col-sm-12 col-md-8 col-lg-9">
				<div class="row mediablog_area">
					<?php

					 $args = array(  
				       'post_type' => 'post',
				       'post_status' => 'publish',
				       'posts_per_page' => 8,
				   );

				   $loop = new WP_Query( $args );
				     
				   while ( $loop->have_posts() ) : $loop->the_post(); ?>
				       <div class="col-md-6 media-blog">
									<?php the_post_thumbnail("large"); ?>
									<a class="title" href="<?php the_permalink(); ?>"><h5 class="mt-4 mb-4"><?php the_title(); ?></h5></a>
									<h5 class="date">-<?php the_date( get_option( 'd-m-Y' ) ); ?></h5>
									<p><?php the_excerpt(); ?></p>
									<a class="link" href="<?php the_permalink(); ?>">Read more <span>&#62;&#62;</span></a>
								</div>
				 <?php  endwhile;

				   wp_reset_postdata();
				?>
				
				</div>
			</div>
		</div>
	</div>
</section>



<?php get_footer(); ?>