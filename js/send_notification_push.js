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
	        window.alert(json);
	    },
	 
	    // código a ejecutar si la petición falla;
	    // son pasados como argumentos a la función
	    // el objeto de la petición en crudo y código de estatus de la petición
	    error : function(xhr, status) {
	        alert('Disculpe, existió un problema: ');

	        console.log(xhr);
	        console.log(status);
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