@if (session()->has('suceess'))
<div class="alert alert-success alert-dismissible" role="alert">
  <strong>{{  session('success') }}!</strong>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
@endif




@if(session()->has('error'))
    <div class="alert alert-danger alert-dismissible" role="alert">
      <strong>{{  session('error') }}!</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

