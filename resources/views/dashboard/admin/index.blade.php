@extends('layouts.app')

@section('content')
<div class="page-wrapper">
  <div class="container-xl">
    <!-- Page title -->
    <div class="page-header d-print-none">
      <div class="row align-items-center">
        <div class="col">
          <h2 class="page-title">
            Admin Dashboard
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
                  <a href="javascript:void(0)">Total Customers</a>
                </h3>
              </div>
              <div class="d-flex align-items-baseline">
                <div class="h1 mb-0">1,234</div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-lg-3">
          <div class="card">
            <div class="card-body">
              <div class="text-truncate">
                <h3 class="card-title">
                  <a href="javascript:void(0)">Pending Bookings</a>
                </h3>
              </div>
              <div class="d-flex align-items-baseline">
                <div class="h1 mb-0">45</div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-lg-3">
          <div class="card">
            <div class="card-body">
              <div class="text-truncate">
                <h3 class="card-title">
                  <a href="javascript:void(0)">Unpaid Invoices</a>
                </h3>
              </div>
              <div class="d-flex align-items-baseline">
                <div class="h1 mb-0">Rp 50M</div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-lg-3">
          <div class="card">
            <div class="card-body">
              <div class="text-truncate">
                <h3 class="card-title">
                  <a href="javascript:void(0)">Active Teknisi</a>
                </h3>
              </div>
              <div class="d-flex align-items-baseline">
                <div class="h1 mb-0">23</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection