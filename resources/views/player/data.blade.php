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

  @if(session('notice'))
  <section class="content-header">
    <div class="alert alert-success alert-dismissible">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
      <h4><i class="icon fa fa-check"></i> Success!</h4>
      {{ session('notice') }}.
    </div>              
  </section>
  @endif

  <section class="content-header">  
    <div class="row">
      <div class="col-md-2">
        <a href="/player/create" class="btn btn-block btn-primary btn-flat">+ Add Player</a>    
      </div>
    </div>
  </section>
  <!-- Main content -->
  <section class="content">
    <!-- Default box -->
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
            <td>{{$player->age}}</td>
            <td>{{$player->club}}</td>
            <td>{{$player->position }}</td>
            <td>
              <a href="/player/{{$player->id}}/edit" class="btn btn-success btn-sm">Edit</a>
              <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#delete{{$player->id}}">
                Delete
              </button>
              <!--
              <form action="/player/{{$player->id}}" method="POST">
                @method('DELETE')
                @csrf
                <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#delete">
                  Delete
                </button>
              </form>
              -->
            </td>
          </tr>
          @endforeach
          </tbody>
        </table>
      </div>
      <!-- /.box-body -->
    </div>

    @foreach($players as $player)
    <div class="modal modal-danger fade" id="delete{{$player->id}}">
      <div class="modal-dialog modal-sm">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">{{$player->name}}</h4>
          </div>
          <div class="modal-body">
            <p>Are you sure to delete this data?</p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">No</button>
            <a href="/player/{{$player->id}}/delete" class="btn btn-outline">Yes</a>
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