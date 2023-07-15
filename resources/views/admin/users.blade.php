@if (auth()->user()->role === 'admin')
    @extends('layouts.admin')
@else
    @extends('layouts.user')
@endif

@section('title')
    Customers @parent
@endsection

@section('header_styles')
    <style>
        .dropdown {
            list-style: none;
        }
    </style>
@endsection

@section('content')
    <div class="dashboard-content">
        <div class="row mb-4">
            <div class="col-lg-12 col-md-12 col-xs-12">
                <div class="dashboard-list-box with-icons">
                    <div class="dashboard-title">
                        <h4 class="mb-0">Customers</h4>
                    </div>
                    <div class="">
                        <table class="table table-hover">
                            <thead>
                                <th>#</th>
                                <td>Name</td>
                                <td>Email</td>
                                <td>Phone</td>
                                <td>Role</td>
                                <td>Bookings</td>
                                <td>Action</td>
                            </thead>
                            <tbody>
                                @php
                                    $i = 1;
                                @endphp
                                @foreach ($users as $user)
                                    <tr>
                                        <td>{{ $i++ }}</td>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>{{ $user->phone }}</td>
                                        <td>{{ $user->role }}</td>
                                        <td>{{ $user->bookings_count }}</td>
                                        <td><a href="#" class="btn btn-primary btn-sm">Action</a></td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    
                    <div class="pagination-main text-center">
                        <div class="pagination">
                            {{ $users->links() }}
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection

@section('footer_scripts')
@endsection
