<?php
/**
 * Lista de Programas de Formación
 */
return array(
	'title'      => __( 'Programas de Formación', 'skt-fse' ),
	'categories' => array( 'skt-fse' ),
	'blockTypes' => array( 'core/template-part/skt-fse' ),
	'content'    => '<!-- wp:group {"tagName":"main"} -->

    <main class="wp-block-group">
    
    <!-- wp:group {"style":{"spacing":{"padding":{"top":"80px","bottom":"80px","left":"15px","right":"15px"}}},"backgroundColor":"background","className":"skt-fse-blog-single-area","layout":{"type":"constrained","contentSize":"1200px"}} -->

    <div class="wp-block-group skt-fse-blog-single-area has-background-background-color has-background" style="padding-top:80px;padding-right:15px;padding-bottom:80px;padding-left:15px">
    
    <!-- wp:query {"queryId":32,"query":{"perPage":6,"pages":0,"offset":0,"postType":"programas","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"parents":[]},"displayLayout":{"type":"flex","columns":3},"layout":{"type":"constrained","contentSize":""}} -->

    <div class="wp-block-query"><!-- wp:post-template {"backgroundColor":"background"} -->
    <!-- wp:group {"style":{"spacing":{"padding":{"top":"50px","right":"35px","bottom":"50px","left":"35px"}},"color":{"background":"#eff5fa"},"border":{"radius":"20px"}},"layout":{"type":"constrained"}} -->

    <div class="wp-block-group has-background" style="border-radius:20px;background-color:#eff5fa;padding-top:50px;padding-right:35px;padding-bottom:50px;padding-left:35px">
    
    <!-- wp:post-featured-image {"isLink":true,"width":"200px","height":"200px","dimRatio":10,"align":"center","style":{"color":{"duotone":"unset"},"border":{"radius":"45px","width":"0px","style":"none"},"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}}} /-->
    
    <!-- wp:post-title {"textAlign":"center","level":1,"isLink":true,"style":{"typography":{"fontStyle":"normal","fontWeight":"600","textTransform":"capitalize"},"spacing":{"padding":{"top":"var:preset|spacing|30","right":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|30"},"margin":{"top":"0","right":"0","bottom":"0","left":"0"}}},"fontSize":"large"} /-->
    
    <!-- wp:post-excerpt {"fontSize":"medium"} /-->
    
    <!-- wp:post-date {"textAlign":"center"} /--></div>
    <!-- /wp:group -->
    <!-- /wp:post-template --></div>
    <!-- /wp:query --></div>
    <!-- /wp:group --></main>
    <!-- /wp:group -->',
);