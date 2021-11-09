@extends('layout.master')

@section('title', 'Rubah Pemain')

@section('content')
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      {{$judul}}
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> {{$judul}}</a></li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <!-- form start -->
            <form role="form" action="/pemain/{{$pemain->id}}" method="POST">
              @method('PUT')
              @csrf
              <div class="box-body">
                <div class="form-group">
                  <label for="name">Nama</label>
                  <input type="text" class="form-control" id="nama" name="nama" value="{{$pemain->nama}}">
                </div>
                <div class="form-group">
                  <label for="negara">Negara</label>
                  <input type="text" class="form-control" id="negara" name="negara" value="{{$pemain->negara}}">
                </div>
                <div class="form-group">
                  <label for="usia">Usia</label>
                  <input type="number" class="form-control" id="usia" name="usia" value="{{$pemain->usia}}">
                </div>
                <div class="form-group">
                  <label for="klub">Klub</label>
                  <input type="text" class="form-control" id="klub" name="klub" value="{{$pemain->klub}}">
                </div>
                <div class="form-group">
                  <label for="posisi">Posisi</label>
                  <input type="text" class="form-control" id="posisi" name="posisi" value="{{$pemain->posisi}}">
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <input type="submit" class="btn btn-primary" value="Simpan">
                <a href="/pemain" class="btn btn-primary">Kembali</a>
              </div>
            </form>
          </div>
          <!-- /.box -->
        </div>
    </div>
  </section>
  <!-- /.content -->
</div>
@endsection