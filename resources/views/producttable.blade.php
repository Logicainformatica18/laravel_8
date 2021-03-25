    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">


                        <div class="card-header">
                            <h3 class="card-title">Tabla de mantenimiento</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
<table class="table table-responsive  table-striped"id="example1">
    <thead>
        <th></th>
        <th>Código</th>
        <th class="sorting">Cod. caja</th>
        <th class="sorting">Descripción</th>
        <th class="sorting">Detalle</th>
        <th>Color</th>
        <th>Medida</th>
        <th>Medida detalle</th>
        <th>Costo</th>
        <th>Precio 1</th>
        <th>Precio 2</th>
        <th>Precio 3</th>
        <th>Tipo (Material)</th>
        {{-- <th>Categorias</th> --}}
        <th>Categoria</th>
        <th>Proveedor</th>
        <th ><img width="20" src="https://img1.freepng.es/20180622/aac/kisspng-computer-icons-download-share-icon-nut-vector-5b2d36055f5105.9823437615296896053904.jpg" alt="" srcset=""></th>
    </thead>


    <tbody>

        @foreach ($product as $products)
            <tr>
                <td></td>
                <td>{{ $products->id }}</td>
                <td>{{ $products->code_box }} </td>
                <td>{{ $products->description }} </td>
                <td>{{ $products->detail }} </td>
                <td>{{ $products->color->description}} </td>
                <td>{{ $products->size->description}} </td>
                <td>{{ $products->size->detail}} </td>
                <td>{{ $products->cost}} </td>
                <td>{{ $products->price1}} </td>
                <td>{{ $products->price2}} </td>
                <td>{{ $products->price3}} </td>
                <td>{{ $products->type->description}} </td>
                <td>{{ $products->category->description}} </td>
                <td>{{ $products->provider->name}} </td>
                <td>
                {{-- <button type="button" onclick="category_productEdit('{{$products->id }}');" class="btn btn-warning" data-toggle="modal" data-target="#modal_category_product">Categoria</button> --}}
                    <!-- Button trigger modal -->
                    <button type="button" onclick="productEdit({{ $products->id }});Up();" class="btn btn-success note-icon-pencil"
                        data-toggle="modal" data-target="#exampleModal">
                    </button>
                    <!-- Button trigger modal -->
                    <button type="button" onclick="productDestroy({{ $products->id }})" class="btn btn-danger note-icon-trash">
                    </button>
                </td>
            </tr>
        @endforeach

    </tbody>
</table>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
