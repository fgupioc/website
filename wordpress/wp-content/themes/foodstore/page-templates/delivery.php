<?php /* Template Name: delivery */
?>
<?php get_header(); ?>
    <div class="container">
        <div class="row">
            <!-- begin sidebar-left-->
            <div id="sidebar-left" class="col-xs-3 col-sm-3 col-md-3">
                <!-- Begin sidebar-left-->
                <?php get_template_part( 'inc/sidebar', 'left' ); ?>
                <!-- End sidebar-left -->
            </div>
            <!-- end sidebar-left-->
            <!-- begin sidebar-main-->
            <section id="siderbar-main" class="col-xs-9 col-sm-9 col-ms-9">
                <!-- Begin sidebar-main-->
                <div id="contenido-main">

                    <div class="row">
                        <!-- begin contenido de detalle -->
                        <div class="container">
                            <div class="title">
                                <h1 >Delivery</h1>
                            </div>
                            <div class="wrapper">
                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain. These cases are perfectly simple and easy to distinguish.In a free hour, when our power of choice is untrammelled and when nothing prevents our being able to do what we like best, every pleasure is to be welcomed and every pain avoided. But in certain circumstances and owing to the claims of duty or the obligations of business it will frequently occur that pleasures have to be repudiated and annoyances accepted. The wise man therefore always holds in these matters to this principle of selection: he rejects pleasures to secure other greater pleasures, or else he endures pains to avoid worse pains.
                                </p>
                            </div>
                            <div class="buttons">
                                <div class="right">
                                    <a href="<?php echo home_url(); ?>" class="button btn btn-theme-default"> Regresar </a>
                                </div>
                            </div>

                        </div>
                        <!--end contenido de detalle -->
                    </div>
                </div>
                <!-- End sidebar-main -->
            </section>
            <!-- end sidebar-main-->
        </div>
        <div class="row">
            <section class="col-xs-12 col-sm-12 col-md-12">
                <!-- Begin sidebar-main-->
                <?php get_template_part( 'inc/sidebar', 'mid' ); ?>
                <!-- End sidebar-main -->
            </section>
        </div>
    </div>
<?php get_footer(); ?>