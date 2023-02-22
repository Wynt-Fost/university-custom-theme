<!-- this file is for posts -->

<?php
// function for header
get_header( );


// the loop to cycle and display posts
while (have_posts()) {
    the_post(); ?>
    <h2><?php the_title( );  ?></h2>
    <?php the_content(); ?>
<?php
}

get_footer();

?>
