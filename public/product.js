


function productStore() {
    var formData = new FormData(document.getElementById("product"));
    axios({
            method: 'post',
            url: 'productStore',
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

function productEdit(id) {
    var formData = new FormData(document.getElementById("product"));
    formData.append("id",id);
    axios({
            method: 'post',
            url: 'productEdit',
            data: formData,
            headers: {
                'Content-Type': 'multipart/form-data'
            }
        })
        .then(function(response) {
            //handle success
            var contentdiv = document.getElementById("mycontent");
           // contentdiv.innerHTML = response.data["description"];
            product.id.value=response.data["id"];
            product.providers_id.value=response.data["providers_id"];
            product.colors_id.value=response.data["colors_id"];
            product.types_id.value=response.data["types_id"];
            product.categories_id.value=response.data["categories_id"];
            product.sizes_id.value=response.data["sizes_id"];
            product.description.value=response.data["description"];
            product.code_box.value=response.data["code_box"];
            product.detail.value=response.data["detail"];
            product.price1.value=response.data["price1"];
            product.price2.value=response.data["price2"];
            product.price3.value=response.data["price3"];
            product.cost.value=response.data["cost"];
        })
        .catch(function(response) {
            //handle error
            console.log(response);
        });

}

function productUpdate() {
    var formData = new FormData(document.getElementById("product"));
    axios({
            method: 'post',
            url: 'productUpdate',
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

function productDestroy(id) {

if(confirm("¿Quieres eliminar este registro?")){
  var formData = new FormData(document.getElementById("product"));
    formData.append("id",id)
    axios({
            method: 'post',
            url: 'productDestroy',
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

function productShow() {
    var formData = new FormData(document.getElementById("show"));
    axios({
            method: 'post',
            url: 'productShow',
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
