@extends('layouts.app')

@section('content')
  <div class="page-wrapper">

    <!-- PAGE HEADER -->
    <div class="page-header d-print-none" aria-label="Page header">
      <div class="container-xl">
        <form method="GET" action="#" class="row g-2 align-items-center">
          <div class="col-md-4">
            <div class="input-icon">
              <input type="text" class="form-control" placeholder="Search" name="name" value="{{ request()->input('name') }}" onkeydown="if (event.keyCode == 13) this.form.submit();">
              <span class="input-icon-addon">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-1">
                  <path d="M10 10m-7 0a7 7 0 1 0 14 0a7 7 0 1 0 -14 0"></path>
                  <path d="M21 21l-6 -6"></path>
                </svg>
              </span>
            </div>
          </div>
          <div class="d-print-none col-auto ms-auto">
            <div class="d-flex">
              <select class="form-select" name="category_id" onchange="this.form.submit();">
                <option value="">All category</option>
              </select>
            </div>
          </div>
      </div>
    </div>
  </div>
  <!-- END PAGE HEADER -->


  <div class="page-body">
    <div class="container-xl">
      <div class="row row-cards">

        <!-- IMAGE CARD -->
        <div class="col-sm-6 col-lg-3">
          <div class="card card-sm position-relative">
            <span class="badge bg-primary text-primary-fg position-absolute m-3" style="right: 0; top: 0;">Nature</span>
            <a data-fslightbox="gallery" class="link-preview" href="https://images.unsplash.com/photo-1560131323-29d50e8d1b22?q=80&w=1674&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="d-block">
              <img src="https://images.unsplash.com/photo-1560131323-29d50e8d1b22?q=80&w=1674&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="card-img-top" style="height: 100%; object-fit: cover; height: 200px;"></a>
            <div class="card-body">
              <div class="row mb-3">
                <div class="col-auto">
                  <h3 class="m-0">Aerial terrain view from space</h3>
                </div>
              </div>
              <div class="d-flex align-items-center justify-content-between">
                <div class="d-flex align-items-center">
                  <span class="avatar avatar-sm me-2 rounded" style="background-image: url(https://api.dicebear.com/9.x/thumbs/svg?seed=Joe)"> </span>
                  <div>
                    <div class="fs-5 fw-medium">Joe</div>
                    <div class="text-secondary fs-5">10 days ago</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- IMAGE CARD END -->

        <!-- EMPTY CARD -->
        <div class="col-12">
          <div class="empty border-dashed">
            <div class="empty-icon">
              <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                <circle cx="12" cy="12" r="9"></circle>
                <line x1="9" y1="10" x2="9.01" y2="10"></line>
                <line x1="15" y1="10" x2="15.01" y2="10"></line>
                <path d="M9.5 15.25a3.5 3.5 0 0 1 5 0"></path>
              </svg>
            </div>
            <p class="empty-title">No photo found.</p>
            <p class="empty-subtitle text-secondary">
              Try adjusting your search or filter to find what you're looking for.
            </p>
          </div>
        </div>
        <!-- EMPTY CARD END -->

      </div>

      <!-- PAGINATION -->
      <!-- END PAGINATION -->
    </div>
  </div>
  </div>
@endsection
