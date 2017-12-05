/********************************************************   
----- - PRELOAD -   ---- 
******************************************************/
   jQuery(document).ready(function($)
    {
var p = 0;
$.arrPreload = [];
$.arrPreload[p++] = "img/BGanime.gif";
$.arrPreload[p++] = "img/UIg.png";
$.arrPreload[p++] = "img/onglet1T.png";  
$.arrPreload[p++] = "img/onglet3T.png";
$.arrPreload[p++] = "img/onglet4T.png";
$.arrPreload[p++] = "img/onglet1Hover.png";
$.arrPreload[p++] = "img/onglet3Hover.png";
$.arrPreload[p++] = "img/onglet4Hover.png";
$.arrPreload[p++] = "img/globeMenu2.png"; 
$.arrPreload[p++] = "img/globeMenu1.png";
$.arrPreload[p++] = "img/faillesAnim.gif";
$.arrPreload[p++] = "img/failles.png";
$.arrPreload[p++] = "img/forteresseAnim.gif";  
$.arrPreload[p++] = "img/forteresse1.png";
$.arrPreload[p++] = "img/cristaux2.png";
$.arrPreload[p++] = "img/cristaux1.png";
$.arrPreload[p++] = "img/portailAnim.gif"; 
$.arrPreload[p++] = "img/portail2.png";
$.arrPreload[p++] = "img/alguesAnim2.gif"; 
$.arrPreload[p++] = "img/algues.png";
$.arrPreload[p++] = "img/uiD2.png";
$.arrPreload[p++] = "img/btnVue1lux.png"; 
$.arrPreload[p++] = "img/btnVue1.png";
$.arrPreload[p++] = "img/btnVue2lux.png";  
$.arrPreload[p++] = "img/btnVue2.png"

$(document.createElement('img')).bind('load', function () {
  if ($.arrPreload.length > 0)
    this.src = $.arrPreload.shift()
  else
    preloadDone();
}).trigger('load');

function preloadDone(){
  setTimeout(function () {
    $("#oLoading").html("").fadeOut();
  }, 300);
};








/********************************************************   
----- - CLICK ON ELEMENT (zoom + lien) -   ---- 
******************************************************/


        // Set initial zoom level
        var zoom_level=100;
       // Click events
        $('#partie1').click(function() { 
          zoomPartie1(150, $(this)); 
        }); 
        $('#partie2').click(function() { 
          zoomPartie2(200, $(this)) 
        }); 
        $('#partie3').click(function() { 
          zoomPartie3(100, $(this)) 
        }); 
        $('#partie4').click(function() { 
          zoomPartie4(200, $(this)) 
        }); 
        $('#partie5').click(function() { 
          zoomPartie5(100, $(this)) 
        });



        function zoomPartie1(step, trigger){
           // Zoom just to steps in or out
            if(zoom_level>=120 && step>0 || zoom_level<=80 && step<0) return;
            // Set / reset zoom
            if(step==0) zoom_level=100;
            else zoom_level=zoom_level+step;


          $('#blocMenu').css({
                transform: 'scale('+(zoom_level/100)+')', // set zoom
                transformOrigin: '60% 100%', // set transform scale base
                transitionDuration: '2s'
            });
          $(trigger).css({
             transform: 'scale('+(zoom_level/250)+')', // set zoom
                // transformOrigin: '-50% 180%', // set transform scale base
                transitionDuration: '2s'
          });
          setTimeout("window.location.href='parties/partie.php?id=1';", 2000);
        }



        function zoomPartie2(step, trigger){
           // Zoom just to steps in or out
            if(zoom_level>=120 && step>0 || zoom_level<=80 && step<0) return;
            // Set / reset zoom
            if(step==0) zoom_level=100;
            else zoom_level=zoom_level+step;


          $('#blocMenu').css({
                transform: 'scale('+(zoom_level/100)+')', // set zoom
                transformOrigin: '55% 40%', // set transform scale base
                transitionDuration: '2s'
            });
          $(trigger).css({
             transform: 'scale('+(zoom_level/350)+')', // set zoom
                // transformOrigin: '-50% 180%', // set transform scale base
                transitionDuration: '2s'
                // width: '90%'
          });
          setTimeout("window.location.href='parties/partie.php?id=2';", 2000);
        }




        function zoomPartie3(step, trigger){
           // Zoom just to steps in or out
            if(zoom_level>=120 && step>0 || zoom_level<=80 && step<0) return;
            // Set / reset zoom
            if(step==0) zoom_level=100;
            else zoom_level=zoom_level+step;


          $('#blocMenu').css({
                transform: 'scale('+(zoom_level/100)+')', // set zoom
                transformOrigin: '5% 60%', // set transform scale base
                transitionDuration: '2s'
            });
          $(trigger).css({
             transform: 'scale('+(zoom_level/200)+')', // set zoom
                // transformOrigin: '-50% 180%', // set transform scale base
                transitionDuration: '2s'
          });
          setTimeout("window.location.href='parties/partie.php?id=2';", 2000);
        }



        function zoomPartie4(step, trigger){

           // Zoom just to steps in or out
            if(zoom_level>=120 && step>0 || zoom_level<=80 && step<0) return;
            // Set / reset zoom
            if(step==0) zoom_level=100;
            else zoom_level=zoom_level+step;


          $('#blocMenu').css({
                transform: 'scale('+(zoom_level/100)+')', // set zoom
                transformOrigin: '65% 65%', // set transform scale base
                transitionDuration: '2s'
            });
          $(trigger).css({
             transform: 'scale('+(zoom_level/300)+')', // set zoom
                // transformOrigin: '-50% 180%', // set transform scale base
                transitionDuration: '2s'
          });


          setTimeout("window.location.href='parties/partie.php?id=4';", 2000);
        }



        function zoomPartie5(step, trigger){
           // Zoom just to steps in or out
            if(zoom_level>=120 && step>0 || zoom_level<=80 && step<0) return;
            // Set / reset zoom
            if(step==0) zoom_level=100;
            else zoom_level=zoom_level+step;


          $('#blocMenu').css({
                transform: 'scale('+(zoom_level/100)+')', // set zoom
                transformOrigin: '50% 0%', // set transform scale base
                transitionDuration: '2s'
            });

          setTimeout("window.location.href='parties/partie.php?id=5';", 2000);
        }


        // function cssOrigine(){
        //         $('#blocMenu').css({
        //         transform: 'scale('+(zoom_level/100)+')', // set zoom
        //         transformOrigin: '50% 50%', // set transform scale base
        //         transitionDuration: '2s'
        //     });
        // }


    });


