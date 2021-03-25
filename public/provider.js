function providerStore() {
    var formData = new FormData(document.getElementById("provider"));
    axios({
            method: 'post',
            url: 'providerStore',
            data: formData,
            headers: {
                'Content-Type': 'multipart/form-data'
            }
        })
        .then(function(response) {
            //handle success
            var contentdiv = document.getElementById("mycontent");
            contentdiv.innerHTML = response.data;
     //carga pdf- csv - excel
     datatable_load();
     alert('Registrado Correctamente');
        })
        .catch(function(response) {
            //handle error
            console.log(response);
        });

}

function providerEdit(id) {
    var formData = new FormData(document.getElementById("provider"));
    formData.append("id",id);
    axios({
            method: 'post',
            url: 'providerEdit',
            data: formData,
            headers: {
                'Content-Type': 'multipart/form-data'
            }
        })
        .then(function(response) {
            //handle success
            var contentdiv = document.getElementById("mycontent");
           // contentdiv.innerHTML = response.data["description"];
            provider.id.value=response.data["id"];
            provider.name.value=response.data["name"];
            provider.description.value=response.data["description"];
            provider.cellphone.value=response.data["cellphone"];
        })
        .catch(function(response) {
            //handle error
            console.log(response);
        });

}

function providerUpdate() {
    var formData = new FormData(document.getElementById("provider"));
    axios({
            method: 'post',
            url: 'providerUpdate',
            data: formData,
            headers: {
                'Content-Type': 'multipart/form-data'
            }
        })
        .then(function(response) {
            //handle success
            var contentdiv = document.getElementById("mycontent");
            contentdiv.innerHTML = response.data;
     //carga pdf- csv - excel
     datatable_load();
     alert('Modificado Correctamente');
        })
        .catch(function(response) {
            //handle error
            console.log(response);
        });

}

function providerDestroy(id) {

if(confirm("¿Quieres eliminar este registro?")){
  var formData = new FormData(document.getElementById("provider"));
    formData.append("id",id)
    axios({
            method: 'post',
            url: 'providerDestroy',
            data: formData,
            headers: {
                'Content-Type': 'multipart/form-data'
            }
        })
        .then(function(response) {
            //handle success
            var contentdiv = document.getElementById("mycontent");
            contentdiv.innerHTML = response.data;
     //carga pdf- csv - excel
     datatable_load();
     alert('Eliminado Correctamente');
        })
        .catch(function(response) {
            //handle error
            console.log(response);
        });
}
}
function providerShow() {
    var formData = new FormData(document.getElementById("show"));
    axios({
            method: 'post',
            url: 'providerShow',
            data: formData,
        })
        .then(function(response) {
            //handle success
            var contentdiv = document.getElementById("mycontent");
            contentdiv.innerHTML = response.data;
                 //carga pdf- csv - excel
                 datatable_load();
        })
        .catch(function(response) {
            //handle error
            console.log(response);
        });

}
