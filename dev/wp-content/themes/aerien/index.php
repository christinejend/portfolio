<?php

/*
    Template Name: Homepage
    http://localhost/portfolio/dev/wp-admin/themes.php
*/

get_header();

?>



<body class="main">
	<div>
		<div class="perso" id="perso">
			<?php
	                /*$posts = new WP_Query( array( 'category_name' => 'nom' ) );
	                if ( $posts -> have_posts() ): while ( $posts ->  have_posts() ): $posts ->  the_post();*/

			// Start the loop. TEST AVEC BERNARD
			/*while ( have_posts() ) : the_post();

	                $test = get_field('about_url');
	            */?>
	            <!--<a href="<?php //echo $test ?>" title="">qsdfqsdfqsdffd</a>
	            
				<h1><?php the_title(); ?></h1>
				<q><?php the_content(); ?></q>
				
			<?php// endwhile; ?>-->
			
			<h1><?php the_title(); ?></h1>
				<q><?php the_field('job');?>
				</q>
			</div>

			<div><?php
				while ( have_posts() ) : the_post();

			$img =  get_field('logo');?>
			<img src="<?php echo $img; ?>" alt="" class="main__img">
				<?php endwhile; ?>
		</div>
		


		
			<!--<?php //echo get_post_meta( $post->ID, 'sigle', true ); ?>
	                $posts = new WP_Query( array( 'category_name' => 'link-propos' ) );
	                if ( $posts -> have_posts() ): while ( $posts ->  have_posts() ): $posts ->  the_post();
	            ?>
			
				<a class="propos__link" href=" <?php //bloginfo('url'); ?>/propos/ ?>" title="lien vers la page cv">
					<h1 class="propos__heading" role="heading" aria-level="1"><?php the_title(); ?> </h2>
					<p class="propos__text"><?php the_content(); ?> </h2>
					</p>
				</a>
				<?php //endwhile; endif; ?>*/-->
				<?php
				while ( have_posts() ) : the_post();

	                $lien1 = get_field('about_url');
	            ?>
	            <a href="<?php echo $lien1 ?>" title="lien vers la page cv" class="propos__link">

	            <div class="propos">
		            <h1 class="propos__heading" role="heading" aria-level="1">À propos</h1>
					
		            <p class="propos__text"><?php echo get_post_meta( $post->ID, 'home_text_about', true ); ?>
		           	</p>
				</a>
				</div>
	       	<?php endwhile; ?>
		</div>


		<div class="projets" >

            <?php
				while ( have_posts() ) : the_post();

	                $lien2 = get_field('project_url');

	            ?>		
			<a href="<?php echo $lien2; ?>" title="lien vers les projets" class="projets__link">
				<h1 class='projets__heading' role="heading" aria-level="1"><?php the_field('home_text_project');?></h1>
			</a>
			<?php endwhile; ?>
		</div>
		
		
	</div> <!-- MAIN 
	<script src="index.js"></script>-->

<?php

wp_footer();
