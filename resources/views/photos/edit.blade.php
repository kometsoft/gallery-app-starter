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
        <div class="row g-3 align-items-center">
          <div class="col-auto">
            <a href="#" class="btn btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Back">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-chevron-left">
                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                <path d="M15 6l-6 6l6 6" />
              </svg>
            </a>
          </div>
          <div class="col">
            {{-- <h2 class="page-title">Upload photo</h2> --}}
            <h2 class="page-title">Editing photo "Aerial terrain view from space"</h2>
          </div>
          <div class="d-print-none col-auto ms-auto">
            <div class="d-flex">
              <button type="submit" form="form-photo-delete" class="btn btn-danger me-2" onclick="return confirm('Are you sure you want to delete this photo? This action cannot be undone.');">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor" class="icon icon-tabler icons-tabler-filled icon-tabler-trash">
                  <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                  <path d="M20 6a1 1 0 0 1 .117 1.993l-.117 .007h-.081l-.919 11a3 3 0 0 1 -2.824 2.995l-.176 .005h-8c-1.598 0 -2.904 -1.249 -2.992 -2.75l-.005 -.167l-.923 -11.083h-.08a1 1 0 0 1 -.117 -1.993l.117 -.007h16z" />
                  <path d="M14 2a2 2 0 0 1 2 2a1 1 0 0 1 -1.993 .117l-.007 -.117h-4l-.007 .117a1 1 0 0 1 -1.993 -.117a2 2 0 0 1 1.85 -1.995l.15 -.005h4z" />
                </svg>
                Delete
              </button>
              <form id="form-photo-delete" action="#" method="post" class="d-none">
              </form>
              <button type="submit" form="form-photo-update" class="btn btn-primary">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-device-floppy">
                  <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                  <path d="M6 4h10l4 4v10a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2" />
                  <path d="M12 14m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                  <path d="M14 4l0 4l-6 0l0 -4" />
                </svg>
                Save
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- END PAGE HEADER -->

    <div class="page-body">
      <div class="container-xl">
        <div class="row row-cards">
          <div class="col-12">
            <form id="form-photo-update" action="#" method="post" class="card card-md">
              <div class="card-body">
                <div class="row justify-content-center">
                  <div class="col-md-8">
                    <div class="row mb-3">
                      <label class="col-3 col-form-label"></label>
                      <div class="col">
                        <span class="avatar avatar-xl" style="background-image: url(https://images.unsplash.com/photo-1560131323-29d50e8d1b22?q=80&w=1674&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D)"> </span>
                      </div>
                    </div>
                    <div class="row mb-3">
                      <label class="col-3 col-form-label required">Photo</label>
                      <div class="col">
                        <input type="file" class="form-control">
                      </div>
                    </div>
                    <div class="row mb-3">
                      <label class="col-3 col-form-label required">Name</label>
                      <div class="col">
                        <input type="name" class="form-control" placeholder="A cute cat at a field">
                      </div>
                    </div>
                    <div class="row mb-3">
                      <label class="col-3 col-form-label required">Category</label>
                      <div class="col">
                        <select class="form-select">
                          <option>Nature</option>
                          <option>Animals</option>
                          <option>Cities</option>
                          <option>Food</option>
                          <option>Portraits</option>
                          <option>Travel</option>
                          <option>Abstract</option>
                          <option>Sports</option>
                          <option>Tech</option>
                          <option>Events</option>
                        </select>
                      </div>
                    </div>
                    <div class="row">
                      <label class="col-3 col-form-label required">Publish?</label>
                      <div class="col">
                        <label class="form-check form-switch form-switch-lg pt-2">
                          <input class="form-check-input" type="checkbox">
                          <span class="form-check-label form-check-label-on">Yes</span>
                          <span class="form-check-label form-check-label-off">No</span>
                        </label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
