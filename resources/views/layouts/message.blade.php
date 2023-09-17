@if($errors->any())
<div class="col-md-12">
        @foreach($errors->all() as $error)
            <div class="alert mx-4 alert-message alert-danger alert-dismissible fade show my-1" role="alert">
                {{ $error }}
                <button type="button" class="close btn btn-sm fs-5 text-danger" data-dismiss="alert" aria-label="Close">
                    x
                </button>
            </div>
        @endforeach
    </div>
@endif
@if (session('success'))
<div class="alert mx-4 alert-message alert-success alert-dismissible fade show my-1" role="alert">
    {{ session('success') }}
    <button type="button" class="close btn btn-sm fs-5 text-success" data-dismiss="alert" aria-label="Close">
        x
    </button>
</div>
@endif
@if (session('error'))
<div class="alert mx-4 alert-message alert-danger alert-dismissible fade show my-1" role="alert">
    {{ session('error') }}
    <button type="button" class="close btn btn-sm fs-5 text-danger" data-dismiss="alert" aria-label="Close">
        x
    </button>
</div>
@endif