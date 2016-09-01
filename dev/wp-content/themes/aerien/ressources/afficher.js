 $( document ).ready(function() {
 	//cache le menu même si on
	   	    
	//Affiche - cache les projets
	$(".mainProjet__title").click(function() {
		
	   	if ( $("#menuProjets").css('display','block')) {
	      $("#menuProjets").css('display', 'none');
	      
	    } 
	});	
	/*if ( active = true) {
	      $(".projets__nav").css('display', 'none');
	    }*/
	// faire réapparaitre le menu
	$(".closeProjets").click(function() {

	   	if ( $("#menuProjets").css('display','none')) {
	      	$("#menuProjets").css('display', 'block');
	      	$(".projets__nav").css('animation', 'none');

	    }	    
	});	
	
});/*/*
 .mainProjet__title lien menu
 "#menuProjets" div nav ul menu
 ".projets__nav" ul du menu
$(document).ready(function() {
    $(".p-sousMenu__link").click(function(event) {
        event.preventDefault();
        $(this).parent().addClass("current");
        $(this).parent().siblings().removeClass("current");
        var aff = $(this).attr("href");
        $(".mainProjet").not(aff).css("display", "none");
        $(tab).fadeIn();
    });
});
 */
