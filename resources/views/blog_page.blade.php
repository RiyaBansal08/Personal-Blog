@extends('layouts.app')
@section('content')
    <div class="heading" style="margin-left:0.5rem">
        <h1>Selected Blog</h1>
    </div>

    <div class="area">
        <div class="sidenav">
            <div class="navcontent">
                @if (Auth::user()->is_admin)
                    <a id="bloglist" href="{{ route('index1') }}">All Blogs </a>
                @else
                    <a id="bloglist" href="{{ route('index') }}">All Blogs </a>
                @endif
            </div>
        </div>
        <div class="header ">
            <h2>{{ $blog->title }}</h2>
            <p>{{ $blog->content }}</p>
            Created by<H4>{{ $blog->created_by }}</H4>
        </div>

    </div>



    </div>

    </div>
@endsection
