@extends('layout.master')

@section('title', 'Pemain')

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

  @if(session('notifikasi'))
  <section class="content-header">
    <div class="alert alert-success alert-dismissible">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
      <h4><i class="icon fa fa-check"></i> Sukses!</h4>
      {{ session('notifikasi') }}.
    </div>              
  </section>
  @endif

  <section class="content-header">  
    <div class="row">
      <div class="col-md-2">
        <a href="/pemain/create" class="btn btn-block btn-primary btn-flat">+ Tambah Player</a>    
      </div>
      <div class="col-md-2">
        <a href="/pemain/print_pdf" target="_blank" class="btn btn-block btn-warning btn-flat">Print ke PDF</a>    
      </div>
    </div>
  </section>
  <!-- Main content -->
  <section class="content">
    <!-- Default box -->
    <!-- /.box -->

    <div class="box">
      <div class="box-header">
        <h3 class="box-title">List Pemain Sentral Bola</h3>
      </div>
      <!-- /.box-header -->
      <div class="box-body">
        <table id="example1" class="table table-bordered table-striped">
          <thead>
          <tr>
            <th>Nama</th>
            <th>Negara</th>
            <th>Usia</th>
            <th>Klub</th>
            <th>Posisi</th>
            <th>Aksi</th>
          </tr>
          </thead>
          <tbody>
          @foreach($pemain_semua as $pemain)
          <tr>
            <td>{{$pemain->nama}}</td>
            <td>{{$pemain->negara}}</td>
            <td>{{$pemain->usia}}</td>
            <td>{{$pemain->klub}}</td>
            <td>{{$pemain->posisi }}</td>
            <td>
              <a href="/pemain/{{$pemain->id}}/edit" class="btn btn-success btn-sm">Edit</a>
              <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#delete{{$pemain->id}}">
                Delete
              </button>
            </td>
          </tr>
          @endforeach
          </tbody>
        </table>
      </div>
      <!-- /.box-body -->
    </div>

    @foreach($pemain_semua as $pemain)
    <div class="modal modal-danger fade" id="delete{{$pemain->id}}">
      <div class="modal-dialog modal-sm">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">{{$pemain->nama}}</h4>
          </div>
          <div class="modal-body">
            <p>Anda yakin menghapus data ini?</p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Tidak</button>
            <a href="/pemain/{{$pemain->id}}/delete" class="btn btn-outline">Yes</a>
          </div>
        </div>
        <!-- /.modal-content -->
      </div>
      <!-- /.modal-dialog -->
    </div>
    @endforeach
  </section>
  <!-- /.content -->
</div>
@endsection