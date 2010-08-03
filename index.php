<html>
  <head>
  <title>Arena</title>
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
  <script type="text/javascript" src="js/arena-0.0.1.js"></script>
  <script type="text/javascript" src="js/jquery.spritely-0.2.1.js"></script>
  <script type="text/javascript" src="js/jquery-ui-1.7.2.spritely.custom.min.js"></script>
  
  <style type="text/css">
  		#bird {
			background: transparent url(resources/sprites/att_fire.png) 0 0 no-repeat;
			position: absolute;
			top: 0px;
			left: 0px;
			width: 64px;
			height: 63px;
			z-index: 2000;
			cursor: pointer;
		}
	</style>
  
  <script>
  (function($) {
      $(document).ready(function() {
      				$('#bird')
    					.sprite({fps: 8, no_of_frames: 6})
    					//.spRandom({top: 50, bottom: 200, left: 300, right: 320})
    					.isDraggable()
    					.activeOnClick()
    					.active();
    	});
	})(jQuery);
  </script>
  
  
  </head>
  
  <LINK rel="stylesheet" type="text/css" href="css/default.css">
  <LINK rel="stylesheet" type="text/css" href="css/arena.css">
  <body>
 
    <div id="nav">
    </div>
    
    <div id="marco">
      <?php
        include("system/arena.php");
      ?>
    </div>
    
    <div id="footer">
    </div>  
    
  </body>


</html>