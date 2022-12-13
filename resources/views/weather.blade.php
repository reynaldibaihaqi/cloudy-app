@extends('layouts.main')

@section('content')
<div class="weather container-fluid">
  <div class="row mb-3">
    <div class="col-md-6">
      <h1>Weather Forecast</h1>
    </div>
    <div class="col d-grid d-md-flex justify-content-md-end">
      <div class="dropdown">
        <button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
          Bandung
        </button>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="#">Action</a></li>
          <li><a class="dropdown-item" href="#">Another action</a></li>
          <li><a class="dropdown-item" href="#">Something else here</a></li>
        </ul>
      </div>
    </div>
  </div>
  <div class="row text-center">
    <div class="col-md-3"> 
      <div class="card" style="height: 24rem;">
        <img src="{{ asset('/assets/images/cloud-1.png') }}" class="mx-auto d-block mt-4" alt="Sunny" width="140"/>
        <div class="card-body mt-2">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
      </div>
    </div>
    <div class="col-md-3"> 
      <div class="card" style="height: 24rem;">
        <img src="{{ asset('/assets/images/cloud-2.png') }}" class="mx-auto d-block mt-4" alt="Sunny" width="155"/>
        <div class="card-body mt-4">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
      </div>
    </div>
    <div class="col-md-3"> 
      <div class="card" style="height: 24rem;">
        <img src="{{ asset('/assets/images/cloud-3.png') }}" class="mx-auto d-block mt-4" alt="Sunny" width="150"/>
        <div class="card-body mt-4">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
      </div>
    </div>
    <div class="col-md-3"> 
      <div class="card bg-warning" style="height: 24rem;">
        <img src="{{ asset('/assets/images/cloud-4.png') }}" class="rounded mx-auto d-block mt-4" alt="Sunny" width="180"/>
        <div class="card-body mt-4">
          <h5 class="card-title">Card title</h5>
          <p class="card-text text-light">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
      </div>
    </div>
  </div>
  <div class="row justify-content-center text-center">
    <div class="col-md-8"> 
      <div class="card">
        <img src="..." class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Sunrise & Sunset</p>
        </div>
      </div>
    </div>
  </div>
</div>
  
@endsection