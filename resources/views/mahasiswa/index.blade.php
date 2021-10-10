@extends('layouts.layout')
@section('content')
<div class="row">
  <div class="col-md-12 col-sm-12 ">
    <div class="x_panel">
      <div class="x_title">
        <h2>Tabel Fakultas</h2>
        <ul class="nav navbar-right panel_toolbox">
          <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
          </li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="#">Settings 1</a>
                <a class="dropdown-item" href="#">Settings 2</a>
              </div>
          </li>
          <li><a class="close-link"><i class="fa fa-close"></i></a>
          </li>
        </ul>
      <div class="clearfix"></div>
    </div>
    <a href="{{ route('mahasiswa.create') }}" class="btn btn-success btn-sm"><i class="fa fa-plus"></i></a>
    <div class="x_content">
        <div class="row">
            <div class="col-sm-12">
              <div class="card-box table-responsive">
                <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Nama Fakultas</th>
                      <th>Nama Jurusan</th>
                      <th>Nama Mahasiswa</th>
                      <th>Alamat</th>
                      <th>JK</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @php $no = 1; @endphp
                    @foreach($dataMhs as $data)
                    <tr>
                      <td>{{$no++}}</td>
                      <td>{{$data->nama_fak}}</td>
                      <td>{{$data->nama_jur}}</td>
                      <td>{{$data->nama}}</td>
                      <td>{{$data->alamat}}</td>
                      <td>{{$data->jk}}</td>

                      <td>
                        <center>
                          
                          <a href="{{ route('mahasiswa.edit', $data->id) }}" class="btn btn-primary">
                            <i class="fa fa-pencil"></i>
                          </a>

                        <form method="post" action="{{ route('mahasiswa.destroy', $data->id) }}">
                          
                          @method('DELETE')
                          @csrf
                          
                          <button type="submit" class="btn btn-danger">
                            <i class="fa fa-trash"></i>
                          </button>
                        </center>
                        </form>
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
    </div>
  </div>
</div>

@endsection