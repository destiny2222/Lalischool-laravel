<!-- Small Modal -->
<div class="modal fade" id="small{{ $gall->id }}" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
        <div class="modal-content ">
            
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel2">Edit Tag</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('gallery.update', $gall->id ) }}" method="POST">
                    @csrf
                    @method('put')
                    <div class="row">
                        <div class="col-12 mb-3">
                            <label for="nameSmall" class="form-label">Name</label>
                            <input type="text" value="{{ $gall->name }}" id="nameSmall" name="name" class="form-control  @error('name') is-invalid @enderror" placeholder="Enter Name" />
                            @error('name')
                                <span class="invalid-feedback" role="alert">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-12 mb-3">
                            <div class="input-group">
                                <input type="file" name="image"
                                    class="form-control  @error('image') is-invalid @enderror" id="inputGroupFile01" />
                                @error('image')
                                    <span class="invalid-feedback" role="alert">{{ $message }}</span>
                                @enderror

                            </div>
                        </div>
                    </div>
                    <div class="row g-2 text-center">
                        <div class="col mb-0">
                            <input type="submit" class="btn btn-primary" id="emailSmall" value="Update" />
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
