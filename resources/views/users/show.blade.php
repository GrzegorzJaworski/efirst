@extends('layouts.app')

@section('content')
    <a href="{{ url()->previous() }}" class="btn btn-success mt-3">Back</a>
    <h1 class="mt-3">{{ $user->name }}</h1>
    <p>{{ $user->email }}</p>

    <div class="row">
        @forelse ($user->pages as $page)
        <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
                <div class="card-header">
                    {{ $page->title }}
                </div>
                <div class="card-body">
                    <p>
                        {{ $page->body }}
                    </p>
                </div>
                <div class="card-footer">
                    <ul class="list-inline">
                        @forelse ($page->tags as $tag)
                            <li class="list-inline-item">#{{ $tag->name }}</li>
                        @empty
                            <p>No tags</p>
                        @endforelse
                    </ul>
                </div>
            </div>
        </div>
        @empty
            <p>No pages</p>
        @endforelse
    </div>
@endsection