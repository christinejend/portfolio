<?php

/*
    Template Name: Propos
    http://localhost/portfolio/dev/wp-admin/themes.php
*/

get_header();

?>
<body class="mainPropos">
	<span class="ariane">
			<?php
				while ( have_posts() ) : the_post();

	                $lien = get_field('lien_home');
	            ?>
			<a href="<?php echo $lien ?>" title="" class="ariane__link">Accueil</a>
			<a href="#" title="" class="ariane__link ariane__link2"><?php the_title(); ?></a>
			<?php endwhile; ?>
		</span>
	<h1 role="heading" aria-level="2" class="infos__heading"><?php the_field('title'); ?></h1>
			<?php
				while ( have_posts() ) : the_post();

	                $lien1 = get_field('lien_projets');
	            ?>

		<a href="<?php echo $lien1 ?>" alt="Lien vers la page projets" class="projets__link linkpages">Voir les projets</a>
		<?php endwhile; ?>
	<span class="photo">
	<?php
				while ( have_posts() ) : the_post();

			$img =  get_field('photo');?>
			<img src="<?php echo $img; ?>" alt="" title="" class="photo__img">
			<?php endwhile; ?>
	</span>
	<div class="infos bloc">
		<?php the_field('about_me'); ?>
	</div>
				
	
	<div class="form" id="joindre">
			<h2 class="hidden" aria-level="2" class="" role="heading"> Formulaire</h2>
			<a href="#" class="closeMail">fermer</a>
			<?php the_field('form'); ?>

	</div>
	<div class="contact bloc">
		<?php the_field('contact'); ?>
	</div>
	<div class="infos__list"">
			<?php the_field('competences'); ?>
	</div>
	



</body>
<?php wp_footer();