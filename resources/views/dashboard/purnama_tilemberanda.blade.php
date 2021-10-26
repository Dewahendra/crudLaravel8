<!DOCTYPE html>
<html lang="en">


@include('layouts.dashboard-layout.header')
<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

@include('layouts.dashboard-layout.sidebar')

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

@include('layouts.dashboard-layout.topbar')
                
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading 1 -->
                    <h1 class="h3 mb-4 text-gray-800">Purnama_Tilem</h1>
                    <a href="{{route('purnama_tilem.create')}}" class="btn btn-success">Tambah Data<i class=" ml-2 fas fa-plus-square"></i></a>
                    
                    <div class="card shadow mb-4">
                      <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Data Pembayaran</h6>
                      </div>
                      <div class="card-body">
                          <div class="table-responsive">
                              <table class="table table-bordered text-center" width="100%" cellspacing="0">
                                  <thead>
                                      <tr>
                                          <th>Pilih</th>
                                          <th>Id_pt</th>
                                          <th>Nama</th>
                                          <th>Jumlah</th>
                                          <th>Keterangan</th>
                                          <th class="collspan-2">Opsi</th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                    <?php $id_pt=1;?>
                            @foreach ($purnama_tilem as $item)
                                      <tr>
                                          <td><input type="checkbox" id="" name=""></td>
                                          <td>{{$id_pt}}</td>
                                          <td>{{$item->nama}}</td>
                                          <td>{{$item->jumlah}}</td>
                                          <td>{{$item->keterangan}}</td>
                                          <td>
                                            <form action="{{route('purnama_tilem.destroy', $item->id_pt)}}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                            <a href="{{route('purnama_tilem.edit', '$title->id_pt')}}" class="btn btn-primary">Edit<i class=" ml-2 fas fa-edit"></i></a>
                                            <button type="submit" class="btn btn-danger">Hapus<i class=" ml-2 fa fa-trash"></i></button>
                                          </td>
                                      </tr>
                                      <?php $id_pt++;?>
                           @endforeach
                                  </tbody>
                              </table>
                              {{$purnama_tilem->links()}}
                          </div>
                      </div>
                    </div>

            </div>
            <!-- End of Main Content -->

            @include('layouts.dashboard-layout.footer')

</body>

</html>