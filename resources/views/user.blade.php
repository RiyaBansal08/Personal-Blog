@extends('layouts.app')
@section('content')
    <div class="heading" style="margin-left:0.5rem">
        <h1>List of Blogs</h1>
    </div>


    <div class="area">
        <div class="sidenav">
            <div class="navcontent">
                <a id="bloglist" href="{{ route('index') }}">All Blogs </a>
            </div>
        </div>

        <div class="blog_table ">
            <table class="blogtable">
                <tr>
                    <th>Title</th>
                    <th>Created By</th>
                    <th>Created On</th>


                </tr>


                @foreach ($data as $a)
                    <tr>

                        <td> <a href="{{ route('blog_page', ['id' => $a->id]) }}">{{ $a->title }} </a></td>
                        <td> <a href="{{ route('blog_page', ['id' => $a->id]) }}">{{ $a->created_by }} </a></td>

                        <td> <a href="{{ route('blog_page', ['id' => $a->id]) }}">{{ $a->created_at }}</a></td>
                    </tr>
                @endforeach

            </table>
        </div>
    </div>
@endsection
