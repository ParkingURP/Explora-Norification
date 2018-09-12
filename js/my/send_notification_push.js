firebase.auth().onAuthStateChanged(function(user) {
  if (user) {
    // User is signed in.
    // ...
  } else {
    // User is signed out.
    location.href = "login.php";
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

    case "success":
        $("#divErrorMessage").append('<div class="alert alert-success alert-dismissible fade show" role="alert">'+
          '<strong>Success</strong> <p>'+message+'</p>'+
          '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>'+
        '</div>');
        break;
  }
}

function sending(){

	var name = $("#name").val();
	var title = $("#title").val();
	var description = $("#description").val();

	$("#divErrorMessage").empty();

	if(name.trim().length == 0){
	    createErrorMessage("warning", "Name can't be empty");
	  }else if (title.trim().length == 0){
	    createErrorMessage("warning", "Title can't be empty");
	  }else if (description.trim().length == 0){
	    createErrorMessage("warning", "Description can't be empty");
	  }else{
	  	$('#exampleModal').modal('show');
	  }

}

function send(){

	var name = $("#name").val();
	var title = $("#title").val();
	var description = $("#description").val();

	    $.ajax({
		    // la URL para la petición
		    url : 'run.php',
		 
		    // la información a enviar
		    // (también es posible utilizar una cadena de datos)
		    data : { name : name, title : title, description : description },
		 
		    // especifica si será una petición POST o GET
		    type : 'POST',
		 
		    // el tipo de información que se espera de respuesta
		    //dataType : 'json',
		 
		    // código a ejecutar si la petición es satisfactoria;
		    // la respuesta es pasada como argumento a la función
		    success : function(json) {
		        createErrorMessage("success", "Notification sent successfully.");
		        $("#name").val("");
		        $("#title").val("");
		        $("#description").val("");

		        $('#exampleModal').modal('hide');
		    },
		 
		    // código a ejecutar si la petición falla;
		    // son pasados como argumentos a la función
		    // el objeto de la petición en crudo y código de estatus de la petición
		    error : function(xhr, status) {
		        createErrorMessage("danger", "Oops. We have a problem, try again please.");
		        $("#name").val("");
		        $("#title").val("");
		        $("#description").val("");

		        $('#exampleModal').modal('hide');

		        //console.log(xhr);
		        //console.log(status);
		    },
		});
}

function logout(){
	firebase.auth().signOut().then(function() {
	  // Sign-out successful.
	  window.alert("Se a cerrado la sesión.");
	  location.href = "login.php";
	}).catch(function(error) {
	  // An error happened.
	  window.alert("Hubo problema al cerrar sesión.");
	});
}