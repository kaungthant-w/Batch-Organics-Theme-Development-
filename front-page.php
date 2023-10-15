<?php get_header(); ?>
<section class="heroSection">
        <h1 class="h3">plant power</h1>
        <p class="text">flash frozen smoothies + breakfasts, deliverer to your door</p>
        <a href="<?php echo site_url('index.php/plant'); ?>" class="btn">Readme More</a>
</section>
<section class="suggestion">
        <div class="suggestion_flex">
            <div class="suggestion_num">1.</div>
            <div class="suggestion_content">
                <h3 class="suggestion_content_title">create your perfect box</h3>
                <p class="suggestion_content_para">Choose your box size and fill it up with your choose of delicious breakfast bowls or smoothies.</p>
            </div>
        </div>
        <div class="suggestion_flex">
            <div class="suggestion_num">2.</div>
            <div class="suggestion_content">
                <h3 class="suggestion_content_title">get once or subscribe</h3>
                <p class="suggestion_content_para">Subscriptions are delivered for free, fully flexible no minimum contract.</p>
            </div>
        </div>
        <div class="suggestion_flex">
            <div class="suggestion_num">3.</div>
            <div class="suggestion_content">
                <h3 class="suggestion_content_title">free the freezer</h3>
                <p class="suggestion_content_para"> Keep your cups frozen, Just add a liquid base when you're ready to blend / activate overnight. </p>
            </div>
        </div>
    </section>
    <section class="smoothiesSection">
        <h2 class="smoothiesSection-head">organic smoothies</h2>
        <div class="smoothiesSection-container">
            <?php

                $args = array(
                    'post_type' => 'smoothies',
                    'posts_per_page' => 4,
                );

                $blogposts = new WP_Query($args);
                
                while($blogposts->have_posts()) {
                    $blogposts->the_post();
            ?>
            <div class="smoothiesSection-card" id="organicId">
                <h2 class="smoothiesSection-title"><?php the_title(); ?></h2>
                <img class="smoothiesSection-img" src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" alt="">
                <a href="<?php the_permalink(); ?>" class="smoothiesSection-btn">ReadMore</a>
            </div>
            <?php } 
            wp_reset_query();
            ?>
        </div>
    </section>
    <section class="smoothiesSection">
        <h2 class="smoothiesSection-head">breakfastSection</h2>
        <div class="smoothiesSection-container">
            <?php

                $args = array(
                    'post_type' => 'breakfastSection',
                    'posts_per_page' => 4,
                );

                $blogposts = new WP_Query($args);
                
                while($blogposts->have_posts()) {
                    $blogposts->the_post();
            ?>
            <div class="smoothiesSection-card">
                <h2 class="smoothiesSection-title"><?php the_title(); ?></h2>
                <img class="smoothiesSection-img" src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" alt="">
                <a href="<?php the_permalink(); ?>" class="smoothiesSection-btn">ReadMore...</a>
            </div>
            <?php } 
            ?>
        </div>
    </section>
    <section class="smoothiesSection">
        <h2 class="smoothiesSection-head">organic mylks</h2>
        <div class="mylkSection-container">

            <?php

                $args = array(
                    'post_type' => 'mylks',
                    'posts_per_page' => 4,
                );

                $blogposts = new WP_Query($args);

                while($blogposts->have_posts()) {
                    $blogposts->the_post();
                ?>
                <div class="smoothiesSection-card">
                <h2 class="smoothiesSection-title"><?php the_title(); ?></h2>
                <img class="smoothiesSection-img" src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" alt="">
                <a href="<?php the_permalink(); ?>" class="smoothiesSection-btn">ReadMore...</a>
                </div>
                <?php } 
                wp_reset_query();
            ?>
        </div>
    </section>
    <section class="signupSection">
        <h2 class="signupSection-head" for="id">sign up for news <span>& special offers</span></h2>
        <input type="email" name="email" class="signupSection-input" id="email" placeholder="EMAIL ADDRESS">
        <span> &rarr; </span>
    </section>
<?php get_footer(); ?>