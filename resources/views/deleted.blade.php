@extends('layouts.app')
@section('content')
    <div class="heading">
        <h1>Admin Dashboard</h1>
    </div>
    <div class="sidenav">
        <div class="navcontent">
            <a id="bloglist" href="{{ route('index1') }}">All Blogs </a>
            <a id="bloglist" href="{{ route('del_blog_page') }}">Deleted Blogs </a>
            <a id="bloglist" href="{{ route('add') }}">Add New Blog </a>


        </div>
    </div>
    <div class="blog_table " style="margin-left: 15rem; margin-right:10rem">
        <table class="blogtable">
            <tr>
                <th>Title</th>
                <th>Content</th>
                <th>Created By</th>
            </tr>
            @foreach ($data as $item)
                <tr>


                    <td style="font-size: 15px"> {{ $item->title }} </td>
                    <td class="textclip" style="font-size: 12px">{{ $item->content }} </td>
                    <td style="font-size: 12px">{{ $item->created_by }} </td>
                    {{-- <td> {{ $item->created_on }}</td> --}}
                </tr>
            @endforeach

        </table>
    </div>
@endsection
