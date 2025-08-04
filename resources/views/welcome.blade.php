@extends('layouts.app')

@section('content')
  <div class="page-wrapper">
    <div class="page-body">
      <div class="container-xl">
        <div class="row row-cards">

          <!-- IMAGE CARD -->
          <div class="col-sm-6 col-lg-3">
            <div class="card card-sm position-relative">
              <span class="badge bg-primary text-primary-fg position-absolute m-3" style="right: 0; top: 0;">Nature</span>
              <a data-fslightbox="gallery" class="link-preview" href="https://images.unsplash.com/photo-1560131323-29d50e8d1b22?q=80&w=1674&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="d-block">
                <img src="https://images.unsplash.com/photo-1560131323-29d50e8d1b22?q=80&w=1674&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="card-img-top"></a>
              <div class="card-body">
                <div class="row mb-3">
                  <div class="col-auto">
                    <h3 class="m-0">Aerial terrain view from space</h3>
                  </div>
                  <div class="col d-flex align-items-center">

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
                  <a href="#" class="text-secondary">
                    {{-- <!-- UNLIKE ICON -->
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-2">
                      <path d="M19.5 12.572l-7.5 7.428l-7.5 -7.428a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572"></path>
                    </svg>
                    <!-- END UNLIKE ICON --> --}}

                    <!-- LIKE ICON -->
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-filled text-red icon-2">
                      <path d="M19.5 12.572l-7.5 7.428l-7.5 -7.428a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572"></path>
                    </svg>
                    <!-- END LIKE ICON -->
                    7
                  </a>
                </div>
              </div>
            </div>
          </div>
          <!-- IMAGE CARD END -->

        </div>

        <!-- PAGINATION -->
        <div class="mt-4">
        </div>
        <!-- END PAGINATION -->
      </div>
    </div>
  </div>
@endsection
