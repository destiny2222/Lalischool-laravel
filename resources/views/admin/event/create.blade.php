    <!-- Modal -->
    <div class="modal fade" id="modalCenter" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalCenterTitle">Add Event</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('programs.store') }}" method="POST" enctype="multipart/form-data">
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
                            <label class="form-label" for="basic-default-company">{{ __('Event Date ') }}</label>
                            <input type="date" name="event_data"
                                class="form-control  @error('event_data') is-invalid @enderror" id="basic-default-company"
                                placeholder="" />
                            @error('event_data')
                                <span class="invalid-feedback" role="alert">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="basic-default-company">{{ __('Event Time') }}</label>
                            <input type="text" name="event_time"
                                class="form-control  @error('event_time') is-invalid @enderror" id="basic-default-company"
                                placeholder="" />
                            @error('event_time')
                                <span class="invalid-feedback" role="alert">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="basic-default-company">{{ __('Location Event') }}</label>
                            <input type="text" name="location"
                                class="form-control  @error('location') is-invalid @enderror" id="basic-default-company"
                                placeholder="" />
                            @error('location')
                                <span class="invalid-feedback" role="alert">{{ $message }}</span>
                            @enderror
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
                </div>
            </div>
        </div>
    </div>