@extends('layouts.admin')
@section('content')
    @if ($posts->isNotEmpty())
    @foreach ($posts as $post)
        <div class="post-list">
            <a href="{{route('admin.posts.index'), $post->id}}">
                <h5>{{$post->title}}</h5>
                <p>{{$post->short}}</p>
            </a>
        </div>
    @endforeach
    @else
        <div>
            <h2>Not found</h2>
        </div>
    @endif
@endsection