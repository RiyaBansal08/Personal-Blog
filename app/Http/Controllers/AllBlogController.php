<?php

namespace App\Http\Controllers;

use App\all_blogs;
use App\delete_blog;
use Illuminate\Http\Request;

class AllBlogController extends Controller
{
    public function test($id)
    {
        $all_blogs = all_blogs::where('id', $id)->first(); //this will select the row with the given id

        //now save the data in the variables;
        $id = $all_blogs->id;
        $title = $all_blogs->title;
        $content = $all_blogs->content;
        $created_by = $all_blogs->created_by;
        $all_blogs->delete();

        $second = new delete_blog();
        $second->id = $id;
        $second->title = $title;
        $second->content = $content;
        $second->created_by = $created_by;
        $second->save();

        //then return to your view or whatever you want to do
        // return view("deleted", ['data' => $second]);
        // return $this->index1();
        return redirect()->route('index1');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = all_blogs::all();
        return view('user', ["data" => $data]);
    }

    public function index1()
    {
        $data = all_blogs::all();
        return view('admin', ["data" => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     *
     *
     *
     *
     *
     *
     */

    public function create(Request $request)
    {
        all_blogs::create($request->all());

        return redirect()->route('index1')->with('message', 'Your Blog is Added!');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = [];
        $data['blog'] = all_blogs::find($id);
        return view('blog_page', $data);
    }
    public function delshow()
    {
        $data = [];
        $data['data'] = delete_blog::all();
        return view('deleted', $data)->with('message', 'Your Blog is Deleted!');
    }

    public function add()
    {
        return view('add');
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = [];
        $data['blog'] = all_blogs::find($id);
        return view('edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $second = $request->all();

        $data = all_blogs::find($id);
        $data->title = $second['title'];
        $data->content = $second['content'];

        $data->created_by = $second['created_by'];
        $data->save();
        return redirect()->route('index1')->with('message', 'Your Blog is Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return view('deleted');
    }
}
