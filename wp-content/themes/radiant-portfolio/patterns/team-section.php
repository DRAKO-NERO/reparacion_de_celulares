<?php
/**
 * Category Section
 * 
 * slug: radiant-portfolio/team-section
 * title: Team Section
 * categories: radiant-portfolio
 */

return array(
    'title'      =>__( 'Team Section', 'radiant-portfolio' ),
    'categories' => array( 'radiant-portfolio' ),
    'content'    => '<!-- wp:spacer {"height":"60px"} -->
<div style="height:60px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"className":"services-box","layout":{"type":"constrained","contentSize":"80%"}} -->
<div class="wp-block-group services-box"><!-- wp:group {"className":"service-group","style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group service-group"><!-- wp:heading {"className":"team-heading","style":{"typography":{"fontSize":"30px"},"spacing":{"margin":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|40"}}},"fontFamily":"figtree"} -->
<h2 class="wp-block-heading team-heading has-figtree-font-family" style="margin-top:var(--wp--preset--spacing--20);margin-bottom:var(--wp--preset--spacing--40);font-size:30px">'. esc_html('Our Team','radiant-portfolio') .'</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"banner-col01-text","style":{"typography":{"fontStyle":"normal","fontWeight":"500","lineHeight":"1.5"}},"fontSize":"small","fontFamily":"raleway"} -->
<p class="banner-col01-text has-raleway-font-family has-small-font-size" style="font-style:normal;font-weight:500;line-height:1.5">'. esc_html('Lorem ipsum dolor sit amet, cibo mundi ea duo, vim exerci','radiant-portfolio') .'</p>
<!-- /wp:paragraph -->

<!-- wp:columns {"className":"team-section","style":{"spacing":{"margin":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}}}} -->
<div class="wp-block-columns team-section" style="margin-top:var(--wp--preset--spacing--40);margin-bottom:var(--wp--preset--spacing--40)"><!-- wp:column {"className":"team-member","style":{"spacing":{"blockGap":"var:preset|spacing|20"}}} -->
<div class="wp-block-column team-member"><!-- wp:columns {"className":"star-rating-group"} -->
<div class="wp-block-columns star-rating-group"><!-- wp:column {"width":"100%"} -->
<div class="wp-block-column" style="flex-basis:100%"><!-- wp:image {"id":41,"width":"106px","height":"auto","sizeSlug":"full","linkDestination":"none","align":"left"} -->
<figure class="wp-block-image alignleft size-full is-resized"><img src="'.esc_url(get_template_directory_uri()) .'/assets/images/review.png" alt="" class="wp-image-41" style="width:106px;height:auto"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:columns {"className":"team-member-content","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|40"},"padding":{"right":"var:preset|spacing|40"},"margin":{"top":"0","bottom":"0"}}}} -->
<div class="wp-block-columns team-member-content" style="margin-top:0;margin-bottom:0;padding-right:var(--wp--preset--spacing--40)"><!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}}} -->
<div class="wp-block-column"><!-- wp:image {"id":104,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="'.esc_url(get_template_directory_uri()) .'/assets/images/team01.png" alt="" class="wp-image-104"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"className":"team-col02","style":{"spacing":{"padding":{"top":"0","bottom":"0"},"blockGap":"0"}}} -->
<div class="wp-block-column team-col02" style="padding-top:0;padding-bottom:0"><!-- wp:heading {"textAlign":"left","level":4,"style":{"typography":{"fontStyle":"normal","fontWeight":"800","lineHeight":"1.5","fontSize":"20px"},"spacing":{"margin":{"top":"var:preset|spacing|20"}}},"fontFamily":"figtree"} -->
<h4 class="wp-block-heading has-text-align-left has-figtree-font-family" style="margin-top:var(--wp--preset--spacing--20);font-size:20px;font-style:normal;font-weight:800;line-height:1.5">'. esc_html('Mike Hussy','radiant-portfolio') .'</h4>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"left","style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}}},"fontSize":"small","fontFamily":"raleway"} -->
<p class="has-text-align-left has-raleway-font-family has-small-font-size" style="padding-top:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20)">'. esc_html('Founder','radiant-portfolio') .'</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"left","className":"team-text","style":{"typography":{"lineHeight":1.6}},"fontSize":"tiny","fontFamily":"raleway"} -->
<p class="has-text-align-left team-text has-raleway-font-family has-tiny-font-size" style="line-height:1.6">'. esc_html('Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.','radiant-portfolio') .'</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:social-links {"customIconBackgroundColor":"#2d2d33","iconBackgroundColorValue":"#2d2d33","openInNewTab":true,"size":"has-normal-icon-size","className":"is-style-default","style":{"spacing":{"margin":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"blockGap":{"top":"var:preset|spacing|30","left":"var:preset|spacing|20"}}},"layout":{"type":"flex","justifyContent":"left"}} -->
<ul class="wp-block-social-links has-normal-icon-size has-icon-background-color is-style-default" style="margin-top:var(--wp--preset--spacing--30);margin-right:var(--wp--preset--spacing--40);margin-bottom:var(--wp--preset--spacing--30);margin-left:var(--wp--preset--spacing--40)"><!-- wp:social-link {"url":"www.instagram.com","service":"instagram"} /-->

