<?php
/**
 * The main template file
 *
 * @package Shepmates
 */

get_header();
?>

<main>
    <?php get_template_part('services'); ?>
    <?php get_template_part('contact'); ?>
</main>

<?php
get_footer();