<?php 
/**
 * Template Name: about
 */
?>
<?php get_header();?>

<main>
    <div class="py-5">
        <div class="container">
            <div class="row">
                <h1><?php the_title();?></h1>
                <?php the_content();?>

            </div>
        </div>
    </div>
</main>

<?php get_footer();?>