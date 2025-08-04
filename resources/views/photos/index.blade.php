@extends('layouts.app')

@section('content')
  <div class="page-wrapper">
    @if (session('status'))
      <div class="alert alert-success" role="alert">
        {{ session('status') }}
      </div>
    @endif

    <!-- PAGE HEADER -->
    <div class="page-header d-print-none" aria-label="Page header">
      <div class="container-xl">
        <div class="row g-2 align-items-center">
          <div class="col">
            <h2 class="page-title">My Photos</h2>
            <div class="text-secondary">Your recently uploaded photos</div>
          </div>
          <div class="d-print-none col-auto ms-auto">
            <div class="d-flex">
              {{-- <div class="me-2">
                <div class="input-icon">
                  <input type="text" value="" class="form-control" placeholder="Search">
                  <span class="input-icon-addon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-1">
                      <path d="M10 10m-7 0a7 7 0 1 0 14 0a7 7 0 1 0 -14 0"></path>
                      <path d="M21 21l-6 -6"></path>
                    </svg>
                  </span>
                </div>
              </div>
              <div class="me-2">
                <select class="form-select">
                  <option>All category</option>
                  <option value="1">Nature</option>
                </select>
              </div> --}}
              <a href="#" class="btn btn-primary">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-upload">
                  <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                  <path d="M4 17v2a2 2 0 0 0 2 2h12a2 2 0 0 0 2 -2v-2" />
                  <path d="M7 9l5 -5l5 5" />
                  <path d="M12 4l0 12" />
                </svg>
                Upload photo
              </a>
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
          <div class="col-md-6">
            <div class="card">
              <div class="row g-0">
                <div class="col-4">
                  <img src="https://images.unsplash.com/photo-1560131323-29d50e8d1b22?q=80&w=1674&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="" class="rounded-start" style="height: 100%; object-fit: cover;">
                </div>
                <div class="col">
                  <div class="card-body">
                    <div class="d-flex justify-content-between align-items-start">
                      <div class="mb-2">
                        <span class="badge bg-primary text-primary-fg">Nature</span>
                        <span class="badge bg-green text-green-fg" data-bs-toggle="tooltip" data-bs-placement="top" title="Published">
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-check">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M5 12l5 5l10 -10" />
                          </svg>
                        </span>

                        {{-- <!-- STATUS BADGE -->
                        <span class="badge bg-red text-red-fg" data-bs-toggle="tooltip" data-bs-placement="top" title="Unpublished">
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-x">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M18 6l-12 12" />
                            <path d="M6 6l12 12" />
                          </svg>
                        </span>
                        <!-- END STATUS BADGE --> --}}

                      </div>
                      {{-- <div class="avatar-list avatar-list-stacked avatar-list-xs pe-2">
                        <span class="avatar avatar-1" style="background-image: url(https://api.dicebear.com/9.x/thumbs/svg?seed=user1)"> </span>
                        <span class="avatar avatar-1" style="background-image: url(https://api.dicebear.com/9.x/thumbs/svg?seed=user2)"> </span>
                        <span class="avatar avatar-1" style="background-image: url(https://api.dicebear.com/9.x/thumbs/svg?seed=user3)"> </span>
                        <span class="avatar avatar-1" style="background-image: url(https://api.dicebear.com/9.x/thumbs/svg?seed=user4)"> </span>
                        <span class="avatar avatar-1" style="background-image: url(https://api.dicebear.com/9.x/thumbs/svg?seed=user5)"> </span>
                      </div> --}}
                    </div>
                    <h3><a href="#">Aerial terrain view from space</a></h3>
                    <div class="row">
                      <div class="col-md">
                        <div class="list text-secondary d-block mb-0">
                          <div class="fs-5 list-item pb-1">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor" class="icon icon-tabler icons-tabler-filled icon-tabler-user icon-inline me-1">
                              <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                              <path d="M12 2a5 5 0 1 1 -5 5l.005 -.217a5 5 0 0 1 4.995 -4.783z" />
                              <path d="M14 14a5 5 0 0 1 5 5v1a2 2 0 0 1 -2 2h-10a2 2 0 0 1 -2 -2v-1a5 5 0 0 1 5 -5h4z" />
                            </svg>
                            Joe
                          </div>
                          <div class="fs-5 list-item pb-1">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor" class="icon icon-tabler icons-tabler-filled icon-tabler-clock-hour-4 icon-inline me-1">
                              <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                              <path d="M17 3.34a10 10 0 1 1 -15 8.66l.005 -.324a10 10 0 0 1 14.995 -8.336m-5 2.66a1 1 0 0 0 -1 1v5.026l.009 .105l.02 .107l.04 .129l.048 .102l.046 .078l.042 .06l.069 .08l.088 .083l.083 .062l3 2a1 1 0 1 0 1.11 -1.664l-2.555 -1.704v-4.464a1 1 0 0 0 -.883 -.993z" />
                            </svg>
                            12 Aug 2025
                          </div>
                          <div class="fs-5 list-item pb-1">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor" class="icon icon-tabler icons-tabler-filled icon-tabler-heart icon-inline me-1">
                              <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                              <path d="M6.979 3.074a6 6 0 0 1 4.988 1.425l.037 .033l.034 -.03a6 6 0 0 1 4.733 -1.44l.246 .036a6 6 0 0 1 3.364 10.008l-.18 .185l-.048 .041l-7.45 7.379a1 1 0 0 1 -1.313 .082l-.094 -.082l-7.493 -7.422a6 6 0 0 1 3.176 -10.215z" />
                            </svg>
                            7
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- END IMAGE CARD -->

          <!-- EMPTY CARD -->
          <div class="col-md-12">
            <div class="empty border-dashed">
              <div class="empty-icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor" class="icon icon-tabler icons-tabler-filled icon-tabler-photo">
                  <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                  <path d="M8.813 11.612c.457 -.38 .918 -.38 1.386 .011l.108 .098l4.986 4.986l.094 .083a1 1 0 0 0 1.403 -1.403l-.083 -.094l-1.292 -1.293l.292 -.293l.106 -.095c.457 -.38 .918 -.38 1.386 .011l.108 .098l4.674 4.675a4 4 0 0 1 -3.775 3.599l-.206 .005h-12a4 4 0 0 1 -3.98 -3.603l6.687 -6.69l.106 -.095zm9.187 -9.612a4 4 0 0 1 3.995 3.8l.005 .2v9.585l-3.293 -3.292l-.15 -.137c-1.256 -1.095 -2.85 -1.097 -4.096 -.017l-.154 .14l-.307 .306l-2.293 -2.292l-.15 -.137c-1.256 -1.095 -2.85 -1.097 -4.096 -.017l-.154 .14l-5.307 5.306v-9.585a4 4 0 0 1 3.8 -3.995l.2 -.005h12zm-2.99 5l-.127 .007a1 1 0 0 0 0 1.986l.117 .007l.127 -.007a1 1 0 0 0 0 -1.986l-.117 -.007z" />
                </svg>
              </div>
              <p class="empty-title">Create your first photo</p>
              <p class="empty-subtitle text-secondary">
                This is where your photos will appear. Click below to upload your first one!
              </p>
              <div class="empty-action">
                <a href="#" class="btn btn-primary">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-upload">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M4 17v2a2 2 0 0 0 2 2h12a2 2 0 0 0 2 -2v-2" />
                    <path d="M7 9l5 -5l5 5" />
                    <path d="M12 4l0 12" />
                  </svg>
                  Upload photo
                </a>
              </div>
            </div>
          </div>
          <!-- END EMPTY CARD -->
        </div>

        <!-- PAGINATION -->
        <div class="mt-4">
        </div>
        <!-- END PAGINATION -->
      </div>
    </div>
  </div>
@endsection
