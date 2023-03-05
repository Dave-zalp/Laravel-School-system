@extends('User.layouts.layout')
@section('content')
<br><br><br><br>
<div class="card mb-3">
    <div class="card-body">
      @if (Session::has('mssg'))

      <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success:</strong> {{ Session::get('mssg') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
        
      @endif
      <h5 class="card-title">Question 1</h5>
      <p class="card-text">Who would win the Presidential election.</p>
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="uo1" value="0">
        <label class="form-check-label" for="defaultCheck1">
          Bola Tinubi
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="uo2" value="1">
        <label class="form-check-label" for="defaultCheck1">
          Peter Obi
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="uo3" value="2">
        <label class="form-check-label" for="defaultCheck1">
          Atiku
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="uo4" value="3">
        <label class="form-check-label" for="defaultCheck1">
          Kwankwaso
        </label>
      </div>
    </div>
   <div>
    <button type="button" class="btn btn-secondary">Previous</button>
    <button type="button" class="btn btn-primary">Next</button>
   </div>
  </div>
  <br><br><br><br>
@endsection