<?php get_header();?>
<main>
    <div class="py-5">
        <div class="container">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                <?php while(have_posts()){
                    the_post();
                    ?>
                <div class="col">
                    <div class="card shadow-sm">
                        <img class="card-img-top" src="<?php the_post_thumbnail();?>" alt="" />
                        <div class="card-body border-top">
                            <h2><?php the_title();?></h2>
                            <p><?php the_content();?></p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <a href="<?php the_permalink(); ?>" class="btn btn-sm btn-outline-secondary">
                                        <?php echo get_post_meta($post->ID, 'view_time', true); ?>
                                    </a>
                                </div>
                                <small class="text-muted"><?php echo get_post_meta($post->ID, 'time', true); ?>
                                </small>
                            </div>
                        </div>
                    </div>
                </div>

                <?php }?>

            </div>
        </div>
    </div>
</main>

<?php get_footer();?>