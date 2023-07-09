@if (Session::has('success'))
    <div class="col-lg">
        <div class="alert alert-success alert-dismissable" style="padding: 1em;">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×
            </button>
            <strong>Success!</strong>
            {{ Session::get('success') }}
        </div>
    </div>
@endif
@if (Session::has('errors'))
    <div class="col-lg">
        @php
            $errors = Session::get('errors');
        @endphp
        @if (is_array($errors))
            <div class="alert alert-danger alert-dismissable" style="padding: 1em;">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×
                </button>
                @foreach ($errors as $item)
                    <strong>Error!</strong>
                    {{ $item }}
                @endforeach
            </div>
        @else
            <div class="alert alert-danger alert-dismissable" style="padding: 1em;">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×
                </button>
                    <strong>Error!</strong>
                    {{ $errors }}
            </div>
        @endif
    </div>
@endif

@php
    session()->forget('success');
    session()->forget('errors');
@endphp
