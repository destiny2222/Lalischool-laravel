@extends('layouts.master')
@section('content')

    <div class="container-xxl flex-grow-1 container-p-y">
        <!-- Grid Card -->
        <div class="row">
            <div class="col-xl">
                <h6 class="pb-1 mb-4 text-muted">Blog</h6>
            </div>
            <div class="col-xl text-end">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalCenter">
                    <span class="tf-icons bx bx-add-to-queue"></span>&nbsp; Add New Blog
                </button>
            </div>
        </div>


        <div class="row">

            <!-- Hoverable Table rows -->
            <div class="card">
                <h5 class="card-header">Blog Section</h5>
                <div class="table-responsive text-nowrap">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Image</th>
                                <th>Title</th>
                                <th>Author</th>
                                <th>Tag</th>
                                <th>Body</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                          @if (count($blog) != 0)
                            @foreach ($blog as $blogs)
                            <tr>
                                <td>{{ $loop->index + 1 }}</td>
                                <td><img class="" width="40" height="50" src="{{ asset('storage/blogger/'.$blogs->image) }}" alt="Card image cap" /></td>
                                <td>{{ $blogs->title }}</td>
                                <td>{{ $blogs->author }}</td>
                                <td>
                                    @forelse ($blogs->tag as $tags)
                                      <p></p>
                                      <span class="badge bg-label-primary me-1">{{ $tags->name }}</span>
                                    @empty
                                      <span>No Tag</span>
                                    @endforelse
                                </td>
                                <td> {{ $blogs->body }}</td>
                                <td>
                                    <div class="dropdown">
                                        <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                            data-bs-toggle="dropdown">
                                            <i class="bx bx-dots-vertical-rounded"></i>
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="javascript:void(0);"  data-bs-toggle="modal"
                                            data-bs-target="#modalTop{{ $blogs->id }}"><i
                                                    class="bx bx-edit-alt me-1"></i> Edit</a>
                                            <a class="dropdown-item" href="javascript:void(0);">
                                              <form action="{{ route('posts.destroy', $blogs->id) }}" method="POST">
                                                @method('delete')
                                                @csrf
                                                <button class="px-2 btn"><i class=" bx bxs-trash me-1"></i>Delete</button>
                                              </form>
                                            </a>
                                        </div>
                                    </div>
                                </td>
                            </tr>

                            @include('admin.post.blog-edit')
                            @endforeach
                          @endif  
                            
                        </tbody>
                    </table>
                </div>
            </div>
            <!--/ Hoverable Table rows -->

        </div>
        
        <div class="row" aria-label="Page navigation">
            <div class="pagination justify-content-center">
                {{ $blog->links() }}
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="modalCenter" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalCenterTitle">Add Blog</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    @if(count($tag) != 0)
                    <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label" for="basic-default-fullname">{{ __('title') }}</label>
                            <input type="text" name="title"
                                class="form-control @error('title') is-invalid @enderror" id="basic-default-fullname"
                                placeholder="Title" />
                            @error('title')
                                <span class="invalid-feedback" role="alert">
                                    {{ $message }}
                                </span>
                            @enderror

                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="basic-default-company">{{ __('author') }}</label>
                            <input type="text" name="author"
                                class="form-control  @error('author') is-invalid @enderror" id="basic-default-company"
                                placeholder="ACME Inc." />
                            @error('author')
                                <span class="invalid-feedback" role="alert">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <div>
                                <label for="defaultSelect" class="form-label">{{ __('Tag') }}</label>
                                <select id="defaultSelect" name="tag[]" class="form-select ">
                                    @foreach ($tag as $item)
                                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                                    @endforeach

                                </select>
                            </div>
                        </div>
                        <div class="mb-3">
                            <div class="input-group">
                                <input type="file" name="image"
                                    class="form-control  @error('image') is-invalid @enderror" id="inputGroupFile01" />
                                @error('image')
                                    <span class="invalid-feedback" role="alert">{{ $message }}</span>
                                @enderror

                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="basic-default-message">{{ __(' Message ') }}</label>
                            <textarea id="basic-default-message" id="summary-body" name="body" class="form-control"
                                placeholder="Hi, Do you have a moment to talk Joe?"></textarea>
                        </div>
                        <div class="text-end">
                            <button type="submit" class="btn btn-primary ">{{ __(' Save ') }}</button>
                        </div>

                    </form>
                    @else
                    <div class="card">
                        <div class="card-header">
                            <a href="{{ route('Tags.index') }}" class="btn btn-primary">
                                Create New Tag
                            </a>
                        </div>
                        <div class="card-body">
                            You have not created any tag yet. PLease create one now
                        </div>
                    </div>
                @endif
                </div>
            </div>
        </div>
    </div>

@endsection
<script>
    ClassicEditor
        .create(document.getElementById('summary-body'))
        .catch(error => {
            console.error(error);
        });
</script>
