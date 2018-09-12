firebase.auth().onAuthStateChanged(function(user) {
  if (user) {
    // User is signed in.
    // ...
    location.href = "send_notification_push.php";
  } else {
    // User is signed out.
    // ...
  }
});

function createErrorMessage(type, message){
  switch(type) {
    case "danger":
        $("#divErrorMessage").append('<div class="alert alert-danger alert-dismissible fade show" role="alert">'+
          '<strong>Error</strong> <p>'+message+'</p>'+
          '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>'+
        '</div>');
        break;
    case "warning":
        $("#divErrorMessage").append('<div class="alert alert-warning alert-dismissible fade show" role="alert">'+
          '<strong>Warning</strong> <p>'+message+'</p>'+
          '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>'+
        '</div>');
        break;
  }
}

function login(){

	var username = $("#username").val();
	var password = $("#password").val();

  $("#divErrorMessage").empty();

  if(username.length == 0){
    createErrorMessage("warning", "Username can't be empty");
  }else if (password.length == 0){
    createErrorMessage("warning", "Password can't be empty");
  }else{
    firebase.auth().signInWithEmailAndPassword(username, password).catch(function(error) {
    // Handle Errors here.
    var errorCode = error.code;
    var errorMessage = error.message;

    createErrorMessage("danger", errorMessage);

    $("#username").val("");
    $("#password").val("");
    // ...

    $(".alert").alert();
  });
  }

}