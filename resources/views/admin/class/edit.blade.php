
<div class="modal fade" id="modalTop{{ $room->id }}" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel2">{{ __('Edit') }}</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('rooms.update', $room->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="row">
                        <div class="col-12 mb-3">
                            <label class="form-label" for="basic-default-fullname">{{ __('Name') }}</label>
                            <input type="text" value="{{ $room->name }}" name="name" class="form-control @error('name') is-invalid @enderror" id="basic-default-fullname" placeholder="Title" />
                            @error('name')
                              <span class="invalid-feedback" role="alert">
                                 {{ $message }}
                              </span>
                            @enderror
                        </div>
                        <div class="col-12 mb-3">
                            <label class="form-label" for="basic-default-company">{{  __('Age') }}</label>
                            <input type="text" value="{{ $room->age }}"  name="age" class="form-control  @error('age') is-invalid @enderror" id="basic-default-company" placeholder="" />
                            @error('age')
                            <span class="invalid-feedback" role="alert">{{  $message  }}</span>
                            @enderror
                        </div>
                        {{-- <div class="col-12 mb-3">
                            <label class="form-label" for="basic-default-company">{{  __('Available Seats') }}</label>
                            <input type="text" value="{{ $room->Available_Seats }}"  name="Available_Seats" class="form-control  @error('Available_Seats') is-invalid @enderror" id="basic-default-company" placeholder="" />
                            @error('Available_Seats')
                            <span class="invalid-feedback" role="alert">{{  $message  }}</span>
                            @enderror
                        </div> --}}
                        <div class="col-12 mb-3">
                            <div class="input-group">
                                <input type="file" value="{{ $room->image }}" name="image" class="form-control  @error('image') is-invalid @enderror"" id="inputGroupFile01" />
                                @error('image')
                                    <span class="invalid-feedback" role="alert">{{  $message  }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-12 mb-3">
                            <label class="form-label" for="basic-default-message">{{ __(' Message ') }}</label>
                            <textarea id="basic-default-message" id="body" name="body" class="form-control">{{ $room->body }}</textarea>
                        </div>
                    </div>
                    <div class="row g-2">
                        <div class="col mb-0 text-center">
                            <input type="submit" class="btn btn-primary btn-sm" value="Save Change">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@include('layouts.script')