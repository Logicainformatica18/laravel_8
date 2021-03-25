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

                            <!-- DataTables -->
                            <table id="example1" class="table table-bordered table-striped table-responsive dataTable">
                                <thead>
                                    <th></th>
                                    <th class="sorting">Código</th>
                                    <th class="sorting">Documento Identidad</th>
                                    <th class="sorting">Ruc</th>
                                    <th class="sorting">Paterno</th>
                                    <th class="sorting">Materno</th>
                                    <th class="sorting">Nombres</th>
                                    <th class="sorting">Celular</th>
                                    <th class="sorting">Email</th>
                                    <th ><img width="20" src="https://img1.freepng.es/20180622/aac/kisspng-computer-icons-download-share-icon-nut-vector-5b2d36055f5105.9823437615296896053904.jpg" alt="" srcset=""></th>
                                </thead>
                                <tbody>
                                    @foreach ($customer as $customers)
                                        <tr>
                                            <td></td>
                                            <td>{{ $customers->id }}</td>
                                            <td>{{ $customers->dni }}</td>
                                            <td>{{ $customers->ruc }}</td>
                                            <td>{{ $customers->firstname }}</td>
                                            <td>{{ $customers->lastname }}</td>
                                            <td>{{ $customers->name }}</td>
                                            <td width="200px">
                                                <a href="#"onclick="whatsapp('{{ $customers->cellphone }}')">
                                                <img width="20px"src="https://logodownload.org/wp-content/uploads/2015/04/whatsapp-logo-1-1.png">
                                                {{ $customers->cellphone }}</a></td>
                                            <td>{{ $customers->email }}</td>
                                            <td>
                                                <!-- Button trigger modal -->
                                                <button type="button" class="btn btn-success note-icon-pencil"
                                                    data-toggle="modal" data-target="#exampleModal"
                                                    onclick="customerEdit('{{ $customers->id }}'); Up();  return false"></button>

                                                <!-- <button class="note-icon-pencil" ></button> -->
                                                <button class="btn btn-danger note-icon-trash" onclick="customerDestroy('{{ $customers->id }}'); return false"></button>
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

