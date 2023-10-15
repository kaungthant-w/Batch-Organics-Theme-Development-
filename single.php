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
                                    <img src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" alt="">
                                </figure>
                            </div>
                            <p> <?php the_content(); ?> </p>
                        </div>
                    </div>

                    <div class="commentContainer">
                        <?php 
                            comment_form();
                        
                            $comments_number = get_comments_number();
                            if ($comments_number != 0) {
                                ?>
                                <div class="comments">
                                    <h3>Comments</h3>
                                    <ol class="all-comments">
                                        <?php 
                                            $comments = get_comments(array(
                                                'post_id' => $post->ID,
                                                'status' => 'approve'
                                            ));

                                            foreach ($comments as $comment) {
                                                ?>
                                                <li>
                                                    <?php echo esc_html($comment->comment_content); ?>
                                                </li>
                                                <?php 
                                            }
                                        ?>
                                    </ol>
                                </div>
                                <?php 
                            }
                        ?>
                    </div>
                <?php    
                }
            ?>
        </div>
   </div>
<?php get_footer(); ?>
