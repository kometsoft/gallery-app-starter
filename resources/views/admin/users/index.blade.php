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
            <h2 class="page-title">Users</h2>
            <div class="text-secondary">All users in this application.</div>
          </div>
          {{-- <div class="d-print-none col-auto ms-auto">
            <div class="d-flex">
              <div class="me-0">
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
              <a href="#" class="btn btn-primary">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-2">
                  <path d="M12 5l0 14"></path>
                  <path d="M5 12l14 0"></path>
                </svg>
                Add user
              </a>
            </div>
          </div> --}}
        </div>
      </div>
    </div>
    <!-- END PAGE HEADER -->

    <div class="page-body">
      <div class="container-xl">
        <div class="row row-cards">
          <div class="col-md-12">
            <!-- TABLE -->
            <div class="card overflow-hidden">
              <div class="table-responsive">
                <table class="table-vcenter card-table table-striped table">
                  <thead>
                    <tr>
                      <th class="w-1">ID</th>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Role</th>
                      <th class="w-1"></th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>101</td>
                      <td>
                        <div class="d-flex align-items-center">
                          <span class="avatar avatar-xs me-2" style="background-image: url(https://api.dicebear.com/9.x/thumbs/svg?seed=Joe)"></span>
                          <span>Joe</span>
                        </div>
                      </td>
                      <td class="text-secondary"><a href="mailto:joe@domain.com" class="text-reset">joe@domain.com</a></td>
                      <td class="text-secondary">
                        <span class="status status-green">Admin</span>
                      </td>
                      <td>
                        <a href="#">Edit</a>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
            <!-- END TABLE -->
          </div>

          <!-- EMPTY CARD -->
          <div class="col-md-12">
            <div class="empty border-dashed">
              <div class="empty-icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor" class="icon icon-tabler icons-tabler-filled icon-tabler-user">
                  <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                  <path d="M12 2a5 5 0 1 1 -5 5l.005 -.217a5 5 0 0 1 4.995 -4.783z" />
                  <path d="M14 14a5 5 0 0 1 5 5v1a2 2 0 0 1 -2 2h-10a2 2 0 0 1 -2 -2v-1a5 5 0 0 1 5 -5h4z" />
                </svg>
              </div>
              <p class="empty-title">No records yet</p>
              <p class="empty-subtitle text-secondary">
                It looks like you haven't added anything here. Let's get started!
              </p>
              <div class="empty-action">
                <a href="#" class="btn btn-primary">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-plus">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M12 5l0 14" />
                    <path d="M5 12l14 0" />
                  </svg>
                  Add user
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
