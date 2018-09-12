<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

	<title>ExploraURP Notification | Send Notification</title>
</head>
<body style="background: url(img/universidadRicardoPalma.jpg) no-repeat center center fixed; background-size: cover;">

	<header>
		<nav class="navbar navbar-light bg-light">
		  <img src="img/logoExploraURP.png" height="70" alt="ExploraURP">
		  <div class="form-inline">
		  	<button type="button" class="btn btn-outline-secondary" onclick="logout()">Logout</button>
		  </div>
		</nav>
	</header>

	<div class="container">

		<div id="divErrorMessage">
  		</div>

		<div class="modal-dialog modal-lg">
		    <div class="modal-content">

		      <div class="modal-header">
		        <h5 class="modal-title h4">Send Notification to ExploraURP</h5>
		      </div>
		      <div class="modal-body">

				  <div class="form-group">
				    <label for="name">Name:</label>
				    <input type="text" class="form-control" id="name" aria-describedby="nameHelp" placeholder="Enter name...">
				  </div>
				  <div class="form-group">
				    <label for="title">Title:</label>
				    <input type="text" class="form-control" id="title" placeholder="Enter title...">
				  </div>
				  <div class="form-group">
				    <label for="description">Description:</label>
				    <textarea class="form-control" id="description" rows="3" placeholder="Enter description..."></textarea>
				  </div>
		      </div>

		      <div class="modal-footer">
		        <button class="btn btn-primary" onclick="sending()"><img src="img/icon_send.svg" width="30" height="30">  Send</button>
		      </div>
		    </div>
		  </div>
		</div>
	</div>

	<!-- Modal -->
	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="exampleModalLabel">Confirm Notification</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
	        
			Are you sure to send the notification?
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
	        <button type="button" onclick="send()" class="btn btn-primary"><img src="img/icon_send.svg" width="30" height="30">  Send</button>
	      </div>
	    </div>
	  </div>
	</div>
	
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

	<!-- JQUERY -->
	<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

	<!-- Bootstrap JS -->

	<script src="js/popper.min.js"></script>

    <script src="js/bootstrap.min.js"></script>

	<!-- My Javascript -->
	<script type="text/javascript" src="js/my/send_notification_push.js"></script>

</body>
</html>