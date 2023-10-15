<?php get_header(); ?>
   <div class="container">
       <div class="row">
            <?php
                while(have_posts()) {
                    the_post();
                    ?>
                    <div class="col-12">
                        <div class="card">
                            <h2 class="my-3 h4 primary"> <?php the_title(); ?> </h3>
                            <div class="imgContainer">
                            <figure class="img-thumbnail">
                                <img src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" alt="" >
                            </figure>
                            </div>
                            <p> <?php the_content(); ?> </p>
                        </div>
                    </div>
                        
                    <?php
                    the_content();
                    comment_form();
                }
            ?>
        </div>
   </div>
<?php get_footer(); ?>