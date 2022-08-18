@extends('layouts.app')
@section('content')
    <div class="heading">
        <h1>Selected Blog</h1>
    </div>

    <div class="area">
        <div class="sidenav">
            <div class="navcontent">
                <a id="bloglist" href="{{ route('index1') }}">All Blogs </a>
                <a id="bloglist" href="{{ route('del_blog_page') }}">Deleted Blogs </a>
                <a id="bloglist" href="{{ route('add') }}">Add New Blog </a>
            </div>
        </div>
        <form action="{{ route('update', ['id' => $blog->id]) }}" method='POST'>
            @csrf
            {{-- @method('PUT') --}}
            <div class="header">
                <h2>Title</h2>
                <input type="text" name="title"value="{{ $blog->title }}">
                <h2>Content</h2>
                <textarea name="content" id="" cols="140" rows="10">{{ $blog->content }}</textarea>
                <h2>Created By</h2>
                <input type="text" name="created_by" value="{{ $blog->created_by }}"><br><br>
                <input type="submit" value="Save">

            </div>


        </form>




    </div>



    </div>

    </div>
@endsection
