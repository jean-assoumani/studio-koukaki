<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Fleurs_d\'oranger_&_Chats_errants
 */

?>

<!-- Ajout de la section Oscars Nomination -->
<section id="nomination" class="nomination fade-in-section">
    <div class="nomination__title">
        <img src="<?php echo get_theme_file_uri() . '/assets/images/oscars-bg-title.png'; ?>"
            alt="fond du titre des nominations">
        <h3>Fleurs d’oranger & chats errants est nominé aux Oscars Short Film Animated de 2022 !</h3>
    </div>
    <img class="nomination__logo" src="<?php echo get_theme_file_uri() . '/assets/images/oscars.png'; ?>"
        alt="Nomination aux Oscars">
</section>

<footer id="colophon" class="site-footer fade-in-section">
    <ul>
        <li><a href="#">Mentions Légales</a></li>
        <li><a href="#">STUDIO KOUKAKI</a></li>
        <li><a href="#">Contact</a></li>
    </ul>
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>