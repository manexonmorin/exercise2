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

		<section class="ctrl-carrousel">
			<input class="rad-carrousel" type="radio" name="rad-carrousel">
			<input class="rad-carrousel" type="radio" name="rad-carrousel">
			<input class="rad-carrousel" type="radio" name="rad-carrousel">
		</section>
		<!-- <button id="un">1</button>
		<button id="deux">2</button>
		<button id="trois">3</button> -->

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
				<section class= "<?php echo($tPropriété['typeCours'] == "Web" ? 'class="carrousel-2"':''); ?>">
				<?php endif?>

				<?php if ($tPropriété['typeCours']== "Web") : 
					get_template_part( 'template-parts/content', 'cours-carrousel' );
					else:
					get_template_part( 'template-parts/content', 'cours-article' );
					endif;
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
