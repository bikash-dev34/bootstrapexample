<div class="container">
    <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
        <!-- <p class="col-md-4 mb-0 text-muted">&copy;copyright -->
        <!-- </p> -->
        <p> <?php 
                $copyright=get_field("copyright","option");?>


            <?php echo $copyright;?></p>
        <a href="/"
            class="col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
            <svg class="bi me-2" width="40" height="32">
                <use xlink:href="#bootstrap" />
            </svg>
        </a>


        <?php 
                    wp_nav_menu(array(
                       
                        'theme_location'=>'first-menu',
                        'container'=>'',
                        'container_class'=>'',
                        'menu_class'=>'nav',
                       
                        'menu_id'=>'',
                        'link_class'   => 'nav-link px-2 text-muted',


                    ));
                ?>
    </footer>
</div>
<?php wp_footer();?>
</body>

</html>