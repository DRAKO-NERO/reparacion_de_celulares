<?php
/**
 * Header Default
 * 
 * slug: radiant-portfolio/header-default
 * title: Header Default
 * categories: radiant-portfolio
 */

return array(
    'title'      =>__( 'Header Default', 'radiant-portfolio' ),
    'categories' => array( 'radiant-portfolio' ),
    'content'    => '<!-- wp:group {"className":"header-box-upper","style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"0","right":"0"}}},"backgroundColor":"secaccent","layout":{"type":"constrained","contentSize":"80%"}} -->
<div class="wp-block-group header-box-upper has-secaccent-background-color has-background" style="padding-top:var(--wp--preset--spacing--20);padding-right:0;padding-bottom:var(--wp--preset--spacing--20);padding-left:0"><!-- wp:columns {"className":"menu-group","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"},"blockGap":{"left":"var:preset|spacing|20"}},"border":{"radius":{"bottomLeft":"10px","bottomRight":"10px","topLeft":"10px","topRight":"10px"}}}} -->
    <div class="wp-block-columns menu-group" style="border-top-left-radius:10px;border-top-right-radius:10px;border-bottom-left-radius:10px;border-bottom-right-radius:10px;margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:column {"verticalAlignment":"center","width":"20%","className":"header-logo","style":{"spacing":{"padding":{"left":"var:preset|spacing|40","right":"var:preset|spacing|40","top":"0px","bottom":"0px"},"blockGap":"0"},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary"} -->
    <div class="wp-block-column is-vertically-aligned-center header-logo has-primary-color has-text-color has-link-color" style="padding-top:0px;padding-right:var(--wp--preset--spacing--40);padding-bottom:0px;padding-left:var(--wp--preset--spacing--40);flex-basis:20%"><!-- wp:site-title {"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary","fontFamily":"pt-serif"} /--></div>
    <!-- /wp:column -->
    
    <!-- wp:column {"verticalAlignment":"center","width":"60%","className":"header-inner-menu"} -->
    <div class="wp-block-column is-vertically-aligned-center header-inner-menu" style="flex-basis:60%"><!-- wp:navigation {"textColor":"primary","metadata":{"ignoredHookedBlocks":["woocommerce/customer-account","woocommerce/mini-cart"]},"className":"is-head-menu","style":{"typography":{"textTransform":"capitalize"}},"fontSize":"medium","fontFamily":"figtree","layout":{"type":"flex","justifyContent":"center"}} --><!-- wp:navigation-link {"label":"Home","type":"","url":"#","kind":"custom","isTopLevelLink":true} /-->
                
        <!-- wp:navigation-link {"label":"Project","type":"","url":"#","kind":"custom","isTopLevelLink":true} /-->
        
        <!-- wp:navigation-link {"label":"Pages","type":"","url":"#","kind":"custom","isTopLevelLink":true} /-->
        
        <!-- wp:navigation-link {"label":"Blog","type":"","url":"#","kind":"custom","isTopLevelLink":true} /-->
        
        <!-- wp:navigation-link {"label":"Contact Us","type":"","url":"#","kind":"custom","isTopLevelLink":true} /-->

        <!-- wp:navigation-link {"label":"Get Pro","type":"","url":"https://www.wpradiant.net/products/portfolio-wordpress-theme","kind":"custom","isTopLevelLink":true,"className":"getpro"} /-->

        <!-- /wp:navigation --></div>
    <!-- /wp:column -->
    
    <!-- wp:column {"verticalAlignment":"center","width":"20%","className":"search-column","style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"0","right":"var:preset|spacing|40"}}},"layout":{"type":"default"}} -->
    <div class="wp-block-column is-vertically-aligned-center search-column" style="padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--20);padding-left:0;flex-basis:20%"><!-- wp:buttons {"className":"header-button","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"blockGap":"0"}},"layout":{"type":"flex","justifyContent":"right"}} -->
    <div class="wp-block-buttons header-button" style="margin-top:0;margin-bottom:0"><!-- wp:button {"textAlign":"right","backgroundColor":"primary","textColor":"background","style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}},"spacing":{"padding":{"left":"var:preset|spacing|50","right":"var:preset|spacing|50","top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}},"typography":{"fontStyle":"normal","fontWeight":"600"},"border":{"radius":"8px"}},"fontSize":"small","fontFamily":"figtree"} -->
    <div class="wp-block-button has-custom-font-size has-figtree-font-family has-small-font-size" style="font-style:normal;font-weight:600"><a class="wp-block-button__link has-background-color has-primary-background-color has-text-color has-background has-link-color has-text-align-right wp-element-button" style="border-radius:8px;padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--50)">'. esc_html('Hire Me','radiant-portfolio') .'</a></div>
    <!-- /wp:button --></div>
    <!-- /wp:buttons --></div>
    <!-- /wp:column --></div>
    <!-- /wp:columns --></div>
    <!-- /wp:group -->',
);