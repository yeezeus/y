<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Dave Zeus portfolio</title>
	<style>
	body {
	    background-position: center;
	    background-color: rgba(0,0,0, 0.3);
	    background-repeat: no-repeat;
	    -webkit-background-size: cover;
-moz-background-size: cover;
-o-background-size: cover;
background-size: cover;
color: #fff !important;
	}
	
	.vertical-center {
  min-height: 100%;  /* Fallback for browsers do NOT support vh unit */
  min-height: 100vh; /* These two lines are counted as one :-)       */

  display: flex;
  align-items: center;
}
		.overlay {
		background-color: rgba(0, 0, 0, 0.7);
		min-height: 100%;  
  		min-width: 100%; 
		
	}
	
	#credit {
	    position:absolute;
	    bottom:0.5rem;
	    right:0.5rem;
	    margin:0;
	    padding:0.5rem;
	}

	</style>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
</head>
<body>
    <div class="overlay">
  <div id="portfolio" class="container vertical-center justify-content-md-center">
  <div class="text-center">
  <h1>Dave Zeus</h1>
    <h4>Developer & Designer</h4>
    </div>
    
  </div>
  <div id="credit">
    <p>Photo by <a id="author"></a> / <a href="https://unsplash.com/?utm_source=portfolio&utm_medium=referral&utm_campaign=api-credit">Unsplash</a></p>
  </div>
  </div>
  <?php
    $client_id = getenv('CLIENT_ID')
    $req_uri = "https://api.unsplash.com/photos/random?client_id=" + $client_id
    $res =  file_get_contents($req_uri);
    echo $res
  ?>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script type="text/javascript">
    $( document ).ready(function() {
        var body = $("body"),
        author = $('#author')
        utmParams = "?utm_source=portfolio&utm_medium=referral&utm_campaign=api-credit"
        unsplashImg = "https://images.unsplash.com/photo-1432821596592-e2c18b78144f?ixlib=rb-0.3.5&q=85&fm=jpg&crop=entropy&cs=srgb&s=2d58953ffeb732135002a465be8230d3"
        unsplashAuthor = "Dustin Lee"
        unsplashLink = "https://unsplash.com/@dustinlee" + utmParams
        author.text(unsplashAuthor)
        author.attr("href", unsplashLink)
        body.css('background-image', 'url(' + unsplashImg + ')');
    });
    
    </script>
</body>
</html>