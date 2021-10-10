@extends('layouts.layout')
@section('content')

<div class="row">
<!-- form input mask -->
  <div class="col-md-12 col-sm-12">
    <div class="x_panel">
      <div class="x_title">
        <h2>Ubah Jurusan</h2>
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
      <div class="x_content">
        <br />
        <form class="form-horizontal form-label-left" method="post" action="{{ route('jurusan.update',$datajur->id) }}">
          @method('PUT')
        	@csrf

          <div class="form-group row">
            <label class="control-label col-md-3 col-sm-3 col-xs-3">Nama Fakultas</label>
            <div class="col-md-9 col-sm-9 col-xs-9">
            <select class ="form-control" name="id_fak2">
              @foreach($datafak as $datafaks)
              <option value="{{$datafaks->id}}">{{$datafaks->nama_fak}}</option>
              @endforeach            
            </select>
            
            </div>
          </div>
          
          <div class="form-group row">
            <label class="control-label col-md-3 col-sm-3 col-xs-3">Nama Jurusan</label>
            <div class="col-md-9 col-sm-9 col-xs-9">
              <input type="text" class="form-control" name="nama_jur2" required="" autofocus="" autocomplete="off" value="{{$datajur->nama_jur}}">
              
            </div>
          </div>
          
          <div class="ln_solid"></div>

          <div class="form-group row">
            <div class="col-md-9 offset-md-3">
              <button type="reset" class="btn btn-danger">Reset</button>
              <button type="submit" class="btn btn-success">Submit</button>
            </div>
          </div>

        </form>
      </div>
    </div>
  </div>
  <!-- /form input mask -->
</div>

@endsection