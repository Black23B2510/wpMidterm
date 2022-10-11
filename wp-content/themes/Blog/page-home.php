<?php
/*
	Template Name: Home Page
*/

get_header(); ?>
<style>
<?php include 'style.css';
?>
</style>
<main>
    <div class="content">
        <div class="top_content">
            <div class="top_content_left">
                <?php get_template_part('teamplate-content/home', 'show_random_post'); ?>
                <?php get_template_part('teamplate-content/home', 'random_title'); ?>
            </div>
            <div class="top_content_center">
                <?php get_template_part('teamplate-content/home', 'show-standing'); ?>
            </div>
            <div class="top_content_right">
                <?php get_template_part('teamplate-content/home', 'extractNews'); ?>
            </div>
        </div>
    </div>
    <div class="bottom_content">
        <?php get_template_part('teamplate-content/home', 'show-row'); ?>
    </div>
</main>
<?php get_footer(); ?>