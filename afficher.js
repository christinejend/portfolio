

document.getElementById('afficher').style.visibility = 'hidden';
document.getElementById('afficher1').style.visibility = 'hidden';
document.getElementById('afficher2').style.visibility = 'hidden';
document.getElementById('afficher3').style.visibility = 'hidden';
document.getElementById('afficher4').style.visibility = 'hidden';
document.getElementById('afficher5').style.visibility = 'hidden';
document.getElementById('afficher6').style.visibility = 'hidden';
	
var bloc = document.getElementById('afficher'); 
	bloc1 =  document.getElementById('afficher1'),
	bloc2 = document.getElementById('afficher2'),
	bloc3 =  document.getElementById('afficher3'),
	bloc4 = document.getElementById('afficher4'),
	bloc5 = document.getElementById('afficher5'),
	bloc6 = document.getElementById('afficher6'),

	link = document.getElementById('afficher-link');
	link1 = document.getElementById('afficher-link1'),
	link2 = document.getElementById('afficher-link2'),
	link3 = document.getElementById('afficher-link3'),
	link4 = document.getElementById('afficher-link4'),
	link5 = document.getElementById('afficher-link5'),
	link6 = document.getElementById('afficher-link6');



link.addEventListener('click', aff ); //Juste nommer la fonction, pas d'appel ici, on la renseigne

	function aff( oEvent ){
		if(bloc.style.visibility === 'visible'){
			bloc.style.visibility ='hidden';
		}else if(bloc.style.visibility === 'hidden'){
			bloc.style.visibility ='visible';
		}
	};

link1.addEventListener('click', aff1 ); //Juste nommer la fonction, pas d'appel ici, on la renseigne

	function aff1( oEvent ){
		if(bloc1.style.visibility === 'visible'){
			bloc1.style.visibility ='hidden';
		}else if(bloc1.style.visibility === 'hidden'){
			bloc1.style.visibility ='visible';
		}
	};

link2.addEventListener('click', aff2 ); //Juste nommer la fonction, pas d'appel ici, on la renseigne

	function aff2( oEvent ){
		if(bloc2.style.visibility === 'visible'){
			bloc2.style.visibility ='hidden';
		}else if(bloc2.style.visibility === 'hidden'){
			bloc2.style.visibility ='visible';
		}
	};
link3.addEventListener('click', aff3 ); //Juste nommer la fonction, pas d'appel ici, on la renseigne

	function aff3( oEvent ){
		if(bloc3.style.visibility === 'visible'){
			bloc3.style.visibility ='hidden';
		}else if(bloc3.style.visibility === 'hidden'){
			bloc3.style.visibility ='visible';
		}
	};
link4.addEventListener('click', aff4 ); //Juste nommer la fonction, pas d'appel ici, on la renseigne

	function aff4( oEvent ){
		if(bloc4.style.visibility === 'visible'){
			bloc4.style.visibility ='hidden';
		}else if(bloc4.style.visibility === 'hidden'){
			bloc4.style.visibility ='visible';
		}
	};
link5.addEventListener('click', aff5 ); //Juste nommer la fonction, pas d'appel ici, on la renseigne

	function aff5( oEvent ){
		if(bloc5.style.visibility === 'visible'){
			bloc5.style.visibility ='hidden';
		}else if(bloc5.style.visibility === 'hidden'){
			bloc5.style.visibility ='visible';
		}
	};
link6.addEventListener('click', aff6 ); //Juste nommer la fonction, pas d'appel ici, on la renseigne

	function aff6( oEvent ){
		if(bloc6.style.visibility === 'visible'){
			bloc6.style.visibility ='hidden';
		}else if(bloc6.style.visibility === 'hidden'){
			bloc6.style.visibility ='visible';
		}
	};


if(style.visibility ==='visible'){
	style.visibility ==='hidden';
}
















	/*
	//Switch*//*
	var toto = 0;
switch (toto) {
    case 0:
        link.addEventListener('click', aff ); //Juste nommer la fonction, pas d'appel ici, on la renseigne

	function aff( oEvent ){
		if(bloc.style.visibility === 'visible'){
			bloc.style.visibility ='hidden';
		}else if(bloc.style.visibility === 'hidden'){
			bloc.style.visibility ='visible';
		}
	}
        break;
    case 0: // toto vaut 0 donc ce cas correspond
        console.log(0);
        // NOTE : le break aurait du être placé ici
    case 1: // pas de break pour 'case 0:' les instructions de ce cas sont
            // exécutées aussi
        console.log(1);
        break; // on a un break a ce niveau donc les instructions 
               // des cas suivants ne seront pas exécutées
    case 2:
        console.log(2);
        break;
    default:
        console.log('default');
}
*/