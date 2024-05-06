<?php  get_header(); ?>

<div class="blogHeading container py-1" aria-label="breadcrumb">
    <ol class="breadcrumb bg-white px-0 mb-0">
        <li class="breadcrumb-item"><a href="<?php echo site_url(); ?>">Home</a></li>
        <?php 
        $baseURL = get_template_directory_uri();
        if(wp_get_post_categories(get_the_ID())[0] == 2){
            ?> <li class="breadcrumb-item"><a href="<?php echo $baseURL; ?>/projects">Projects</a></li> <?php
        } else {
            ?> <li class="breadcrumb-item"><a href="<?php echo $baseURL; ?>/insights">Insights</a></li> <?php
        }
        ?>
        <li class="breadcrumb-item active" aria-current="page"><?php echo wp_trim_words(get_the_title(), 5 ); ?></li>
    </ol>
</div>


<div class="container mb-5">
    <div class="blog card rounded-0 border-0">
        <?php 
            $postImgPath = wp_get_attachment_image_src(get_post_thumbnail_id());
            $category = array_map(function ($cat){  return($cat->cat_name); }, get_the_category())
        ?>
        <div class="imgContainer">
            <img 
                src="<?php echo $postImgPath ? $postImgPath[0] : get_template_directory_uri().'/assets/Rectangle_95.png'; ?>" 
                class="rounded-1" alt="<?php the_title(); ?>"
            >
        </div>
        <div class="card-body px-0 pt-xl-4">
            <h5 class="card-title fw-bold"><?php the_title(); ?></h5>
            <div class="d-flex mt-2 mb-3">
                <p class="w-75 m-0">
                    <i class="fas fa-globe-africa mr-2"></i>
                    <?php echo join(", ",array_chunk($category, 4)[0]); ?>
                </p>
                <p class="w-25 m-0 text-right">
                    <i class="far fa-clock mr-2"></i><?php the_time(); ?>
                </p>
            </div>
            <?php the_content(); ?>
        </div>
    </div>
</div>

<?php get_footer(); ?> 