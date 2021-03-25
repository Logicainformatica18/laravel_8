
function sizeStore() {
    var formData = new FormData(document.getElementById("size"));
    axios({
            method: 'post',
            url: 'sizeStore',
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

function sizeEdit(id) {
    var formData = new FormData(document.getElementById("size"));
    formData.append("id",id);
    axios({
            method: 'post',
            url: 'sizeEdit',
            data: formData,
            headers: {
                'Content-Type': 'multipart/form-data'
            }
        })
        .then(function(response) {
            //handle success
            var contentdiv = document.getElementById("mycontent");
           // contentdiv.innerHTML = response.data["description"];
            size.id.value=response.data["id"];
            size.description.value=response.data["description"];
            size.detail.value=response.data["detail"];
        })
        .catch(function(response) {
            //handle error
            console.log(response);
        });

}

function sizeUpdate() {
    var formData = new FormData(document.getElementById("size"));
    axios({
            method: 'post',
            url: 'sizeUpdate',
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

function sizeDestroy(id) {

if(confirm("¿Quieres eliminar este registro?")){
  var formData = new FormData(document.getElementById("size"));
    formData.append("id",id)
    axios({
            method: 'post',
            url: 'sizeDestroy',
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

function sizeShow() {
    var formData = new FormData(document.getElementById("show"));
    axios({
            method: 'post',
            url: 'sizeShow',
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
