<!DOCTYPE html>
<html>
	<head>
		<title>HNG-Interns</title>
		<link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Orbitron' rel='stylesheet' type='text/css'>
		<style type="text/css">
			body {
				color: #f9f8f6;
				background-color: #f9f8f6;
				background-image: url("images/photo-1507638940746-7b17d6b55b8f.jpg");
				background-position: center;
				
				line-height: 1.4em;
				margin: 0px;
				background-repeat: no-repeat;
                background-size: cover;
				height: 100%;}
			
		    h1 {
				font-family: 'Roboto', sans-serif;
		    	letter-spacing: 10px;
		     	padding-top: 20px;
			    padding-bottom: 50px;
			    text-align: center;
			    font-size: 5em;
			}
			h2 { 
			    font-family: 'Roboto', sans-serif;
			    text-align: center;
			}
			h3 {
				font-family: 'Roboto', sans-serif;
			    text-align: center;
			
			}
			p {
		    	padding-top: 80px;
		    	text-align: center;
			}
			.real{
	    		padding-top: 80px;
	    		text-align: center;
	    		display: inline-block;
	   		}
			#reals{
	    		font-size: 5em;
	    		font-family: 'Orbitron', sans-serif;
				letter-spacing: 10px;
			}
			#reas{
	    		font-size: 2em;
	    		font-family: 'Roboto', sans-serif;
			}
			.realest{
	    		text-align: center;
			}
		</style>
	</head>
	<body>
		<div class="headline">
		  <h1>HNG-Internship-4</h1>
		  <h2>Powerd by Mark Essien</h2>
		  <h2>hotels.ng</h2> 
		</div>
		<div class= "realest">
		  <div class= "real" id = "reas">
		  <?php
          echo date('l jS \of F Y ');
          ?>
		  </div>
		  <div class= "real" id = "reals">
		  <?php
          echo date(' h:i A');
          ?>
		  </div>
		</div>
		
		
	</body>
</html>