@extends('layouts.app')

@section('css')
        <link rel="stylesheet" href="{{asset('assets/backend/assets/vendor/datatables.net-bs4/css/dataTables.bootstrap4.css')}}">
@endsection

@section('js')
        <script src="{{asset('assets/backend/assets/vendor/datatables.net/js/jquery.dataTables.js')}}"></script>
        <script src="{{asset('assets/backend/assets/vendor/datatables.net-bs4/js/dataTables.bootstrap4.js')}}"></script>
        <script src="{{asset('assets/backend/assets/js/components/datatables-init.js')}}"></script>
@endsection


@section('content')
    <!-- Main Section -->
    <section class="main-section">
        <!-- Add Your Content Inside -->
        <div class="content">
            <!-- Remove This Before You Start -->
            <h1>Category</h1>
            @if(Session::has('alert-success'))
                <div class="alert alert-success">
                    <strong>{{ \Illuminate\Support\Facades\Session::get('alert-success') }}</strong>
                </div>
            @endif
            <hr>
            <div class="pull-nght">
            <a class="btn-btn-sm-btn-primary" href="{{route('pasien.create')}}">Tambah Data</a>
            	
            </div>
            <table class="table table-bordered">
                <thead>

                <tr>
                    <th>No.</th>
                    <th>Nama Pasien</th>
                    <th>Jenis Kelamin</th>
                    <th>Agama</th>
                    <th>Alamat</th>
                    <th>tanggal Lahir</th>
                    <th>Usia</th>
                    <th>No Telepon</th>
                    <th>Nomor KK</th>
                    <th>Hubungi Keluarga</th>
                    
                    <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                @php $no = 1; @endphp
                @foreach($pasien as $datas)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $datas->nm_pasien }}</td>
                        <td>{{$datas->jk}}</td>
                        <td>{{$datas->agama}}</td>
                        <td>{{$datas->alamat}}</td>
                        <td>{{$datas->tgl_lhr}}</td>
                        <td>{{$datas->usia}}</td>
                        <td>{{$datas->no_tlp}}</td>
                        <td>{{$datas->nm_kk}}</td>
                        <td>{{$datas->hub_kel}}</td>
                    
                    </tr>
                    <td style="text-align: ;">
                  	 <form action="{{route('pasien.destroy', $datas->id)}}" method="post">
                        {{csrf_field()}}
                            <a href="{{route('pasien.edit', $datas->id)}}"
                                        class="zmdi zmdi-edit btn btn-warning btn-rounded btn-floating btn-outline"> Edit
                                         </a>
                               &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                             <input type="hidden" name="_method" value="DELETE">
                              <button type="submit" class="zmdi zmdi-delete btn-rounded btn-floating btn btn-dangerbtn btn-danger btn-outline"> Delete</button>
                                    
                              </form>
                @endforeach
                </tbody>
            </table>
        </div>
        <!-- /.content -->
    </section>
    <!-- /.main-section -->
@endsection