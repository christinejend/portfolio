<?php

/*
    Template Name: Projects
    http://localhost/portfolio/dev/wp-admin/themes.php
*/

get_header();

?>

<body class="mainProjets">
	<div class="mainProjet__intro">
		<span class="ariane">
			<?php
				while ( have_posts() ) : the_post();

	                $lien = get_field('accueil_url');
	            ?>
			<a href="<?php echo $lien ?>" title="" class="ariane__link" >Accueil</a>
			<a href="#" title="" class="ariane__link ariane__link2">  <?php the_title(); ?></a>
			<?php endwhile; ?>
		</span>
		<a href="index.php" title="Retour vers l'accueil">
		<div class="mainProjet__moi" id="perso">
			<h1 role="heading" aria-level="1">Christine Jendrzejczyk</h1>
			<q><?php the_field('job'); ?>
				</q>
		</div>	
		<?php
				while ( have_posts() ) : the_post(); 

		$img =  get_field('logo'); ?>
		<img src="<?php echo $img; ?>" alt="" class="mainProjet__logo">
		<?php endwhile; ?>
		</a>			
	</div>

		<?php
				while ( have_posts() ) : the_post();

	                $lien1 = get_field('propos_url');
	            ?>

		<a href="<?php echo $lien1 ?>" alt="Lien vers la page à propos" class="proposlink linkpages">En savoir plus sur Christine Jend.</a>
		<?php endwhile; ?>
		<div class="mainProjets__projets" id="menuProjets">
			<nav class="projets__nav"> <!-- Provisoire -->
				<?php the_field('list1'); ?>
				<?php the_field('list2'); ?>
				<?php the_field('list3'); ?>
			</nav>
		</div>
	        

			</nav>
	    </div>
	   <div>

		<?php
                  $posts = new WP_Query( ['post_type' => 'projets'] );
                  if ( $posts->have_posts() ):
                   while ( $posts->have_posts() ):
                    $posts->the_post();
            ?>
            	<article class="mainProjet" id="<?php the_field('id'); ?>">
             
		
				<a href="http://localhost/portfolio/dev/index.php/projects" class="closeProjets">fermer</a>
				<h2 role="heading" aria-level="1" class="mainProjet__title"> <?php the_field('project_name');?>
				</h2>
					<?php the_field('project_text');?>
				<p class="mainProjet__cours">
					<?php the_field('course');?>
				</p>
					<a href="http://hepl01.cblue.be/~user20/dw/cv/" title="lien vers le projet cv" class="mainProjet__link">
					Aller le voir
				</a>

	               <?php  $img1 =  get_field('project_img'); ?>
		<img src="<?php echo $img1; ?>" alt="photo du projet <?php the_field('project_name');?> " class="mainProjet__img">
				
			</article>
			<?php endwhile; endif; ?>
		</div>
	</div>
</body>

<?php

