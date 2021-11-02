<?php
/**
 * The template for displaying Search Pages
 * 
 */
$post_placeholder = get_template_directory_uri().'/assets/images/post-placeholder.png';
$post_default_thumb = get_option( 'post-placeholder' );
if ($post_default_thumb) : $post_placeholder = $post_default_thumb; endif;

get_header(); ?>
    <div id="primary" class="innerpage search-results site-content">
		<header class="innerpage-header">
            <div class="container">
                <div class="row justify-content-center align-items-center">
                    <div class="col-lg-">
                        <h1 class="innerpage-title"><?php printf( __( 'Search Results for: %s', 'rocket' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
                    </div>
                </div>
            </div>
		</header>
        <div class="main_content">
            <div class="container">
                <div class="row" role="main">
                    <?php 						
						if (have_posts()){
							while(have_posts()){ 
                                the_post(); ?> 
                                <div class="col-lg- index-lists mb-3">
                                    <div class="search-result-item">
                                        <div class="page-thumbnail">
                                            <?php if(has_post_thumbnail()){?>
                                                <?php echo '<img title="'.get_the_title().'" alt="'.get_the_title().'" class="img-fluid wp-post-image" src="'.wp_get_attachment_url( get_post_thumbnail_id() ).'" width="100%" height="auto" />';?>
                                            <?php }else{
                                                echo '<img class="img-fluid" src="'.$post_placeholder.'" draggable="false" alt="No Image" title="No Image" />';
                                            } ?>
                                        </div>
                                        <div class="page-content-info">
                                            <h2><a href="<?php echo get_the_permalink(); ?>"><?php echo get_the_title(); ?></a></h2>
                                            <div class="archieve-action">
                                                <a class="btn btn__search" href="<?php echo get_the_permalink(); ?>"><span class="glyphicon glyphicon-search"></span> Read more</a>
                                            </div>
                                        </div>
                                    </div>
                                </div> <?
                            } 
                            wp_reset_query();
                            echo '<div class="pagination">'.rocketPage().'</div>';
						?>
						<?php }else{ // end of the condition. ?>
							<h3>No posts to show.</h3>
						<?php } // end of the else. ?>
                </div>
            </div>
        </div>
	</div>
<?php get_footer(); ?> 