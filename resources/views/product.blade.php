@extends('template')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Productos</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Tablas</a></li>
                        <li class="breadcrumb-item active">Productos</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->


            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"
                onclick="New();$('#product')[0].reset();">
                Gestionar Productos
            </button>
            <p></p>
            Buscar
            <form name="for" id="show">
                <input type="text" name="show" class="form-control" style="width: 50%" onkeydown="productShow();">
            </form>

            <p></p>
            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Productos</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>


                        <div class="modal-body">
                            <form action="" name="product" id="product">
                                Proveedor
                                <select class="form-control" name="providers_id" >
                                    @foreach ($provider as $item)
                                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                                    @endforeach
                                </select>
                                <input type="hidden" name="id">
                                Categoria
                                <select name="categories_id"  class="form-control">
                                    @foreach ($category as $item)
                                        <option value="{{ $item->id }}">{{ $item->description }}</option>
                                    @endforeach
                                </select>
                                Tipo material
                                <select name="types_id" id="types_id" class="form-control">
                                    @foreach ($type as $item)
                                        <option value="{{ $item->id }}">{{ $item->description }}</option>
                                    @endforeach
                                </select>
                                Medida
                                <select name="sizes_id" id="sizes_id" class="form-control">
                                    @foreach ($size as $item)
                                        <option value="{{ $item->id }}">{{ $item->description }}</option>
                                    @endforeach
                                </select>
                                Color
                                <select name="colors_id" id="colors_id" class="form-control">
                                    @foreach ($color as $item)
                                        <option value="{{ $item->id }}">{{ $item->description }}</option>
                                    @endforeach
                                </select>
                                <br>
                                Descripción
                                <input type="text" name="description" class="form-control">
                                Detalle
                                <input type="text" name="detail" class="form-control">
                                Código de caja
                                <input type="text" name="code_box" class="form-control">
                                Precio 1
                                <input type="number" name="price1" class="form-control" value="0">
                                Precio 2
                                <input type="number" name="price2" class="form-control" value="0">
                                Precio 3
                                <input type="number" name="price3" class="form-control" value="0">
                                Costo
                                <input type="number" name="cost" class="form-control" value="0">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" id="update" onclick="productUpdate()"
                                class="btn btn-warning">Modificar</button>
                            <button type="button" id="create" onclick="productStore()"
                                class="btn btn-success">Guardar</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>



            <!-- /.content -->
            {{-- {{ $product->onEachSide(5)->links() }} --}}
            <p></p>
            <div id="mycontent">
                @include('producttable')
            </div>

        @endsection
