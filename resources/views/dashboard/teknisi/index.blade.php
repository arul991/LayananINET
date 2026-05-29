@extends('layouts.app')

@section('content')
<div class="page-wrapper">
  <div class="container-xl">
    <!-- Page title -->
    <div class="page-header d-print-none">
      <div class="row align-items-center">
        <div class="col">
          <h2 class="page-title">
            Teknisi Dashboard
          </h2>
        </div>
      </div>
    </div>
  </div>
  <div class="page-body">
    <div class="container-xl">
      <div class="row row-deck row-cards">
        <div class="col-sm-6 col-lg-3">
          <div class="card">
            <div class="card-body">
              <div class="text-truncate">
                <h3 class="card-title">
                  <a href="javascript:void(0)">Today's Tasks</a>
                </h3>
              </div>
              <div class="d-flex align-items-baseline">
                <div class="h1 mb-0">5</div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-lg-3">
          <div class="card">
            <div class="card-body">
              <div class="text-truncate">
                <h3 class="card-title">
                  <a href="javascript:void(0)">Completed This Month</a>
                </h3>
              </div>
              <div class="d-flex align-items-baseline">
                <div class="h1 mb-0">42</div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-lg-3">
          <div class="card">
            <div class="card-body">
              <div class="text-truncate">
                <h3 class="card-title">
                  <a href="javascript:void(0)">Pending Work</a>
                </h3>
              </div>
              <div class="d-flex align-items-baseline">
                <div class="h1 mb-0">12</div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-lg-3">
          <div class="card">
            <div class="card-body">
              <div class="text-truncate">
                <h3 class="card-title">
                  <a href="javascript:void(0)">Rating</a>
                </h3>
              </div>
              <div class="d-flex align-items-baseline">
                <div class="h1 mb-0">4.8★</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection