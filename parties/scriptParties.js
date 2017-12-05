$(document).ready(function() {


/********************************************************   
----- - MENU PLIE/DEPLIE -   ---- 
******************************************************/
 $(function(){
        $('#rpP').on('click touch', function(e){
            $('.menuChapitres').slideToggle();
            // $('.btnRepli p').replaceWith('<p>Montrer le menu</p>');
            e.preventDefault();

            if ($('.containerButonBottom p').html() == 'Replier le menu'){
       			 $('.containerButonBottom p').replaceWith('<p>Montrer le menu</p>');
    		}
    		else{
    			$('.containerButonBottom p').replaceWith('<p>Replier le menu</p>');
    		}

          });

        });

});

/********************************************************   
----- -    LECTEUR MUSIQUE     - ---- 
******************************************************/

      function play(idPlayer, control) {
          var player = document.querySelector('#' + idPlayer);
          var image = document.getElementById ("controlSon");
  
          if (player.paused) {
              player.play();
              image.src = '../img/iconSonActive.png';
          } else {
              player.pause(); 
              image.src = '../img/iconSonInactive.png';
          }
      };

      function resume(idPlayer) {
          var player = document.querySelector('#' + idPlayer);
  
          player.currentTime = 0;
          player.pause();
      };

