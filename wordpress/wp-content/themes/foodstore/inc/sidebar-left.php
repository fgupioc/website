<div class="colum-left">
	<div class="banner0"> 
	<div class="marco-imagen">
		<div id="imagen-left" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/banners/banner-sidebar-272x249.jpg');"></div>
	</div> 					 
	</div>
	<div class="menu-testimonial">
		<div class="caja-contenedor">
			<ul class="lista-left">
				<li class="medio">
					<a class="pull-left" href="<?php echo esc_url( get_permalink( get_page_by_title('menu'))); ?>">
					<img src="<?php echo get_template_directory_uri(); ?>/img/testimonial/icon-menu-50x60.png" alt="">
				</a>
				<div class="medio-body">
					<a href="<?php echo esc_url( get_permalink( get_page_by_title('menu'))); ?>">
					<div class="testimonio">
						<h4 >Menu</h4>
						<p>Revisa Nuestro Menu del dia</p>
					</div>
					</a>
					<div class="profile">
						<p><br></p>					
					</div>
				</div>
				</li>
				<li class="medio">
					<a class="pull-left" href="<?php echo esc_url( get_permalink( get_page_by_title('bebidas'))); ?>">
					<img src="<?php echo get_template_directory_uri(); ?>/img/testimonial/icon-wines-50x60.png" alt="">
				</a>
				<div class="medio-body">
					<a href="<?php echo esc_url( get_permalink( get_page_by_title('bebidas'))); ?>">
					<div class="testimonio">
						<h4 >Bebidas</h4>
						<p>Bebidas recomendadas por la casa</p> 
					</div>
					</a>
					<div class="profile">
						<p><br></p>					
					</div>
				</div>
				</li>
				<li class="medio">
					<a class="pull-left" href="#">
					<img src="<?php echo get_template_directory_uri(); ?>/img/testimonial/icon-team-50x60.png" alt="">
				</a>
				<div class="medio-body">
					<div class="testimonio">
						<h4 >Equipo</h4>
						<p>Conoce nuestro equipo</p> 
					</div>
					<div class="profile">
						<p><br></p>					
					</div>
				</div>
				</li>
				<li class="medio">
					<a class="pull-left" href="#">
					<img src="<?php echo get_template_directory_uri(); ?>/img/testimonial/icon-find-50x60.png" alt="">
				</a>
				<div class="medio-body">
					<div class="testimonio">
						<h4 >Ubicacion</h4>
						<p>Ubicanos en el mapa</p> 
					</div>
					<div class="profile">
						<p><br></p>					
					</div>
				</div>
				</li>

			</ul>
		</div>
	</div>
	<div class="informacion-black">
		<div class="info-header">
			<span>Informacion</span>
			<div class="decor-info"></div>
		</div>
		<div class="info-body">
			<ul>
				<li>
					<a href="<?php echo esc_url( get_permalink( get_page_by_title('nosotros')));?>">Acerca de nosotros</a>
				</li>
				<li>
					<a href="<?php echo esc_url(get_permalink(get_page_by_title('delivery')));?>">Delivery</a>
				</li>
				<li>
					<a href="<?php echo esc_url(get_permalink(get_page_by_title('politicas y privacidad')));?>">politicas y privacidad</a>
				</li>
				<li>
					<a href="<?php echo esc_url(get_permalink(get_page_by_title('terminos y condiciones')));?>">terminnos y condiciones</a>
				</li>
				<li>
					<a href="<?php echo esc_url(get_permalink(get_page_by_title('contactanos'))); ?>">contactanos</a>
				</li>
			</ul>
		</div>
	</div>
	<div class="poductos-speciales">
		<div class="info-header">
			<span>especiales</span>
			<div class="decor-info"></div>
		</div>
		<div class="info-body">
			 <div class="row itms-productos">
			 	<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
			 		<div class="productos-bolck">
						<article>
							<?php $args = array(
								'posts_per_page' => 6,
								'cat' => 22,
								'tag__in' => array( 13, 21 )
							); ?>
							<?php $the_query = new WP_Query($args); ?>
							<?php while ($the_query->have_posts()) : $the_query->the_post();
								$img_url = wp_get_attachment_url(get_post_thumbnail_id($post->ID));
								?>
								<div class="col-xs-12">
									<div class="imagens-productos">
										<div class="producto-label-special">
											<span>Sale</span>
										</div>
										<a href="<?php the_permalink(); ?>">
											<div class="imagen" style="background-image:url('<?php echo $img_url; ?>');">
											</div>
											<div class="producto-meta">
												<h3><?php the_title(); ?></h3>
											</div>
										</a>
										<div class="precio">
											<span class="precio-old">$/<?php echo get_post_meta( $post->ID, 'precio_anterior', true );?></span>
											<span class="precio-new">$/<?php echo get_post_meta( $post->ID, 'precio_actual', true );?></span>
										</div>
									</div>
								</div>
								<div class="espacio1"></div>
								<?php
							endwhile;
							wp_reset_postdata();
							?>
						</article> 						

			 		</div>
			 	</div>
			 	<div class="col-xs-12 col-ms-6 col-md-3 col-lg-3"> </div>
			 </div>
		</div>
	</div>
</div>	