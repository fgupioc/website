<div id="contenido-main">
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12">
			<!-- begin slider-->
			<div class="slider-layers">
 				<ul class="bxslider">
					 <li><img src="<?php echo get_template_directory_uri(); ?>/img/demo/slider/image1.png" /></li>
					 <li><img src="<?php echo get_template_directory_uri(); ?>/img/demo/slider/image2.png" /></li>
					 <li><img src="<?php echo get_template_directory_uri(); ?>/img/demo/slider/image3.png" /></li>
					 <li><img src="<?php echo get_template_directory_uri(); ?>/img/demo/slider/image4.png" /></li>
					 <li><img src="<?php echo get_template_directory_uri(); ?>/img/demo/slider/image5.png" /></li>
				</ul>
			</div>
			<!-- end slider-->
		</div>
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12">
				<div class="row">
					<div class="col-xs-12 col-sm-6 col-md-6">
						<div class="pts-container">
							<div class="img-container-main" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/demo/banners/banner1.jpg'); "> </div>
						</div>
					</div>
					<div class="col-xs-12 col-sm-6 col-md-6">
						<div class="pts-container">
							<div class="img-container-main" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/demo/banners/banner2.jpg');"> 
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12">
				<div class="info-header">
					<span>mejores vendidos</span>
					<div class="decor-info"></div>
				</div>
				<div class="info-body">
					<article>
						<?php $args = array(
							'posts_per_page' => 12,
							'cat' => 2,
							'tag__in' => array( 9, 14 )
						); ?>
						<?php $the_query = new WP_Query($args); ?>
						<?php while ($the_query->have_posts()) : $the_query->the_post();
							$img_url = wp_get_attachment_url(get_post_thumbnail_id($post->ID));
							?>
							<div class="col-xs-6 col-sm-4 col-md-3">
								<div class="marco-contennido-main">
								<!--	<?php//como extrar los datos de la tabla
									$custom_fields = get_post_custom();
									$valor = $custom_fields['precio_actual'];
									?>-->
									<a href="<?php the_permalink(); ?>">
										<div class="imagenes-main" style="background-image: url('<?php echo $img_url; ?>');">
										</div>
										<div class="producto-meta-main">
											<h3><?php the_title(); ?></h3>
										</div>
									</a>
									<div class="precio-main">
										<span class="precio-new-main">$/<?php echo get_post_meta( $post->ID, 'precio_actual', true ) ?></span>
									</div>
								</div>
							</div>
							<?php
						endwhile;
						wp_reset_postdata();
						?>
					</article>
				</div>
			</div>
		</div>
		<div class="espacio"></div>
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12">
				<div class="info-header">
					<span>mas vistos</span>
					<div class="decor-info"></div>
				</div>
				<div class="info-body">
					<?php get_template_part( 'inc/include/more', 'famous' ); ?>
				</div>
			</div>
		</div>
	</div>	
</div>


 

