@extends('layouts.app')

@section('content')

    <table class="table">
        <thead>
        <tr>
            <th scope="col">User</th>
            <th scope="col">No. Pages</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>

        @foreach($users as $user)
            <tr>
                <td>{{ $user->name }}</td>
                <td>{{ count($user->pages) }}</td>
                <td><a href="{{ route('user.show', ['user' => $user->id]) }}"><i class="fas fa-search"></i></a></td>
            </tr>
        @endforeach
        </tbody>
    </table>

@endsection
