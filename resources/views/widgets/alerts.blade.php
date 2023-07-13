
@if (Session::has('success'))
    <div class="col-lg-12">
        <div class="alert alert-success alert-dismissable p-2 border-round" style="border-radius:30px;">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×
            </button>
            <strong>Success!</strong>
            {{ Session::get('success') }}
        </div>
    </div>
@endif
@if ($errors->any())
    <div class="col-lg-12">
        <div class="alert alert-danger alert-dismissable p-2 border-round" style="border-radius:30px;">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×
            </button>
            @foreach ($errors->all() as $item)
                <strong>Error!</strong>
                {{ $item }}
            @endforeach
        </div>
    </div>
@endif
