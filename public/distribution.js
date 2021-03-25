
function distributionStore() {
    var formData = new FormData(document.getElementById("distribution"));
    axios({
            method: 'post',
            url: 'distributionStore',
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

function distributionEdit(id) {
    var formData = new FormData(document.getElementById("distribution"));
    formData.append("id",id);
    axios({
            method: 'post',
            url: 'distributionEdit',
            data: formData,
            headers: {
                'Content-Type': 'multipart/form-data'
            }
        })
        .then(function(response) {
            distribution.id.value=response.data["id"];
            distribution.products_id.value=response.data["products_id"];
            distribution.warehouses_id.value=response.data["warehouses_id"];
            distribution.quantity.value=response.data["quantity"];
        })
        .catch(function(response) {
            //handle error
            console.log(response);
        });

}

function distributionUpdate() {
    var formData = new FormData(document.getElementById("distribution"));
    axios({
            method: 'post',
            url: 'distributionUpdate',
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

function distributionDestroy(id) {

if(confirm("¿Quieres eliminar este registro?")){
  var formData = new FormData(document.getElementById("distribution"));
    formData.append("id",id)
    axios({
            method: 'post',
            url: 'distributionDestroy',
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

function distributionShow() {
    var formData = new FormData(document.getElementById("show"));
    axios({
            method: 'post',
            url: 'distributionShow',
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
