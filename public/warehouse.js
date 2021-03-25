
function warehouseStore() {
    var formData = new FormData(document.getElementById("warehouse"));
    axios({
            method: 'post',
            url: 'warehouseStore',
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

function warehouseEdit(id) {
    var formData = new FormData(document.getElementById("warehouse"));
    formData.append("id",id);
    axios({
            method: 'post',
            url: 'warehouseEdit',
            data: formData,
            headers: {
                'Content-Type': 'multipart/form-data'
            }
        })
        .then(function(response) {
            //handle success
            var contentdiv = document.getElementById("mycontent");
           // contentdiv.innerHTML = response.data["description"];
            warehouse.id.value=response.data["id"];
            warehouse.name.value=response.data["name"];
            warehouse.description.value=response.data["description"];
        })
        .catch(function(response) {
            //handle error
            console.log(response);
        });

}

function warehouseUpdate() {
    var formData = new FormData(document.getElementById("warehouse"));
    axios({
            method: 'post',
            url: 'warehouseUpdate',
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

function warehouseDestroy(id) {

if(confirm("¿Quieres eliminar este registro?")){
  var formData = new FormData(document.getElementById("warehouse"));
    formData.append("id",id)
    axios({
            method: 'post',
            url: 'warehouseDestroy',
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

function warehouseShow() {
    var formData = new FormData(document.getElementById("show"));
    axios({
            method: 'post',
            url: 'warehouseShow',
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
