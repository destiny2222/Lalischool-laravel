@extends('layouts.master')
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light"></span>Blog Tags</h4>
    <div class="row">
      <div class="col-xl">
          <h6 class="pb-1 mb-4 text-muted">Tag</h6>
      </div>
      <div class="col-xl text-end">
          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#smallModal">
              <span class="tf-icons bx bx-add-to-queue"></span>&nbsp; Add New Tag
          </button>
      </div>
  </div>
    <!-- Basic Bootstrap Table -->
    <div class="card">
      {{-- <h5 class="card-header">Tags</h5> --}}
      <div class="">
        <table class="table">
          <thead>
            <tr>
              <th>id</th>
              <th>Name</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody class="table-border-bottom-0">
            @foreach ($tag as $tagger)
            <tr>
              <td><strong>{{ $loop->index + 1 }}</strong></td>
              <td><strong>{{  $tagger->name }}</strong></td>
              <td>
                <div class="dropdown">
                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                        data-bs-toggle="dropdown">
                        <i class="bx bx-dots-vertical-rounded"></i>
                    </button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="javascript:void(0);"  data-bs-toggle="modal"
                        data-bs-target="#small{{ $tagger->id }}"><i
                                class="bx bx-edit-alt me-1"></i> Edit</a>
                        <a class="dropdown-item" href="javascript:void(0);">
                          <form action="{{ route('Tags.destroy', $tagger->id) }}" method="POST">
                            @method('delete')
                            @csrf
                            <button class="px-2 btn"><i class=" bx bxs-trash me-1"></i>Delete</button>
                          </form>
                        </a>
                    </div>
                </div>
            </td>
            </tr>
            @include('admin.Tag.edit')
            @endforeach
            
            
          </tbody>
        </table>
      </div>
    </div>
    <!--/ Basic Bootstrap Table -->
<!-- / Content -->

@include('admin.Tag.create')

@endsection


          