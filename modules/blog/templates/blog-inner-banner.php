<?php
$blog_banner_id = get_field('avb_0_image', FL1_BLOG_PAGE_ID); // Blog page

$blog_banner = '';
if ($blog_banner_id) {
    $blog_banner = vt_resize($blog_banner_id, '', 1920, 1049, true);
    $blog_banner = $blog_banner['url'];
}

if ($blog_banner_id) : ?>
    <section class="avb">

        <div class="avb-banners avb-vh avb-dots- avb-inner avb-has-form">
            <div class="avb-banner avb-vh" data-type="avb_image">
                <div class="avb-banner__caption">
                    <div class="max__width">
                        <div class="avb-banner__caption-wrap">
                            <?php
                                if(is_category()):
                                    $type = 'category';
                            ?>
                                <h1><?php single_cat_title(); ?></h1>
                            <?php
                                elseif(is_tag()):
                                    $type = 'tag';
                            ?>
                                <h1><?php single_tag_title(); ?></h1>
                            <?php endif; ?>
                            <p>Blog <?php echo $type; ?></p>
                        </div>
                    </div>
                </div>

                <figure class="avb-banner__overlay opacity-40"></figure>

                <div class="avb-banner__media">
                    <div class="avb-banner__medium image show" style="background-image:url(<?php echo $blog_banner; ?>);" role="img" alt="Blog">
                        <img alt="Blog" src="<?php echo $blog_banner; ?>">
                    </div>
                </div>
            </div>                
        </div><!-- avb-banners -->
    </section>
<?php endif; ?>