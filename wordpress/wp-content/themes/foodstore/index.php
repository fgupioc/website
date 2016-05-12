<?php get_header(); ?>
 <div class="container"> 
 	<div class="row">
 		<!-- begin sidebar-left-->
 		<div id="sidebar-left" class="col-xs-3 col-sm-3 col-md-3"> 	 
 			<!-- Begin sidebar-left-->
            <?php include('inc/sidebar-left.php') ?>
            <!-- End sidebar-left -->	
 		</div>
 		<!-- end sidebar-left-->
 		<!-- begin sidebar-main-->
 		<section id="siderbar-main" class="col-xs-9 col-sm-9 col-ms-9">
 			<!-- Begin sidebar-main-->
            <?php include('inc/sidebar-main.php') ?>
            <!-- End sidebar-main -->	
 		</section>
 		<!-- end sidebar-main-->
 	</div>
 	<div class="row">
 		<section class="col-xs-12 col-sm-12 col-md-12">
 			<!-- Begin sidebar-main-->
            <?php include('inc/sidebar-mid.php') ?>
            <!-- End sidebar-main -->	
 		</section>
 	</div>
 </div>
<?php get_footer();?>
<script>
	$(document).ready(function(){
		
	});
</script>