@extends('layouts.app')
@section('content')
    <div class="heading">
        <h1>Selected Blog</h1>
    </div>

    <div class="area">
        <div class="sidenav">
            <div class="navcontent">
                <a id="bloglist" href="{{ route('index1') }}">All Blogs </a>
            </div>
        </div>
        <form action="{{ route('create') }}" method='POST'>
            @csrf
            <div class="header">
                <h2>Title</h2>
                <input type="text" name="title"value="" placeholder="Title" required>
                <h2>Content</h2>
                <textarea name="content" cols="130" rows="10" placeholder="Content of your blog"required></textarea>
                <h2>Created By</h2>
                <input type="text" name="created_by" value="" placeholder="Your Name "required><br><br>
                <input type="submit" value="Save">

            </div>


        </form>




    </div>



    </div>

    </div>
@endsection
