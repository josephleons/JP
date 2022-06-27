<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // display job list
        $posts =Post::orderBy('title','desc')->get();
        // $posts =Post::orderBy('title','desc')->paginate(1);
        return view('posts.index')->with('posts',$posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
                'title'=>'required',
                'body'=>'required',
                'company_name'=>'required',
                'hasImage'=>'image|nullable|max:1999',
                'max_applicant'=>'required',
                'location'=>'required'
            ]);
            
            // handle file upload
            if($request->hasFile('hasImage')){
                // get filename to upload
                $filenameWithExt =$request->file('hasImage')->getClientOriginalName();
                // get just filename
                $Filename =pathinfo($filenameWithExt,PATHINFO_FILENAME);
                // GET JUST EXTENT
                $exten =$request->file('hasImage')->getClientOriginalExtension();

                // fileToSore
                $fileNameToStore = $Filename.'_'.time().'.'.$exten;
                $path=$request->file('hasImage')->storeAs('logImage', $fileNameToStore);

            }else{
                $fileNameToStore ='noimage.jpeg';
            }
            // create post
            $posts=new Post;
            $posts->title=$request->input('title');
            // $posts->body=$request->input('body');
            $posts->company_name=$request->input('company_name');
            $posts->hasImage = $fileNameToStore;
            $posts->max_applicant=$request->input('max_applicant');
            $posts->location=$request->input('location');
            // $posts->user_id =auth()->user()->id;
            $posts->save();
            // dd($request->all());
            return redirect('/posts')->with('success','Post Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        $this->validate($request,[
            'id'=>'required',
            'title'=>'required',
            'body'=>'required',
            'comapany_name'=>'required',
            'hasImage'=>'required',
            'max_applicant'=>'required',
            'location'=>'required'
        ]);
        // create post
        $posts=Post::find($id);
        $posts->title=$request->input('title');
        $posts->body=$request->input('body');
        $posts->comapany_name=$request->input('comapany_name');
        $posts->hasImage=$request->input('hasImage');
        $posts->max_applicant=$request->input('max_applicant');
        $posts->location=$request->input('location');
        $posts->save();
        return redirect('/posts')->with('success','Post update');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    // public function user(){
    //     return view('users.user_dashboard');
    // }
}
