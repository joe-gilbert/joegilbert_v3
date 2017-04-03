<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<script>

	/* jQuery functions */
	$(document).ready(function(){

		/* Skill Experience Bar Animation */
		$('.learn-more-execute').on('click', function(e){

			e.preventDefault();

			var linkClicked = $(this),
					idToReveal = linkClicked.attr("href"),
					hrefText = linkClicked.text();

			/* Fade In Section */
			$('#' + idToReveal).toggle('200');

			/* Change CTA to after click */
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