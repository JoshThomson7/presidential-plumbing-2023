<?php
/*
*	Blog Single
*
*	@package Blog
*	@version 1.0
*/

global $post;
get_header();

$blog = new FL1_Blog($post->ID);

// Image
$blog_image = $blog->image(900, 700, true);

// Main category
$blog_cat_id = $blog->main_category('ids');
$blog_cat = $blog->main_category('id=>name');

include 'blog-inner-banner.php';

$post_id = $post->ID;
$post = get_post($post_id);
$author_id = $post->post_author;
$author = new FL1_User($author_id);
?>

<div class="max__width blog__single-wrapper">
    <div class="blog__single">

        <div class="blog__info">
            <h5><a href="<?php echo esc_url(get_permalink(FL1_BLOG_PAGE_ID)); ?>">&lsaquo; Blog</a> / <?php echo $blog_cat; ?></h5>
            <h1><?php echo get_the_title($post->ID); ?></h1>
            <!-- <date> -->
                <?php //echo $blog->date('M jS Y'); ?>
            <!-- </date> -->

            <?php if ($blog->excerpt(1000)) : ?>
                <p class="blog__excerpt"><?php echo $blog->excerpt(1000); ?></p>
            <?php endif; ?>
        </div>

        <?php
        if (has_post_thumbnail()) :
            $blog_image = $blog->image(900, 700, true);
        ?>
            <div class="blog__featured__image">
                <img src="<?php echo $blog_image['url'] ?>" alt="<?php the_title(); ?>">
            </div><!-- blog__featured__image -->
        <?php endif; ?>

        <?php flexible_content(); ?>

        <?php if($author_id != 1): ?>
            <article class="author">
                <?php if($author->get_profile_picture_id()): ?>
                    <figure>
                        <img src="<?php echo $author->get_profile_picture(); ?>" alt="<?php echo $author->get_full_name(); ?>">
                    </figure>
                <?php endif; ?>

                <div class="author-content">
                    <h4><?php echo $author->get_full_name(); ?></h4>
                    <h6><?php echo $author->get_first_name(); ?> is the <?php echo $author->get_meta('user_job_title'); ?> at <?php bloginfo('name'); ?></h6>
                    <?php if($author->get_meta('user_show_bio') && $author->get_meta('user_bio')): ?>
                        <div class="description">
                            <p><?php echo $author->get_meta('user_bio'); ?></p>
                        </div>
                    <?php endif; ?>

                    <ul>
                        <li>
                            <i class="fa-regular fa-user"></i> <a href="<?php echo get_permalink(get_page_by_path('about-us')); ?>#whoare_section">More about <?php echo $author->get_first_name(); ?></a>
                        </li>
                        <li>
                            <i class="fa-regular fa-tag"></i> Published under <a href="<?php echo get_term_link($blog_cat_id, 'category'); ?>"><?php echo $blog->main_category('id=>name'); ?></a>
                        </li>
                    </ul>
                </div>
            </article>
        <?php endif ?>
    </div><!-- blog__single -->

    <?php include 'blog-filters.php'; ?>
</div><!-- max__width -->

<?php get_footer(); ?>