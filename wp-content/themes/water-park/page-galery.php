<?php get_header(); ?>

<!-- Gallery Start -->
<div class="container-fluid gallery py-5">
<?php if( function_exists('photo_gallery') ) { photo_gallery(1); } ?>
</div>
<!-- Gallery End -->

<?php get_footer(); ?>