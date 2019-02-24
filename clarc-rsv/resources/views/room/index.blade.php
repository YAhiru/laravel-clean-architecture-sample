@extends('layouts.template')

@section('content')
  <!-- Begin Page Content -->
  <div class="container-fluid">
    <div class="row">
      <!-- Area Chart -->
      @foreach ($rooms as $room)
        <div class="col-sm-12 col-md-6">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">{{ $room->name }}</h5>
              <p class="card-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown...</p>
              <a href="#" class="btn btn-success">Reserve</a>
            </div>
          </div>
        </div>
      @endforeach
    </div>

  </div>
  <!-- /.container-fluid -->
@endsection
