<?php

/**
 * Template Name: Contact Us Template
 **/
wp_enqueue_style('contact-us', get_stylesheet_directory_uri().'/assets/css/contact-us.css');

get_header(); ?>

<div id="primary" class="innerpage contact-us site-content">
		<header class="innerpage-header">
            <div class="container">
                <div class="row justify-content-center align-items-center">
                    <div class="col-lg-">
                        <h1 class="innerpage-title"><?php the_title(); ?></h1>
                    </div>
                </div>
            </div>
		</header>
        <div class="main_content">
            <div class="container">
                <div class="row justify-content-center" role="main">
                    <div class="col-md-">
                    <?php 
                        while (have_posts()){ 
                            the_post(); 
                            get_template_part( 'content', 'page' ); 
                        } 
                    ?>
                    </div>
                </div>
            </div>
        </div>
	</div>

<?php get_footer(); ?>