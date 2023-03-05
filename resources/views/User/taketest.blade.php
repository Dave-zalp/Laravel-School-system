@extends('User.layouts.layout')
@section('content')

<form method="POST" action="{{ route('take.test') }}">
    @csrf
    <div class="form-group">
        @if (Session::has('err_message'))

        <div class="alert alert-danger alert-dismissible fade show" role="alert">
          <strong>{{ Session::get('err_message') }}</strong>
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
          
        @endif
      <label for="exampleInputNumber">Registeration Number</label>
      <input type="text" class="form-control" id="exampleInputNumber" name="reg" placeholder="Enter Registeration Number">
      <small id="RegHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Password</label>
      <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Password">
    </div>
    <button type="submit" class="btn btn-primary">Start Exam</button>
  </form>

@endsection