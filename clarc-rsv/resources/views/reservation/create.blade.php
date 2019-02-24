@extends('layouts.template')

@section('content')
  <!-- Begin Page Content -->
  <div class="container-fluid">
    <div class="row">
      <!-- Area Chart -->
      <div class="col-sm-12 offset-md-2 col-md-8">
        <div class="card shadow mb-4">
          <!-- Card Header - Dropdown -->
          <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Register</h6>
          </div>
          <!-- Card Body -->
          <div class="card-body">
            <!-- Nested Row within Card Body -->
            <div class="p-1">
              <form action="/users" method="post" class="user">
                {{ csrf_field() }}
                <div class="form-group">
                  <label for="input-name">Name</label>
                  <input type="text" class="form-control" name="name" id="input-name" placeholder="Your Name" value="{{ old('name') }}">
                </div>
                <div class="form-group">
                  <label for="input-login-id">LoginId</label>
                  <input type="text" class="form-control" name="login_id" id="login-id" placeholder="Login ID" value="{{ old('login_id') }}">
                </div>
                <div class="form-group">
                  <label for="input-password">Password</label>
                  <input type="password" class="form-control" name="password" id="input-password" placeholder="Password">
                </div>
                <div class="form-group">
                  <input type="password" class="form-control" name="password_confirmation" id="input-password-confirmation" placeholder="Repeat Password">
                </div>
                <button type="submit" class="btn btn-primary btn-user btn-block">
                  Register Account
                </button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
  <!-- /.container-fluid -->
@endsection
