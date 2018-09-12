<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <title>ExploraURP Notification | Login</title>
  </head>
  <body style="background: url(img/universidadRicardoPalma.jpg) no-repeat center center fixed; background-size: cover;">

  	<div class="container">
  		<div id="divErrorMessage">
  		</div>
  		<div class="card text-center border-success" style="width: 50%; margin: 0 auto; margin-top: 100px;">
		    <div class="text-center">
			  <img src="img/coditecIcon.png" alt="Team Coditec URP" style="width: 120px; height: 120px; margin: -30px; border-radius: 50%; border-color: green;">
			</div>
		  
		  <div class="card-body" >
		    <div class="input-group mb-3">
			  <div class="input-group-prepend">
			    <span class="input-group-text" id="basic-addon1">&#128100;</span>
			  </div>
			  <input type="email" id="username" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
			</div>

			<div class="input-group mb-3">
			  <div class="input-group-prepend">
			    <span class="input-group-text" id="basic-addon2">&#128273;</span>
			  </div>
			  <input type="password" id="password" class="form-control" placeholder="Password" aria-label="Password" aria-describedby="basic-addon2">
			</div>

			<button type="button" onclick="login()" class="btn btn-success">	&#128275;       Log in</button>
		  </div>
		  <div class="card-footer text-muted">
		    Copyright©2018 All rights reserved by Coditec
		  </div>
		</div>
  	</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.3.1.min.js"></script>

    <script src="js/popper.min.js"></script>

    <script src="js/bootstrap.min.js"></script>

    <!-- Firebase Javascript -->
    <script src="https://www.gstatic.com/firebasejs/5.4.2/firebase.js"></script>
	<script>
	  // Initialize Firebase
	  var config = {
	    apiKey: "AIzaSyAdmIF7sI2CssMJjqIKpI6hLYKy-xkQQGw",
	    authDomain: "exploraurp.firebaseapp.com",
	    databaseURL: "https://exploraurp.firebaseio.com",
	    projectId: "exploraurp",
	    storageBucket: "exploraurp.appspot.com",
	    messagingSenderId: "868598480950"
	  };
	  firebase.initializeApp(config);
	</script>

	<!-- My Javascript -->
	<script type="text/javascript" src="js/my/login.js"></script>

  </body>
</html>