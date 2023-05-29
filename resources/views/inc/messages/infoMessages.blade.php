@if(session()->has('message'))
    <div class="alert alert-info alert-dismissible fade show mt-3" role="alert">
        {{ session('message') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif
