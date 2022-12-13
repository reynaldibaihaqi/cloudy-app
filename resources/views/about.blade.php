@extends('layouts.main')

@section('content')
<div class="about container-fluid">
    <div class="row text-center mb-4">
      <div class="col">
            <h1 class="judul-about">About</h1>
      </div>
    </div>
    <div class="row text-center justify-content-center">
      <div class="col-md-5">
        <img src="{{ asset('/assets/images/rey-dev.png') }}" alt="homepage" class="mb-3" width="200" />
        <h3>Muhammad Reynaldi Baihaqi</h3>
        <p>Frontend Developer</p>
      </div>
      <div class="col-md-5">
        <img src="{{ asset('/assets/images/rifkaa-dev.png') }}" alt="homepage" class="mb-3" width="200" />
        <h3>Rifka Alia Assyifa</h3>
        <p>Backend Developer</p>
      </div>
    </div>
  </div>
  
@endsection