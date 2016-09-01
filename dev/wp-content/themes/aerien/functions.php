<?php 

add_theme_support( 'post-thumbnails' );
//add Mes projets

register_post_type( //Crée onglet Projets dans admin
	'projets',
	[
		'label' => __('Projets', 'b'),
		'labels' => [
			'singular_name' => __('Projet', 'b'),
			'add_new' => __('Ajouter un nouveau projet', 'b')
		],
		'description' => __('descriptif et info de projet', 'b'),
		'public' => true,
		'menu_position' => 7,
		'menu_icon' => 'dashicons-welcome-add-page',
		'supports' => [ 'title', 'editor', 'thumbnail' ],
		'has_archive' => true
	]
	// ca permetra de créer/éditer un Événementvec les champs que l'on veut avec un nom qu'on veut
	// il faut aussi faire des trucs avec ACF
);




// Generates a custom exerpt used on the homepage
function get_the_custom_excerpt( $lenght  = 150 ){
    $excerpt = get_the_content();
    $excerpt = strip_shortcodes( $excerpt );
    $excerpt = strip_tags( $excerpt );
    return substr($excerpt, 0, $lenght);
};

function the_custom_excerpt( $lenght = 150 ){
    echo get_the_custom_excerpt( $lenght );
};

// Generates a link containing the post_title
function get_the_link_content( $string, $replacement = '%s' ){
	// la class sro (Screen Reader Only) sera utilisée en CSS pour cacher le span, tout en gardant le nom de l'article dans le texte du lien
	return str_replace( 'replacement', '<span class="sro">' . get_the_title() . '</span>', __( $string, 'b' ) );
};

function the_link_content( $string, $replacement = '%s' ){
	echo get_the_link_content( $string, $replacement );
};/*

function theme_js(){
 
	wp_enqueue_script( 'afficher',
	get_template_directory_uri() . '/ressources/afficher.js',
	array() );
} add_action( ' ', 'theme_js' );
*/

/*
//FOnction pour créer le menu
register_nav_menu( 'main-nav', __( 'Menu principale, affiché dans le header.', 'b' )); 

//Récupere l'ID
function b_get_menu_id( $location ){
	$locations = get_nav_menu_locations();

	if (isset($locations[$location])) {
		return $locations[$location];
	}
	return false;
}

//Génération du menu client, doit retourner un tableau
function b_get_menu_items( $location ) //defini la var
{

	$navItems = []; //On veut récupérer tous les liens de navigation à qui on passe l'id
	foreach (wp_get_nav_menu_items( b_get_menu_id($location) ) as $obj) {
	  	$item = new  stdClass(); //Crée des class vides (objzt)
	  	$item->url = $obj->url ;// url et label création
	  	$item->label= $obj->title; //Pour lier le titre 
	  	$item->icon= $obj->classes[0]; //Pour ajouter les icones avec des classes css
	  	array_push($navItems, $item);
	  }  
	return $navItems; //retourne la liste des liens
}*/
/*
//Génération du menu de sélection
function b_get_languages(){ 

	$langItems = [];
	$rawItems = pll_the_languages([ 'echo'=>false,
						'hide_if_empty'=>false,
						'hide_if_no_translation'=>false,
						'raw'=>true //Mets le menu en array, plus en html
					]);

	foreach ($rawItems as $arr) { // Ne fait que renvoier
		$item = new stdClass();
		$item->label = $arr['name'];
		$item->url = $arr['url'];
		$item->code = $arr['slug'];
		array_push($langItems, $item);
	}
	return $langItems;
	//Ne pas oublier d'activer les menus dans les autres langues dans l'admin
}*/


//   Ajoute la barre de recherche
/*
function add_search_box($items, $args) {

        ob_start();
        get_search_form();
        $searchform = ob_get_contents();
        ob_end_clean();

        $items .= '<li>' . $searchform . '</li>'; 
        return $items;
}
add_filter('wp_nav_menu_items','add_search_box', 10, 2);
*/