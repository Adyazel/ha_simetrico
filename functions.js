const url = "http://localhost/pagina_hacienda/";

/*
function validar_efirma(){
    var formElement = document.getElementById("form_ini");
    formData = new FormData(formElement);
    
    fetch(url + 'validacion_efirma.php', {
        method: 'POST',
        body: formData
     })
     
     .then(function(response) {
        if(response.ok) {
           return response.text();
           console.log("ahhhhh");
        } else {
         
           throw "Error en la llamada Ajax";
        }
     
     })//Si es exitosa la llamada entonces...
     .then(function(texto) {
        var datos = JSON.parse(texto);
        console.log(datos);
         if (datos.access == true) {
            localStorage.setItem("sessionsat", JSON.stringify(datos.data[0]));
            window.location = 'home.html';
        }else if(datos.access == false){
            alert('Lo sentimos algun dato esta mal o no esta registrado, intenta de nuevo.');
        }
        else{
            alert('Lo sentimos algun error, intenta de nuevo.');
         }
        })
        .catch(function(err) {
           console.log(err);
        });
} */