<?php get_header(); ?>

<!-- Header Start -->
<div class="container-fluid bg-breadcrumb mb-5">
    <div class="container text-center py-5" style="max-width: 900px;">
        <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">Our Services</h4>
        <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
            <li class="breadcrumb-item"><a href="/water-park">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Pages</a></li>
            <li class="breadcrumb-item active text-primary">Service</li>
        </ol>
    </div>
</div>
<!-- Header End -->

<!-- Service Start -->
<?php echo get_template_part('template-parts/content', 'service'); ?>
<!-- Service End -->

<!-- Feature Start -->
<?php echo get_template_part('template-parts/content', 'feature'); ?>
<!-- Feature End -->

<!-- Testimonial Start -->
<?php echo get_template_part('template-parts/content', 'testimonials'); ?>
<!-- Testimonial End -->

<?php get_footer(); ?>