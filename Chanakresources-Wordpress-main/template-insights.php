<?php 
    // Template Name: Insights
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
                            NEWS <br>
                            <span>& INSIGHTS</span>
                        </h1>
                        <p class="mt-4 text-white">
                            Objectively integrate enterprise-wide strategic theme areas with functionalized
                            infrastructures, interactively productize premium technologies.
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

<?php if(get_query_var('paged') == 0){ ?>
<div class="recentPublication container row mx-auto px-sm-0 mt-5 pt-4">
    <div class="publication col-lg-8 pl-lg-0 mb-5">
        <h4 class="mb-4">Most Recent Publications</h4>
        <?php 
            $recentPost = get_posts(array(
                'category__not_in' => array(2),
                'orderby'	=> 'time',
                'order'		=> 'DESC',
                'numberposts' => 3
            ));

            if(!empty($recentPost)){
                foreach($recentPost as $post){ 
                    $postImgPath = wp_get_attachment_image_src(get_post_thumbnail_id());
        ?>
        <div class="recentPost card mb-3 border-0 mb-4">
            <div class="row no-gutters">
                <div class="recentPostImg col-sm-3 rounded">
                    <img class="w-100 h-100" src="<?php echo $postImgPath ? $postImgPath[0] : get_template_directory_uri().'/assets/Rectangle_95.png'; ?>" alt="<?php the_title(); ?>">
                </div>
                <div class="col-sm-9">
                    <div class="recentPostBody card-body pt-3 pb-0">
                        <h5 class="card-title"><?php echo wp_trim_words(get_the_title(), 8 ); ?></h5>
                        <p class="card-text text-body mb-1">
                            <?php echo wp_trim_words( get_the_content(), 24 ); ?>
                        </p>
                        <div class="d-flex mb-1">
                            <a class="mr-auto text-decoration-none" href="<?php the_permalink(); ?>">
                                <small>Read More ...</small>
                            </a>
                            <p class="card-text">
                                <small class="text-muted">
                                    <i class="far fa-clock mr-2"></i><?php the_time(); ?>
                                </small>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php 
                }
            }
            else{
        ?>
        <h5>Sorry! No post made yet.</h5>
        <?php } ?>
    </div>
    <div class="subscribe col-12 col-sm-10 col-md-7 col-lg-4 pr-lg-0 mx-auto">
        <div class="subscribe-card card mt-4 rounded-0">
            <div class="card-img rounded-0">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/Rectangle_95.png" class="w-100 h-100 rounded-0" alt="...">
            </div>
            <form method="post" class="subscribe-body card-body">
                <h5 class="card-tittle">Subscribe to our Newsletter</h5>
                <p class="card-text mt-4">
                    Don’t miss our weekly newsletter with lots of guides and articles!
                </p>
                <input type="email" name="email" class="form-control" placeholder="Email Here ..." required>
                <input type="hidden" name="action" value="Sub_Newsletter" />
                <button type="submit" class="btn btn-danger d-block px-4 mt-3 mx-auto">Subscribe</button>
            </form>

            <?php
                if( $_SERVER['REQUEST_METHOD'] == 'POST' && !empty( $_POST['action'] ) && $_POST['action'] == "Sub_Newsletter") {
                    $array_interest = array(
                        'email' => is_email($_REQUEST['email'])
                    );

                    $Sub_Letter = array(
                        'post_title'   => wp_strip_all_tags('Newsletter Subscribed: '. $array_interest['email'] ),
                        'post_content' => $array_interest['email'],
                        'post_status'  => 'publish',
                        'post_type'    => 'sub_newsletter',
                    );
                    $PostID = wp_insert_post($Sub_Letter);
                    update_post_meta($PostID,'newsletter_meta_key', $array_interest);


                    if (isset($PostID) && $PostID==TRUE) {
                    ?>

                    <script type="text/javascript">
                        document.querySelector('body').classList.add('position-relative');
                        setTimeout(() => {
                            var alertNode = document.querySelector('.alert')
                            if (alertNode) { alertNode.lastElementChild.click(); }
                            document.querySelector('body').classList.remove('position-relative');
                        }, 5000);
                    </script>

                    <div class="alert floating alert-success alert-dismissible fade show m-0" role="alert">
                        <i class="fa-solid fa-circle-check me-2"></i>
                        <strong>Subscribed</strong>.
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <i class="fa-solid fa-xmark"></i>
                        </button>
                    </div>

                    <?php
                    }
                }
            ?>
        </div>
    </div>
</div>
<?php } ?>

<div class="news container mx-auto my-5 px-0">
    <div class="newsHeading text-center py-3">
        <h3 class="textColor-Black">News & <span class="textColor-Primary">Insights</span></h3>
    </div>
    <div id="newsBody" class="newsBody row mt-4 mx-auto">
    <?php
        global $query_string;
        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
        $args = array('posts_per_page' => 6, 'paged' => $paged, 'category__not_in' => array(2));
        query_posts($args);
        if ( have_posts() ) : while ( have_posts() ) : the_post(); 
    ?>
        <div class="col-12 col-md-6 col-xl-4 mt-5">
            <div class="newsCard card w-100 rounded-0 mx-auto">
                <div class="imageContainer card w-100 text-white border-0 rounded-0">
                    <?php 
                        $postImgPath = wp_get_attachment_image_src(get_post_thumbnail_id());
                        $category = (get_the_category())[0]->cat_name;
                    ?>
                    <img class="w-100 h-100" loading="lazy" 
                        src="<?php echo $postImgPath ? $postImgPath[0] : get_template_directory_uri().'/assets/Rectangle_95.png' ?>" 
                        alt="<?php the_title(); ?>"
                    >
                    <div class="card-img-overlay px-3 py-2">
                        <h5 class="text-center my-2">   
                            <?php echo get_the_date('d') ?> <br>
                            <small><?php echo get_the_date('M') ?></small>
                        </h5>
                    </div>
                </div>
                <div class="newsCardBody card-body">
                    <h5 class="card-title"><?php echo wp_trim_words(get_the_title(), 8 ); ?></h5>
                    <div class="footerText d-flex mt-2 mb-3">
                        <p class="w-50 m-0 disabled">
                            <i class="fas fa-globe-africa mr-2"></i><?php echo $category ?>
                        </p>
                        <p class="w-50 m-0">
                            <i class="far fa-clock mr-2"></i><?php the_time(); ?>
                        </p>
                    </div>
                    <p class="card-text text-justify">
                        <?php echo wp_trim_words( get_the_content(), 45 ); ?>
                    </p>
                    <a href="<?php the_permalink(); ?>" class="btn btn-outline-danger mt-2">Read More...</a>
                </div>
            </div>
        </div>
    <?php endwhile; endif; ?>
    </div>
</div>

<?php pp_pagination_nav(); ?>
<?php wp_reset_query(); ?>

<?php if(get_query_var('paged') > 0){ ?>
<script type="text/JavaScript"> 
    document.getElementById("newsBody").scrollIntoView({behavior: "smooth"});
</script>
<?php } ?>

<?php get_footer(); ?>