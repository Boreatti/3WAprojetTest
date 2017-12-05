/********************************************************     
----- - PRELOAD -   ---- 
******************************************************/
	var p = 0;
	$.arrPreload = [];
	$.arrPreload[p++] = "imgIntro/particulesDebut.png";
	$.arrPreload[p++] = "imgIntro/medioHalo-orange.png";
	$.arrPreload[p++] = "imgIntro/eldinnPlanete2.png";
	$.arrPreload[p++] = "imgIntro/particules2.png";  
	$.arrPreload[p++] = "imgIntro/fondPortail.png";
	$.arrPreload[p++] = "imgIntro/portailAnim4Obt.gif";
	$.arrPreload[p++] = "imgIntro/BGplan1-teinte.png";  
	$.arrPreload[p++] = "imgIntro/BGplan2-teinte.png";  
	$.arrPreload[p++] = "imgIntro/BGplan3-teinte.png";  

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


jQuery(document).ready(function($)
{

/********************************************************   
----- - SMOOTH SCROLL -   ---- 
******************************************************/

var smoothScroll = {
    speed: 0,
    delay: 10, // en ms
    timer: null,
    scrollSpeed: 4,
    inertia: 0.95,
    init: function(){
        this.setEventsListeners();
    },
    setEventsListeners: function(){
        var me = this;
        $(document).bind('DOMMouseScroll mousewheel', function(e){
            me.setSpeed(e.originalEvent);
        });
	 },
    setSpeed: function(e){
        var direction = e.detail ? -e.detail : e.wheelDelta;
    	this.speed += direction < 0 ? -this.scrollSpeed : this.scrollSpeed;
    	if(this.timer == null){
    		this.timer = setTimeout(this.smoothScroll, this.delay, this); 
    	}
    	e.preventDefault();
    },
    smoothScroll: function(scope){
		var self = scope;
    	self.speed *= self.inertia;

        var currScrollTop = $(window).scrollTop();
        $(window).scrollTop(currScrollTop-self.speed);

    	if(self.speed < self.inertia && self.speed > -self.inertia){
    		self.speed = 0;
    		clearTimeout(self.timer);
    		self.timer = null;
    	}else{
    		self.timer = setTimeout(self.smoothScroll, self.delay, self);
    	}
    }
}

smoothScroll.init();

/********************************************************   
----- - DEFILEMENT FLECHES -   ---- 
******************************************************/

        //Défilement du texte a droite avec les flèches haut et bas
        $(function() {
            var ele   = $('#texteHistoire');
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


});





/********************************************************   
----- - EVENT -   ---- 
******************************************************/
	// init controller
	var controller = new ScrollMagic.Controller();


/*FIXED INTRO*/
	$(function () { 
		var sceneFixeIntro = new ScrollMagic.Scene({triggerElement: "", duration: 400})
			.setPin("#BGplan1", "#BGplan2", "#BGplan3")
			.addTo (controller);
		});


/*SCROLL BG (en 3 plans)*/
	$(function () {

		var tweenScrollBG = new TimelineMax ()
			.add([
				TweenMax.to("#BGplan1", 1, {backgroundPosition: "50% 40%", ease: Linear.easeNone}),
				TweenMax.to("#BGplan2", 1, {backgroundPosition: "50% 90%", ease: Linear.easeNone}),
				TweenMax.to("#BGplan3", 1, {backgroundPosition: "50% 100%", ease: Linear.easeNone})
			]);


		var sceneScrollBG = new ScrollMagic.Scene({triggerElement: "#reperePlanete", duration: 1500})
					.setTween(tweenScrollBG)
					.addTo(controller);

	});



/*PARTICULES*/
	$(function () {

		var tweenScrollParticules = new TimelineMax ()
			.add([
				TweenMax.to("#particulesDebut", 1, {marginTop: "-20%", ease: Linear.easeNone})
			]);


		var sceneScrollBG = new ScrollMagic.Scene({triggerElement: "", duration: 1500})
					.setTween(tweenScrollParticules)
					.addTo(controller);

	});


/*EVENT TITRE + TEXTE INTRO*/
	$(function () { 
		var tweenEventIntro = new TimelineMax ()
			.add([
				TweenMax.to("h1", 1, {marginTop: "-700px", ease: Linear.easeNone}),
				TweenMax.to("h2", 1, {marginLeft: "1500px", ease: Linear.easeNone}),
				// TweenMax.to(".containerTexteIntro", 1, {marginLeft: "-500px", ease: Linear.easeNone})
			]);

		// build scene
		var sceneIntro = new ScrollMagic.Scene({triggerElement: '', duration: 150})
						.setTween(tweenEventIntro)
						.addTo(controller);
	});


/*BULLES TXT 1 A 4*/
	$(function () { 
		var tweenBulleA = new TimelineMax ()
			.add([
				TweenMax.from("#bulle1", 1, {autoAlpha: 0, left: "+=60", top: "+=50", scale: 0.2, ease: Back.easeOut})
			]);


		// build scene
		var sceneBulleA = new ScrollMagic.Scene({triggerElement: '#repereBulle1'})
						.addIndicators({name: "bulle1"})
						.setTween(tweenBulleA)
						.addTo(controller);
	});



	$(function () { 
		var tweenBulleB = new TimelineMax ()
			.add([
				TweenMax.from("#bulle2", 1, {autoAlpha: 0, left: "+=60", top: "+=50", scale: 0.2, ease: Back.easeOut})
			]);

		// build scene
		var sceneBulleB = new ScrollMagic.Scene({triggerElement: '#repereBulle2'})
						.addIndicators({name: "bulle2"})
						.setTween(tweenBulleB)
						.addTo(controller);
	});




	$(function () { 
		var tweenBulleC = new TimelineMax ()
			.add([
				TweenMax.from("#bulle3", 1, {autoAlpha: 0, left: "+=60", top: "+=50", scale: 0.2, ease: Back.easeOut})
			]);

		// build scene
		var sceneBulleC = new ScrollMagic.Scene({triggerElement: '#repereBulle3'})
						.addIndicators({name: "bulle3"})
						.setTween(tweenBulleC)
						.addTo(controller);
	});




	$(function () { 
		var tweenBulleD = new TimelineMax ()
			.add([
				TweenMax.from("#bulle4", 1, {autoAlpha: 0, left: "+=60", top: "+=50", scale: 0.2, ease: Back.easeOut})
			]);

		// build scene
		var sceneBulleD = new ScrollMagic.Scene({triggerElement: '#repereBulle4'})
						.addIndicators({name: "bulle4"})
						.setTween(tweenBulleD)
						.addTo(controller);
	});



/*BULLES TXT 5 A 6*/
	$(function () { 
		var tweenBulle5 = new TimelineMax ()
			.add([
				TweenMax.from("#bulle5", 1, {autoAlpha: 0, left: "+=60", top: "+=50", scale: 0.2, ease: Back.easeOut})
			]);


		// build scene
		var sceneBulle5 = new ScrollMagic.Scene({triggerElement: '#repereBulle5'})
						.setTween(tweenBulle5)
						.addTo(controller);
	});




	$(function () { 
		var tweenBulle6 = new TimelineMax ()
			.add([
				TweenMax.from("#bulle6", 1, {autoAlpha: 0, left: "+=60", top: "+=50", scale: 0.2, ease: Back.easeOut})
			]);

		// build scene
		var sceneBulle6 = new ScrollMagic.Scene({triggerElement: '#repereBulle6'})
						.setTween(tweenBulle6)
						.addTo(controller);
	});




	$(function () { 
		var tweenBulle7 = new TimelineMax ()
			.add([
				TweenMax.from("#bulle7", 1, {autoAlpha: 0, left: "+=60", top: "+=50", scale: 0.2, ease: Back.easeOut})
			]);

		// build scene
		var sceneBulle7 = new ScrollMagic.Scene({triggerElement: '#repereBulle7'})
						.setTween(tweenBulle7)
						.addTo(controller);
	});




	$(function () { 
		var tweenBulle8 = new TimelineMax ()
			.add([
				TweenMax.from("#bulle8", 1, {autoAlpha: 0, left: "+=60", top: "+=50", scale: 0.2, ease: Back.easeOut})
			]);

		// build scene
		var sceneBulle8 = new ScrollMagic.Scene({triggerElement: '#repereBulle8'})
						.setTween(tweenBulle8)
						.addTo(controller);
	});



/********************************************************   
----- - LECTEUR MUSIQUE -   ---- 
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

