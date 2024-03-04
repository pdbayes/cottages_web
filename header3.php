


<!-- include jQuery library -->
	 <script type="text/javascript" src="js/jquery.js">
</script>
<!-- include Cycle plugin -->
	<script type="text/javascript" src="js/jquery.cycle.all.js">
</script>
	<script type="text/javascript">
	$(document).ready(function() {
    $('#pause').click(function() { $('#slides').cycle('pause'); return false; });
    $('#play').click(function() { $('#slides').cycle('resume'); return false; });
    
    $('#slideshow1').hover(
        function() { $('#controls').fadeIn(); },
        function() { $('#controls').fadeOut(); }
    );
	$('.slideshow').cycle({
        fx: 'fade',speed:  3500, timeout:  10000, next:   '#next',
        prev:   '#prev'
      // choose your transition type, ex: fade, scrollUp, shuffle, etc...
    });
});
</script>
	
<script src="pro_drop_1/stuHover.js" type="text/javascript">
</script>
	
<script type="text/javascript">
  			var _gaq = _gaq || [];
  			_gaq.push(['_setAccount', 'UA-22836825-1']);
  			_gaq.push(['_trackPageview']);

  			(function() {
    		 var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
   			 ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
   			 var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
 			 })();
</script>
	 
			
			 
</head>

<body>
<div id="container">
<div id="wowslider-container1">

<div id="head1"><img src="images/tregrill cottages cornwall logo_co.jpg" alt="Tregrill Farm Cottages"></div>