<!-- wp:social-link {"url":"www.pintrest.com","service":"pinterest"} /-->

<!-- wp:social-link {"url":"www.twitter.com","service":"twitter"} /-->

<!-- wp:social-link {"url":"www.facebook.com","service":"facebook"} /--></ul>
<!-- /wp:social-links --></div>
<!-- /wp:column -->

<!-- wp:column {"className":"team-member","style":{"spacing":{"blockGap":"var:preset|spacing|20"}}} -->
<div class="wp-block-column team-member"><!-- wp:columns {"className":"star-rating-group"} -->
<div class="wp-block-columns star-rating-group"><!-- wp:column {"width":"100%"} -->
<div class="wp-block-column" style="flex-basis:100%"><!-- wp:image {"id":41,"width":"106px","height":"auto","sizeSlug":"full","linkDestination":"none","align":"left"} -->
<figure class="wp-block-image alignleft size-full is-resized"><img src="'.esc_url(get_template_directory_uri()) .'/assets/images/review.png" alt="" class="wp-image-41" style="width:106px;height:auto"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:columns {"className":"team-member-content","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|40"},"padding":{"right":"var:preset|spacing|40"},"margin":{"top":"0","bottom":"0"}}}} -->
<div class="wp-block-columns team-member-content" style="margin-top:0;margin-bottom:0;padding-right:var(--wp--preset--spacing--40)"><!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}}} -->
<div class="wp-block-column"><!-- wp:image {"id":105,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="'.esc_url(get_template_directory_uri()) .'/assets/images/team02.png" alt="" class="wp-image-105"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"className":"team-col02","style":{"spacing":{"padding":{"top":"0","bottom":"0"},"blockGap":"0"}}} -->
<div class="wp-block-column team-col02" style="padding-top:0;padding-bottom:0"><!-- wp:heading {"textAlign":"left","level":4,"style":{"typography":{"fontStyle":"normal","fontWeight":"800","lineHeight":"1.5","fontSize":"20px"},"spacing":{"margin":{"top":"var:preset|spacing|20"}}},"fontFamily":"figtree"} -->
<h4 class="wp-block-heading has-text-align-left has-figtree-font-family" style="margin-top:var(--wp--preset--spacing--20);font-size:20px;font-style:normal;font-weight:800;line-height:1.5">'. esc_html('Kelvin Doe','radiant-portfolio') .'</h4>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"left","style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}}},"fontSize":"small","fontFamily":"raleway"} -->
<p class="has-text-align-left has-raleway-font-family has-small-font-size" style="padding-top:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20)">'. esc_html('Founder','radiant-portfolio') .'</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"left","className":"team-text","style":{"typography":{"lineHeight":1.6}},"fontSize":"tiny","fontFamily":"raleway"} -->
<p class="has-text-align-left team-text has-raleway-font-family has-tiny-font-size" style="line-height:1.6">'. esc_html('Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.','radiant-portfolio') .'</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:social-links {"customIconBackgroundColor":"#2d2d33","iconBackgroundColorValue":"#2d2d33","openInNewTab":true,"size":"has-normal-icon-size","className":"is-style-default","style":{"spacing":{"margin":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"blockGap":{"top":"var:preset|spacing|30","left":"var:preset|spacing|20"}}},"layout":{"type":"flex","justifyContent":"left"}} -->
<ul class="wp-block-social-links has-normal-icon-size has-icon-background-color is-style-default" style="margin-top:var(--wp--preset--spacing--30);margin-right:var(--wp--preset--spacing--40);margin-bottom:var(--wp--preset--spacing--30);margin-left:var(--wp--preset--spacing--40)"><!-- wp:social-link {"url":"www.instagram.com","service":"instagram"} /-->

