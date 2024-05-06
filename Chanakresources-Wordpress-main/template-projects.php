<?php 
    // Template Name: Projects
    get_header(); 
?>


<div id="crBannerCarasoul" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner carasoulMinHeight">
        <div class="card carasoulMinHeight carousel-item active text-white border-0 w-100">
            <div class="row carasoulMinHeight h-100 w-100 p-0 mx-auto">
                <div class="CarasoulCardText carasoulMinHeight col-12 col-xl-6 p-0 mx-auto bgColor-Primary">
                    <div class="overlay-text mx-auto position-absolute">
                        <h6 class="strike-Text w-75 text-right">
                            <span class="bgColor-Primary">We want you to Succeed</span>
                        </h6>
                        <h1>
                            Our
                            <span>Projects</span>
                        </h1>
                        <p class="mt-5 text-white">
                            Objectively integrate enterprise-wide strategic theme
                            areas with functionalized infrastructures,
                            interactively productize premium technologies.
                        </p>
                    </div>
                </div>
                <div class="CarasoulCardImg carasoulMinHeight d-none d-xl-block col-xl-6 p-0">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img-slider-02.png" class="w-100 h-100" alt="...">
                </div>
            </div>
        </div>
    </div>
</div>

<div class="projects container row px-sm-0 mx-auto">
    <div class="projectShow col-md-10 col-lg-8 col-xl-7 px-0 mx-auto">
        <?php
            global $query_string;
            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
            $args = array('posts_per_page' => 3, 'paged' => $paged, 'cat' => 2);
            query_posts($args);
            if ( have_posts() ) : while ( have_posts() ) : the_post(); 
        ?>
        <div class="ProjectCard card rounded-0 pb-4 my-5">
            <div class="card card-img-top text-white rounded-0">
                <?php $postImgPath = wp_get_attachment_image_src(get_post_thumbnail_id()); ?>
                <img src="<?php echo $postImgPath ? $postImgPath[0] : get_template_directory_uri().'/assets/Project1.PNG'; ?>" class="w-100" alt="<?php the_title(); ?>">
                <div class="card-img-overlay">
                    <h5 class="UploadText text-capitalize">
                        <?php echo human_time_diff(get_the_time('U'), current_time('U')) ?>
                    </h5>
                </div>
            </div>
            <div class="ProjectCardBody card-body text-center">
                <h5 class="card-title"><?php the_title(); ?></h5>
                <p class="card-text text-muted">
                    - by <span class="text-capitalize"><?php echo get_the_author(); ?></span>
                </p>
                <p class="card-text"><?php echo wp_trim_words( get_the_content(), 55 ); ?></p>
            </div>
        </div>
        <?php endwhile; endif; ?>

    </div>
    <div class="col-xl-1"></div>
    <div class="sidebar col-12 col-xl-4 pr-sm-0">
        <div class="row">
            <div class="RecentPost col-12 col-md-6 col-xl-12 mt-5">
                <h3 class="heading pb-2 mb-4 border-bottom">Recent Posts</h3>

                <?php 
                    $recentPost = get_posts(array(
                        'category' => 2,
                        'orderby'	=> 'time',
                        'order'		=> 'DESC',
                        'numberposts' => 4
                    ));

                    if(!empty($recentPost)){
                        foreach($recentPost as $post){ 
                            $postImgPath = wp_get_attachment_image_src(get_post_thumbnail_id());
                ?>
                <div class="Post mt-3 mb-4 border">
                    <a class="text-decoration-none" href="<?php the_permalink(); ?>">
                        <div class="PostImg rounded-circle">
                            <img class="w-100 h-100" src="<?php echo $postImgPath ? $postImgPath[0] : get_template_directory_uri().'/assets/Project1.PNG'; ?>" alt="<?php the_title(); ?>">
                        </div>
                        <div class="w-auto">
                            <div class="card-body pt-2 px-3 pb-3">
                                <p class="card-text text-dark mb-1"><?php echo wp_trim_words(get_the_title(), 15 ); ?></p>
                                <p class="card-text">
                                    <small class="text-muted">
                                        <span class="text-capitalize"><?php echo human_time_diff(get_the_time('U'), current_time('U')) ?></span> ago
                                    </small>
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
                <?php 
                        }
                    }
                ?>
            </div>
        </div>
    </div>
</div>

<?php pp_pagination_nav(); ?>
<?php wp_reset_query(); ?>



<?php get_footer(); ?> 