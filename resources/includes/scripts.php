<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<script>

	/* jQuery functions */
	$(document).ready(function(){

		/* Navigation Functionality */
		$('.toggle-navi').on('click', function(e){

			/* Prevent the default anchor jump */
			e.preventDefault();

			/* Grab the id of the navi to activate */
			var linkClicked = $(this),
					hrefText = linkClicked.text(),
					navigationToActivate = $( $(this).attr("href") );

			/* Add the active-navi class to the desired navigation */
			navigationToActivate.toggleClass('active-navi');

			/* Prevent window scrolling */
			$('html, body').toggleClass('overlay-no-scroll');

			/* Change CTA after click */
			switch(hrefText){
				case 'Close':
					linkClicked.text("Contact");
					break;

				default:
					linkClicked.text("Close");
					break;
			}

		});




		/* Learn More CTA Visiblity Functionality */
		$('.learn-more-execute').on('click', function(e){

			e.preventDefault();

			var linkClicked = $(this),
					idToReveal = linkClicked.attr("href"),
					idToRevealsChildren =  $(idToReveal).children(),
					hrefText = linkClicked.text();

			/* Fade In Section */
			idToRevealsChildren.fadeToggle(500);

			/* Change CTA after click */
			switch(hrefText){
				case '+ Less Info':
					linkClicked.text("+ More Info");
					break;

				default:
					linkClicked.text("+ Less Info");
					break;
			}

		});


		/* Skill Experience Bar Animation */
		$('.skill-bar-percent').each(function(){

			var skillBar = $(this);

			skillBar.animate({
				width: skillBar.data("experience-percent")
			},6000);

		});

	}); /*  END document ready function */


	/* Google Analytics Tracking */
	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

	ga('create', 'UA-5194968-1', 'auto');
	ga('send', 'pageview');
	/* END Google Analytics Tracking */

</script>