<?php get_header(); ?>

<!-- Header Start -->
<div class="container-fluid bg-breadcrumb">
            <div class="container text-center py-5" style="max-width: 900px;">
                <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">About Us</h4>
                <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                    <li class="breadcrumb-item"><a href="/front-page.php">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item active text-primary">About</li>
                </ol>    
            </div>
        </div>
        <!-- Header End -->

<!-- Feature Start -->
<?php echo get_template_part('template-parts/content', 'feature'); ?>
<!-- Feature End -->

<!-- Gallery Start -->
<?php echo get_template_part('template-parts/content', 'gallery'); ?>
<!-- Gallery End -->

<!-- Team Start -->
<?php echo get_template_part('template-parts/content', 'team'); ?>
<!-- Team End -->

<?php get_footer(); ?>