/********************************************************   
----- - DEFILEMENT FLECHES -   ---- 
******************************************************/

        //Défilement du texte a droite avec les flèches haut et bas
        $(function() {
            var ele   = $('#texte');
            var speed = 25, scroll = 5, scrolling;

            $('#flecheHaut').mouseenter(function() {
                // Scroll the element up
                scrolling = window.setInterval(function() {
                    ele.scrollTop( ele.scrollTop() - scroll );
                }, speed);
            });

            $('#flecheBas').mouseenter(function() {
                // Scroll the element down
                scrolling = window.setInterval(function() {
                    ele.scrollTop( ele.scrollTop() + scroll );
                }, speed);
            });

            $('#flecheHaut, #flechebas').bind({
                click: function(e) {
                    // Prevent the default click action
                    e.preventDefault();
                },
                mouseleave: function() {
                    if (scrolling) {
                        window.clearInterval(scrolling);
                        scrolling = false;
                    }
                }
            });
        });


/********************************************************		
-----	-	MENU DEROULANT -   ---- 
******************************************************/

  
function onClickMenu(){
  // console.log('onClic de l image');
  var onglet1 = document.getElementById('onglet1');
  var onglet2 = document.getElementById('onglet2');
  var onglet3 = document.getElementById('onglet3');
  var onglet4 = document.getElementById('onglet4');
  

  if(onglet1.classList == 'animation-target1'){
    resetAnimationMenuAll('#onglet1','animation-target1');
    resetAnimationMenuAll('#onglet2','animation-target2');
    resetAnimationMenuAll('#onglet3','animation-target3');
    resetAnimationMenuAll('#onglet4','animation-target4');

  }
  //Sinon
  else{ 
    animationMenuAll('#onglet1','animation-target1');
    animationMenuAll('#onglet2','animation-target2');
    animationMenuAll('#onglet3','animation-target3');
    animationMenuAll('#onglet4','animation-target4');
    
  }

};


/********************************************************   
----- - VUE 1 ET 2 -   ---- 
******************************************************/

function onClickVue1(){
  var vue1 = document.getElementById('blocMenu');
  // var elements = document.getElementById('blocElements');


  vue1.style.backgroundImage = "url(../menuPrincipal/img/BGanime.gif)";
  showHTML('#blocElements');
};

function onClickVue2(){
  var vue1 = document.getElementById('blocMenu');
  // var elements = document.getElementById('blocElements');


  vue1.style.backgroundImage = "url(img/BGouhDK2.jpg)";
  hideHTML('#blocElements');
};






/********************************************************   
----- -    LECTEUR MUSIQUE     - ---- 
******************************************************/

      function play(idPlayer, control) {
          var player = document.querySelector('#' + idPlayer);
          var image = document.getElementById ("controlSon");
  
          if (player.paused) {
              player.play();
              image.src = 'img/iconSonActive.png';
          } else {
              player.pause(); 
              image.src = 'img/iconSonInactive.png';
          }
      };

      function resume(idPlayer) {
          var player = document.querySelector('#' + idPlayer);
  
          player.currentTime = 0;
          player.pause();
      };

