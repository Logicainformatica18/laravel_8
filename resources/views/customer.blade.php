@extends('template')
@section('content')


    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Clientes</h1>
                    {{ session('success') }}
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                        <li class="breadcrumb-item active">Clientes</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"
        onclick="New();$('#customer')[0].reset();">
        Agregar
    </button>
    <p></p>
    Buscar
    <form name="for" id="show">
        <input type="text" name="show" class="form-control" style="width: 50%" onkeydown="customerShow();">
    </form>
    <!-- /.content -->
    {{-- {{ $customer->onEachSide(5)->links() }} --}}
    <p></p>
    <div id="mycontent">
        @include("customertable")
    </div>


    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Mantenimiento</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="" method="post" role="form" id="customer" name="form">
                        <input type="hidden" name="id" id="id">
                        {{ csrf_field() }}
                        Dni : <input type="number" name="dni" id="dni" class="form-control">
                        Ruc : <input type="number" name="ruc" id="ruc" class="form-control">
                        Apellido Paterno : <input type="text" name="firstname" id="firstname" class="form-control">
                        Apellido Materno : <input type="text" name="lastname" id="lastname" class="form-control">
                        Nombres : <input type="text" name="name" id="name" class="form-control">
                        Celular : <input type="number" name="cellphone" id="cellphone" class="form-control">
                        Email : <input type="email" name="email" id="email" class="form-control">



                </div>
                <div class="modal-footer">
                    <input type="button" value="Nuevo" class="btn btn-warning" onclick="New();$('#customer')[0].reset();"
                        name="new">
                    <input type="button" value="Guardar" class="btn btn-success" id="create" onclick="customerStore()"
                        name="create">
                    <input type="button" value="Modificar" class="btn btn-danger" id="update" onclick="customerUpdate();"
                        name="update">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>


@endsection
