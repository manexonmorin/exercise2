<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package theme-FM
 */

get_header();
?>
	<main id="primary" class="site-main">
	<section class="carrousel">
			<article class="slide__conteneur">
				<div class="slide">
					
					<img width="150" height="84" src="http://localhost/4w4/wp-content/uploads/2021/03/Python-Basics-Chapter-on-Web-Scraping_Watermarked.ad1bb89e800b.jpg" class="attachment-thumbnail size-thumbnail wp-post-image" alt="" loading="lazy">
					<div class="slide__info">
					<p>582-3W3 - Web-90h</p>
					<a href="http://localhost/4w4/582-3w3-creation-de-sites-web-dynamiques-90h/">Création de sites Web dynamiques</a>
					<p>Session : 3</p>
					
					</div>
				</div>
			</article>

			<article class="slide__conteneur">
				<div class="slide">
					
					<img src="" alt="">
					<div class="slide__info">
					<p>582-3W3 - Web-90h</p>
					<a href="http://localhost/4w4/582-3w3-creation-de-sites-web-dynamiques-90h/">Création de sites Web dynamiques</a>
					<p>Session : 3</p>
					
					</div>
				</div>
			</article>
			
			<article class="slide__conteneur">
				<div class="slide">
					
					<img src="" alt="">
					<div class="slide__info">
					<p>582-3W3 - Web-90h</p>
					<a href="http://localhost/4w4/582-3w3-creation-de-sites-web-dynamiques-90h/">Création de sites Web dynamiques</a>
					<p>Session : 3</p>
					
					</div>
				</div>
			</article>
		</section>

		<button id="un">1</button>
		<button id="deux">2</button>
		<button id="trois">3</button>

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<?php
				the_archive_title( '<h1 class="page-title">', '</h1>' );
				the_archive_description( '<div class="archive-description">', '</div>' );
				?>
			</header><!-- .page-header -->
			<section class="cours">
			
			<?php
			/* Start the Loop */
            $precedent = "XXXXXX";
			// global $tPropriété;
			while ( have_posts() ) :
				the_post();
				convertirTableau($tPropriété);

				if ($tPropriété['typeCours'] != $precedent):
					if("XXXXXX" != $precedent): ?>
						</section> 
					<?php endif?>
				<h2><?php  echo $tPropriété['typeCours']; ?></h2>
				<section>
				<?php endif?>
				<?php get_template_part( 'template-parts/content', 'cours-article' );?>
			<?php 
			$precedent = $tPropriété['typeCours'];
			endwhile;?>
			</section> <!--Fin section cours-->
		<?php endif;?>
	</main><!-- #main -->

<?php
get_sidebar();
get_footer();

function convertirTableau(&$tPropriété){

	/*	
	$titre = get_the_title();
	//582-1W1 Mise en page Web (75h)
	$sigle = substr($titre, 0, 7);
	$nbHeure = substr($titre, -4, 3);
	$titrePartiel = substr($titre, 8, -6);
	$session = substr($titre, 4, 1);
	// $contenu = get_the_content();
	// $resume = substr($contenu, 0, 200);
	$typeCours = get_field('type_de_cours');
*/

	$tPropriété['titre'] = get_the_title();
	$tPropriété['sigle'] = substr($tPropriété['titre'], 0, 7);
	$tPropriété['nbHeure'] = substr($tPropriété['titre'], -4, 3);
	$tPropriété['titrePartiel'] = substr($tPropriété['titre'], 8, -6);
	$tPropriété['session'] = substr($tPropriété['titre'], 4, 1);
	$tPropriété['typeCours'] = get_field('type_de_cours');
}
