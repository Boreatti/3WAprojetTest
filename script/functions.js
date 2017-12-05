/*******************************************************************************************/
/********************************** FONCTIONS UTILITAIRES **********************************/
/*******************************************************************************************/
function installEventHandler(selector, event, eventHandler){
	//Recuepratipon du 1er objet DOM correspondant au selecteur
	var domObject = document.querySelector(selector);

	//Installation d'un gestionnaire d'éléments sur cette DOM
	domObject.addEventListener(event, eventHandler); 
}


//Fonction evenement spécifique aux liens, pour prendre en compte TOUS ces liens (sinon avec la fonction du haut, seul le 1er et affecté)
function installEventHandlers(selector, event, eventHandler){
	//Recuepratipon du 1er objet DOM correspondant au selecteur
	var domObject = document.querySelectorAll(selector);

	//Installation d'un gestionnaire de multi-éléments sur cette DOM
	for(index = 0; index < domObject.length; index++){
		domObject[index].addEventListener(event, eventHandler); 
	}
}
 
/*******************************************************************************************/
/*******************************************************************************************/




function showHTML(selector){
	//Supression de la class CSS "hide" de l'objet DOM trouvé avec le selecteur entré en paramètre
	document.querySelector(selector).classList.remove('hide');
}

function hideHTML(selector){
	//Ajout de la class CSS "hide" de l'objet DOM trouvé avec le selecteur entré en paramètre
	document.querySelector(selector).classList.add('hide');
}





	//Permet de replier le menu déroulant
function resetAnimationMenuAll(selector,txt='animation-target1') //valeur par defaut
{ 
	document.querySelector(selector).classList.remove(txt);
}

	//Déclanche les animations des onglets du menu déroulant
function animationMenuAll(selector,txt='animation-target1') //valeur par defaut
{ 
	document.querySelector(selector).classList.add(txt);
}



/********************************************************   
----- - LECTEUR MUSIQUE -   ---- 
******************************************************/
      function play(idPlayer, control) {
          var player = document.querySelector('#' + idPlayer);
          var image = document.getElementById("controlSon");
  
          if (player.paused) {
              player.play();
              image.src = '../templates/img/iconSonActive.png';
          } else {
              player.pause(); 
              image.src = '../templates/img/iconSonInactive.png';
          }
      };

      function resume(idPlayer) {
          var player = document.querySelector('#' + idPlayer);
  
          player.currentTime = 0;
          player.pause();
      };

 