@extends('layouts.app')

@section('content')

    <div class="container">
        <h3 class="font-weight-bold">Users</h3>

        @if($users->count())
            <div class="table-responsive">
                <table class="table">
                    <thead class="th-light">
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone Number</th>
                            <th>Created At</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($users as $user)
                            <tr>
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->phone_number }}</td>
                                <td>{{ $user->created_at->diffForHumans() }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @else
            <div class="text-muted">No User available</div>
        @endif

    </div>
@endsection