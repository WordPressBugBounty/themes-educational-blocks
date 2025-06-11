<?php
/**
 * Title: Banner
 * Slug: educational-blocks/banner
 * Categories: educational-blocks, banner
 */

$educational_blocks_image_url = trailingslashit(get_template_directory_uri());
$educational_blocks_image = array(
    $educational_blocks_image_url . 'images/banner.png',
    $educational_blocks_image_url . 'images/slide3.jpg',
    $educational_blocks_image_url . 'images/testimonial.jpg',
);
?>

<!-- wp:group {"className":"educational-blocks-swiper bannerimage","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"},"blockGap":"0"}},"layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group educational-blocks-swiper bannerimage" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"className":"educational-blocks-swiper-holder swiper-wrapper","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"right":"0","left":"0","top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group educational-blocks-swiper-holder swiper-wrapper" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:cover {"url":"<?php echo esc_url($educational_blocks_image[0]) ?>","id":53,"dimRatio":0,"focalPoint":{"x":0.5,"y":0.5},"minHeight":800,"minHeightUnit":"px","align":"wide","className":"banner-image-cover swiper-slide","layout":{"type":"constrained","contentSize":"80%"}} -->
<div class="wp-block-cover alignwide banner-image-cover swiper-slide" style="min-height:800px"><img class="wp-block-cover__image-background wp-image-53" alt="" src="<?php echo esc_url($educational_blocks_image[0]) ?>" style="object-position:50% 50%" data-object-fit="cover" data-object-position="50% 50%"/><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"className":"banner-content wow zoomIn"} -->
<div class="wp-block-column banner-content wow zoomIn"><!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"textAlign":"center","level":1,"style":{"typography":{"fontSize":"60px"},"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"textColor":"white","fontFamily":"roboto-slab"} -->
<h1 class="wp-block-heading has-text-align-center has-white-color has-text-color has-link-color has-roboto-slab-font-family" style="font-size:60px"><?php esc_html_e('Lorem Ipsum','educational-blocks'); ?></h1>
<!-- /wp:heading -->

<!-- wp:heading {"textAlign":"center","level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"400","fontSize":"40px","lineHeight":"1.1"},"spacing":{"margin":{"top":"0","bottom":"0"}},"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"textColor":"white"} -->
<h3 class="wp-block-heading has-text-align-center has-white-color has-text-color has-link-color" style="margin-top:0;margin-bottom:0;font-size:40px;font-style:normal;font-weight:400;line-height:1.1"><?php esc_html_e('How to Create New Things','educational-blocks'); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}},"typography":{"fontStyle":"normal","fontWeight":"300"},"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"textColor":"white"} -->
<p class="has-text-align-center has-white-color has-text-color has-link-color" style="margin-top:var(--wp--preset--spacing--30);margin-bottom:var(--wp--preset--spacing--30);font-style:normal;font-weight:300"><?php esc_html_e("Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's",'educational-blocks'); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div></div>
<!-- /wp:cover -->

<!-- wp:cover {"url":"<?php echo esc_url($educational_blocks_image[1]) ?>","id":16,"dimRatio":0,"customOverlayColor":"#8d8887","isUserOverlayColor":false,"minHeight":800,"minHeightUnit":"px","isDark":false,"sizeSlug":"large","align":"wide","className":"banner-image-cover swiper-slide","layout":{"type":"constrained","contentSize":"80%"}} -->
<div class="wp-block-cover alignwide is-light banner-image-cover swiper-slide" style="min-height:800px"><img class="wp-block-cover__image-background wp-image-16 size-large" alt="" src="<?php echo esc_url($educational_blocks_image[1]) ?>" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim" style="background-color:#8d8887"></span><div class="wp-block-cover__inner-container"><!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"className":"banner-content wow zoomIn"} -->
<div class="wp-block-column banner-content wow zoomIn"><!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"textAlign":"center","level":1,"style":{"typography":{"fontSize":"60px"},"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"textColor":"white","fontFamily":"roboto-slab"} -->
<h1 class="wp-block-heading has-text-align-center has-white-color has-text-color has-link-color has-roboto-slab-font-family" style="font-size:60px"><?php esc_html_e('Lorem Ipsum','educational-blocks'); ?></h1>
<!-- /wp:heading -->

<!-- wp:heading {"textAlign":"center","level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"400","fontSize":"40px","lineHeight":"1.1"},"spacing":{"margin":{"top":"0","bottom":"0"}},"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"textColor":"white"} -->
<h3 class="wp-block-heading has-text-align-center has-white-color has-text-color has-link-color" style="margin-top:0;margin-bottom:0;font-size:40px;font-style:normal;font-weight:400;line-height:1.1"><?php esc_html_e('How to Create New Things','educational-blocks'); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}},"typography":{"fontStyle":"normal","fontWeight":"300"},"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"textColor":"white"} -->
<p class="has-text-align-center has-white-color has-text-color has-link-color" style="margin-top:var(--wp--preset--spacing--30);margin-bottom:var(--wp--preset--spacing--30);font-style:normal;font-weight:300"><?php esc_html_e("Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's",'educational-blocks'); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div></div>
<!-- /wp:cover -->

<!-- wp:cover {"url":"<?php echo esc_url($educational_blocks_image[2]) ?>","id":14,"dimRatio":0,"customOverlayColor":"#786c61","isUserOverlayColor":false,"minHeight":800,"minHeightUnit":"px","sizeSlug":"large","align":"wide","className":"banner-image-cover swiper-slide","layout":{"type":"constrained","contentSize":"80%"}} -->
<div class="wp-block-cover alignwide banner-image-cover swiper-slide" style="min-height:800px"><img class="wp-block-cover__image-background wp-image-14 size-large" alt="" src="<?php echo esc_url($educational_blocks_image[2]) ?>" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim" style="background-color:#786c61"></span><div class="wp-block-cover__inner-container"><!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"className":"banner-content wow zoomIn"} -->
<div class="wp-block-column banner-content wow zoomIn"><!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"textAlign":"center","level":1,"style":{"typography":{"fontSize":"60px"},"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"textColor":"white","fontFamily":"roboto-slab"} -->
<h1 class="wp-block-heading has-text-align-center has-white-color has-text-color has-link-color has-roboto-slab-font-family" style="font-size:60px"><?php esc_html_e('Lorem Ipsum','educational-blocks'); ?></h1>
<!-- /wp:heading -->

<!-- wp:heading {"textAlign":"center","level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"400","fontSize":"40px","lineHeight":"1.1"},"spacing":{"margin":{"top":"0","bottom":"0"}},"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"textColor":"white"} -->
<h3 class="wp-block-heading has-text-align-center has-white-color has-text-color has-link-color" style="margin-top:0;margin-bottom:0;font-size:40px;font-style:normal;font-weight:400;line-height:1.1"><?php esc_html_e('How to Create New Things','educational-blocks'); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}},"typography":{"fontStyle":"normal","fontWeight":"300"},"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"textColor":"white"} -->
<p class="has-text-align-center has-white-color has-text-color has-link-color" style="margin-top:var(--wp--preset--spacing--30);margin-bottom:var(--wp--preset--spacing--30);font-style:normal;font-weight:300"><?php esc_html_e("Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's",'educational-blocks'); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"educational-blocks-swiper-controls","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group educational-blocks-swiper-controls" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:html -->
<div class="educational-blocks-swiper-button-prev swiper-button-prev"></div>
        <div class="educational-blocks-swiper-button-next swiper-button-next"></div>
        <div class="educational-blocks-pagination"></div>
<!-- /wp:html --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->