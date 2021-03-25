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
                            <table class="table table-responsive  table-striped" id="example1">
                                <thead>
                                    <th></th>
                                    <th>Código</th>
                                    <th class="sorting">Nombre</th>
                                    <th>Descripción</th>
                                    <th>Celular</th>
                                    <th ><img width="20" src="https://img1.freepng.es/20180622/aac/kisspng-computer-icons-download-share-icon-nut-vector-5b2d36055f5105.9823437615296896053904.jpg" alt="" srcset=""></th>
                                </thead>

                                <tbody>

                                    @foreach ($provider as $providers)
                                        <tr>
                                            <td></td>
                                            <td>{{ $providers->id }}</td>
                                            <td>{{ $providers->name }} </td>
                                            <td>{{ $providers->description }} </td>
                                            <td width="200px">
                                                <a href="#"onclick="whatsapp('{{ $providers->cellphone }}')">
                                                <img width="20px"src="https://logodownload.org/wp-content/uploads/2015/04/whatsapp-logo-1-1.png">
                                                {{ $providers->cellphone }}</a></td>

                                            <td>
                                                <!-- Button trigger modal -->
                                                <button type="button" onclick="providerEdit({{ $providers->id }});Up();"
                                                    class="btn btn-success  note-icon-pencil" data-toggle="modal"
                                                    data-target="#exampleModal">
                                                </button>
                                                <button type="button" onclick="providerDestroy({{ $providers->id }})"
                                                    class="btn btn-danger  note-icon-trash">
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
