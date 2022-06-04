<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        return view('index', ['blogs' => Blog::all()]);
    }

    public function create(Request $request)
    {

        // $imgName = uniqid() . "_" . $request->image->getClientOriginalName();
        // $request->image->storeAs("public", $imgName);

        $blog = new Blog;
        $blog->title = $request->title;
        $blog->body = $request->body;
        // $blog->image = $imgName;
        $blog->save();
        return redirect()->route('blog.index')->with('status', "Successfully Created Blog!");
    }

    public function detail($id)
    {
        return view('blog', ['blog' => Blog::findOrFail($id)]);
    }

    public function edit(Request $request, $id)
    {
        $blog = Blog::findOrFail($id);
        $blog->title = $request->title;
        $blog->body = $request->body;
        $blog->save();
        return redirect()->route('blog.index')->with('status', 'Successfully Updated Blog');
    }

    public function delete($id)
    {
        Blog::destroy($id);
        return redirect()->route('blog.index')->with('status', 'Successfully Deleted Blog');
    }
}
