@extends('layouts.app')
@section('content')
    <div class="heading" style="margin-left:0.5rem">
        <h1>Admin Dashboard</h1>
    </div>
    <div class="sidenav">
        <div class="navcontent">
            <a id="bloglist" href="{{ route('index1') }}">All Blogs </a>
            <a id="bloglist" href="{{ route('del_blog_page') }}">Deleted Blogs </a>
            <a id="bloglist" href="{{ route('add') }}">Add New Blog </a>


        </div>
    </div>
    <div class="blog_table ">
        <table class="blogtable">
            <tr>
                <th>Title</th>
                <th>Created By</th>
                <th>Created On</th>
                <th>Edit Blog</th>
                <th>Delete Blog</th>


            </tr>


            @foreach ($data as $a)
                <tr>

                    <td> <a href="{{ route('blog_page', ['id' => $a->id]) }}">{{ $a->title }} </a></td>
                    <td> <a href="{{ route('blog_page', ['id' => $a->id]) }}">{{ $a->created_by }} </a></td>

                    <td> <a href="{{ route('blog_page', ['id' => $a->id]) }}">{{ $a->created_at }}</a></td>
                    <td><button><a href="{{ route('edit', ['id' => $a->id]) }}">Edit</a></td>
                    <td><button><a href="{{ route('deleted', ['id' => $a->id]) }}">Delete</a></td>


                </tr>
            @endforeach

        </table>
    </div>
@endsection
