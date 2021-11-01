@extends('layout.master')

@section('title', 'Player')

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
    <!-- Default box -->
    <div class="box">
      <div class="box-body">
        Nanti ini buat tombol tambah
      </div>
      <!-- /.box-body -->
    </div>
    <!-- /.box -->

    <div class="box">
      <div class="box-header">
        <h3 class="box-title">Data Table With Full Features</h3>
      </div>
      <!-- /.box-header -->
      <div class="box-body">
        <table id="example1" class="table table-bordered table-striped">
          <thead>
          <tr>
            <th>Name</th>
            <th>Gender</th>
            <th>Age</th>
            <th>Club</th>
            <th>Position</th>
            <th>Action</th>
          </tr>
          </thead>
          <tbody>
          @foreach($players as $player)
          <tr>
            <td>{{$player->name}}</td>
            <td>{{$player->gender}}</td>
            <td>{{$player->age}}</td>
            <td>{{$player->club}}</td>
            <td>{{$player->position}}</td>
            <td>Edit | Delete</td>
          </tr>
          @endforeach
          </tbody>
        </table>
      </div>
      <!-- /.box-body -->
    </div>
  </section>
  <!-- /.content -->
</div>
@endsection