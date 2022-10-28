@extends('layouts.master')
@section('content')

    <div class="container-xxl flex-grow-1 container-p-y">
        <!-- Grid Card -->
        <div class="row">
            <div class="col-xl">
                <h6 class="pb-1 mb-4 text-muted">Event</h6>
            </div>
            <div class="col-xl text-end">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalCenter">
                    <span class="tf-icons bx bx-add-to-queue"></span>&nbsp; Add New Class
                </button>
            </div>
        </div>


        <div class="row">

             <!-- Hoverable Table rows -->
             <div class="card">
                <h5 class="card-header">Class Section</h5>
                <div class="">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Image</th>
                                <th>Name</th>
                                <th>Age</th>
                                <th>Body</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                          @if (count($class) != 0)
                            @foreach ($class as $room)
                            <tr>
                                <td>{{ $loop->index + 1 }}</td>
                                <td><img class="" width="40" height="50" src="{{ asset('storage/class_image/'.$room->image) }}" alt="Card image cap" /></td>
                                <td>{{ $room->name }}</td>
                                <td>{{ $room->age }}</td>
                                <td> {{ $room->body }}</td>
                                <td>
                                    <div class="dropdown">
                                        <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                            data-bs-toggle="dropdown">
                                            <i class="bx bx-dots-vertical-rounded"></i>
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="javascript:void(0);"  data-bs-toggle="modal"
                                            data-bs-target="#modalTop{{ $room->id }}"><i
                                                    class="bx bx-edit-alt me-1"></i> Edit</a>
                                            <a class="dropdown-item" href="javascript:void(0);">
                                              <form action="{{ route('rooms.destroy', $room->id) }}" method="POST">
                                                @method('delete')
                                                @csrf
                                                <button class="px-2 btn"><i class=" bx bxs-trash me-1"></i>Delete</button>
                                              </form>
                                            </a>
                                        </div>
                                    </div>
                                </td>
                            </tr>

                            @include('admin.class.edit')
                            @endforeach
                          @endif  
                            
                        </tbody>
                    </table>
                </div>
            </div>
            <!--/ Hoverable Table rows -->
            <!-- Hoverable Table rows -->
            {{-- <div class="card">
                <h5 class="card-header">Class Section</h5>
                <div class="table-responsive text-nowrap">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Image</th>
                                <th>Name</th>
                                <th>Age</th>
                                <th>Available Seats</th>
                                <th>Body</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                          @if (count($class) != 0)
                            @foreach ($class as $room)
                            <tr>
                                <td>{{ $loop->index + 1 }}</td>
                                <td><img class="" width="40" height="50" src="{{ asset('storage/blogger/'.$room->image) }}" alt="Card image cap" /></td>
                                <td>{{ $room->name }}</td>
                                <td>{{ $room->age }}</td>
                                <td>{{ $room->Available_Seats }}</td>
                                <td> {{ $room->body }}</td>
                                <td>
                                    <div class="dropdown">
                                        <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                            data-bs-toggle="dropdown">
                                            <i class="bx bx-dots-vertical-rounded"></i>
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="javascript:void(0);"  data-bs-toggle="modal"
                                            data-bs-target="#modalTop{{ $room->id }}"><i
                                                    class="bx bx-edit-alt me-1"></i> Edit</a>
                                            <a class="dropdown-item" href="javascript:void(0);">
                                              <form action="{{ route('rooms.destroy', $room->id) }}" method="POST">
                                                @method('delete')
                                                @csrf
                                                <button class="px-2 btn"><i class=" bx bxs-trash me-1"></i>Delete</button>
                                              </form>
                                            </a>
                                        </div>
                                    </div>
                                </td>
                            </tr>

                            @include('admin.class.edit')
                           
                            @endforeach
                          @endif  
                            
                        </tbody>
                    </table>
                </div>
            </div> --}}
            <!--/ Hoverable Table rows -->

        </div>
        
        <div class="row" aria-label="Page navigation">
            <div class="pagination justify-content-center">
                {{ $class->links() }}
            </div>
        </div>
    </div>

    @include('admin.class.create')

@endsection
<script>
    ClassicEditor
        .create(document.getElementById('summary-body'))
        .catch(error => {
            console.error(error);
        });
</script>
