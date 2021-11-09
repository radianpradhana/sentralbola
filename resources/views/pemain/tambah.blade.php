@extends('layout.master')

@section('title', 'Tambah Pemain')

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
            <form role="form" action="/pemain" method="POST">
              @csrf
              <div class="box-body">
                <div class="form-group">
                  <label for="nama">Nama</label>
                  <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan Nama">
                  <div class="text-danger">
                    @error('nama')
                      {{ $message }}
                    @enderror
                  </div>
                </div>
                <div class="form-group">
                  <label for="negara">Negara</label>
                  <input type="text" class="form-control" id="negara" name="negara" placeholder="Masukkan Negara">
                  <div class="text-danger">
                    @error('negara')
                      {{ $message }}
                    @enderror
                  </div>
                </div>
                <div class="form-group">
                  <label for="usia">Usia</label>
                  <input type="number" class="form-control" id="usia" name="usia" placeholder="Masukkan Usia Pemain">
                  <div class="text-danger">
                    @error('usia')
                      {{ $message }}
                    @enderror
                  </div>
                </div>
                <div class="form-group">
                  <label for="klub">Klub</label>
                  <input type="text" class="form-control" id="klub" name="klub" placeholder="Masukkan Klub">
                  <div class="text-danger">
                    @error('klub')
                      {{ $message }}
                    @enderror
                  </div>
                </div>
                <div class="form-group">
                  <label for="posisi">Posisi</label>
                  <input type="text" class="form-control" id="posisi" name="posisi" placeholder="Masukkan Posisi Pemain">
                  <div class="text-danger">
                    @error('posisi')
                      {{ $message }}
                    @enderror
                  </div>
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