<!-- wp:social-link {"url":"www.pintrest.com","service":"pinterest"} /-->

<!-- wp:social-link {"url":"www.twitter.com","service":"twitter"} /-->

<!-- wp:social-link {"url":"www.facebook.com","service":"facebook"} /--></ul>
<!-- /wp:social-links --></div>
<!-- /wp:column -->

<!-- wp:column {"className":"team-member","style":{"spacing":{"blockGap":"var:preset|spacing|20"}}} -->
<div class="wp-block-column team-member"><!-- wp:columns {"className":"star-rating-group"} -->
<div class="wp-block-columns star-rating-group"><!-- wp:column {"width":"100%"} -->
<div class="wp-block-column" style="flex-basis:100%"><!-- wp:image {"id":41,"width":"106px","height":"auto","sizeSlug":"full","linkDestination":"none","align":"left"} -->
<figure class="wp-block-image alignleft size-full is-resized"><img src="'.esc_url(get_template_directory_uri()) .'/assets/images/review.png" alt="" class="wp-image-41" style="width:106px;height:auto"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:columns {"className":"team-member-content","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|40"},"padding":{"right":"var:preset|spacing|40"},"margin":{"top":"0","bottom":"0"}}}} -->
<div class="wp-block-columns team-member-content" style="margin-top:0;margin-bottom:0;padding-right:var(--wp--preset--spacing--40)"><!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}}} -->
<div class="wp-block-column"><!-- wp:image {"id":106,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="'.esc_url(get_template_directory_uri()) .'/assets/images/team03.png" alt="" class="wp-image-106"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"className":"team-col02","style":{"spacing":{"padding":{"top":"0","bottom":"0"},"blockGap":"0"}}} -->
<div class="wp-block-column team-col02" style="padding-top:0;padding-bottom:0"><!-- wp:heading {"textAlign":"left","level":4,"style":{"typography":{"fontStyle":"normal","fontWeight":"800","lineHeight":"1.5","fontSize":"20px"},"spacing":{"margin":{"top":"var:preset|spacing|20"}}},"fontFamily":"figtree"} -->
<h4 class="wp-block-heading has-text-align-left has-figtree-font-family" style="margin-top:var(--wp--preset--spacing--20);font-size:20px;font-style:normal;font-weight:800;line-height:1.5">'. esc_html('Jhoni verma','radiant-portfolio') .'</h4>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"left","style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}}},"fontSize":"small","fontFamily":"raleway"} -->
<p class="has-text-align-left has-raleway-font-family has-small-font-size" style="padding-top:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20)">Founder</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"left","className":"team-text","style":{"typography":{"lineHeight":1.6}},"fontSize":"tiny","fontFamily":"raleway"} -->
<p class="has-text-align-left team-text has-raleway-font-family has-tiny-font-size" style="line-height:1.6">'. esc_html('Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.','radiant-portfolio') .'</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:social-links {"customIconBackgroundColor":"#2d2d33","iconBackgroundColorValue":"#2d2d33","openInNewTab":true,"size":"has-normal-icon-size","className":"is-style-default","style":{"spacing":{"margin":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"blockGap":{"top":"var:preset|spacing|30","left":"var:preset|spacing|20"}}},"layout":{"type":"flex","justifyContent":"left"}} -->
<ul class="wp-block-social-links has-normal-icon-size has-icon-background-color is-style-default" style="margin-top:var(--wp--preset--spacing--30);margin-right:var(--wp--preset--spacing--40);margin-bottom:var(--wp--preset--spacing--30);margin-left:var(--wp--preset--spacing--40)"><!-- wp:social-link {"url":"www.instagram.com","service":"instagram"} /-->

<!-- wp:social-link {"url":"www.pintrest.com","service":"pinterest"} /-->

<!-- wp:social-link {"url":"www.twitter.com","service":"twitter"} /-->

<!-- wp:social-link {"url":"www.facebook.com","service":"facebook"} /--></ul>
<!-- /wp:social-links --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"50px"} -->
<div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->',
    );