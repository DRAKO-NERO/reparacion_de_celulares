<?php
/**
 * Banner Section
 * 
 * slug: radiant-portfolio/banner
 * title: Banner
 * categories: radiant-portfolio
 */

return array(
    'title'      =>__( 'Banner', 'radiant-portfolio' ),
    'categories' => array( 'radiant-portfolio' ),
    'content'    => '<!-- wp:cover {"useFeaturedImage":true,"dimRatio":0,"isUserOverlayColor":true,"minHeight":700,"minHeightUnit":"px","contentPosition":"center center","isDark":false,"className":"banner-section","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"blockGap":"var:preset|spacing|40","margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"80%","wideSize":"80%"}} -->
<div class="wp-block-cover is-light banner-section" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;min-height:700px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:columns {"className":"banner-column-section"} -->
<div class="wp-block-columns banner-column-section"><!-- wp:column {"width":"40%","className":"column-section01"} -->
<div class="wp-block-column column-section01" style="flex-basis:40%"><!-- wp:columns {"className":"col-section01","style":{"spacing":{"margin":{"top":"var:preset|spacing|60"}}}} -->
<div class="wp-block-columns col-section01" style="margin-top:var(--wp--preset--spacing--60)"><!-- wp:column {"verticalAlignment":"top","width":"20%","className":"social-icon-column","style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|20","right":"var:preset|spacing|20"},"blockGap":"var:preset|spacing|20"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-column is-vertically-aligned-top social-icon-column" style="padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20);flex-basis:20%"><!-- wp:group {"className":"banner-social-icon","style":{"spacing":{"padding":{"right":"var:preset|spacing|20","left":"var:preset|spacing|20"},"blockGap":"var:preset|spacing|20"}},"backgroundColor":"accent","layout":{"type":"constrained","justifyContent":"center"}} -->
<div class="wp-block-group banner-social-icon has-accent-background-color has-background" style="padding-right:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)"><!-- wp:social-links {"iconColor":"primary","iconColorValue":"#000000","iconBackgroundColorValue":"#ffffff","openInNewTab":true,"className":"is-style-default","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|20","left":"var:preset|spacing|20"},"margin":{"bottom":"var:preset|spacing|30","top":"0"}}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
<ul class="wp-block-social-links has-icon-color has-icon-background-color is-style-default" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--30)"><!-- wp:social-link {"url":"www.youtube.com","service":"youtube"} /-->

<!-- wp:social-link {"url":"www.instagram.com","service":"instagram"} /-->

<!-- wp:social-link {"url":"www.twitter.com","service":"x"} /-->

<!-- wp:social-link {"url":"www.dribble.com","service":"dribbble"} /-->

<!-- wp:social-link {"url":"www.facebook.com","service":"facebook"} /--></ul>
<!-- /wp:social-links -->

<!-- wp:paragraph {"align":"center","className":"social-info-text","style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}}},"textColor":"background","fontSize":"extra-small","fontFamily":"figtree"} -->
<p class="has-text-align-center social-info-text has-background-color has-text-color has-link-color has-figtree-font-family has-extra-small-font-size">'. esc_html('Follow Us : ','radiant-portfolio') .'</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"100%","className":"banner-content-section","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}}}} -->
<div class="wp-block-column banner-content-section" style="padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70);flex-basis:100%"><!-- wp:heading {"style":{"typography":{"fontStyle":"normal","fontWeight":"800","lineHeight":1.6}},"fontSize":"large","fontFamily":"figtree"} -->
<h2 class="wp-block-heading has-figtree-font-family has-large-font-size" style="font-style:normal;font-weight:800;line-height:1.6">'. esc_html('I Am Mickle John Web Developer + UX Designer ','radiant-portfolio') .'</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"banner-col01-text","style":{"typography":{"fontStyle":"normal","fontWeight":"300","lineHeight":"1.5"}},"fontSize":"small","fontFamily":"raleway"} -->
<p class="banner-col01-text has-raleway-font-family has-small-font-size" style="font-style:normal;font-weight:300;line-height:1.5">'. esc_html('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.','radiant-portfolio') .'</p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"accent","className":"banner-button-text","style":{"border":{"radius":"8px"},"typography":{"fontStyle":"normal","fontWeight":"600"},"spacing":{"padding":{"left":"var:preset|spacing|40","right":"var:preset|spacing|40","top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}},"fontSize":"medium","fontFamily":"figtree"} -->
<div class="wp-block-button has-custom-font-size banner-button-text has-figtree-font-family has-medium-font-size" style="font-style:normal;font-weight:600"><a class="wp-block-button__link has-accent-background-color has-background wp-element-button" style="border-radius:8px;padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--40)">'. esc_html('Explore More','radiant-portfolio') .'</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:columns {"className":"banner-big-text"} -->
<div class="wp-block-columns banner-big-text"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:heading -->
<h2 class="wp-block-heading">'. esc_html('Portfolio','radiant-portfolio') .'</h2>
<!-- /wp:heading --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"60%","className":"column-section02","style":{"spacing":{"padding":{"left":"var:preset|spacing|40"}}}} -->
<div class="wp-block-column column-section02" style="padding-left:var(--wp--preset--spacing--40);flex-basis:60%"><!-- wp:image {"id":101,"sizeSlug":"full","linkDestination":"none","align":"center","className":"person-image"} -->
<figure class="wp-block-image aligncenter size-full person-image"><img src="'.esc_url(get_template_directory_uri()) .'/assets/images/banner.png" alt="" class="wp-image-101"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"client-group","style":{"color":{"background":"#2d2d33"},"spacing":{"blockGap":"var:preset|spacing|20","padding":{"right":"var:preset|spacing|50","left":"var:preset|spacing|50","top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}},"border":{"radius":{"topLeft":"30px","bottomLeft":"8px","bottomRight":"30px","topRight":"8px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group client-group has-background" style="border-top-left-radius:30px;border-top-right-radius:8px;border-bottom-left-radius:8px;border-bottom-right-radius:30px;background-color:#2d2d33;padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--50)"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}},"typography":{"fontStyle":"normal","fontWeight":"600"}},"textColor":"background","fontSize":"medium","fontFamily":"figtree"} -->
<p class="has-background-color has-text-color has-link-color has-figtree-font-family has-medium-font-size" style="font-style:normal;font-weight:600">'. esc_html('Client Review','radiant-portfolio') .'</p>
<!-- /wp:paragraph -->

<!-- wp:image {"id":102,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="'.esc_url(get_template_directory_uri()) .'/assets/images/Client.png" alt="" class="wp-image-102"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div></div>
<!-- /wp:cover -->',
);