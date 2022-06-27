<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   $company=Company::all();
        return view('companies.index')->with('companies',$company);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('companies.form');
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
            'company_logo'=>'image|nullable|max:1999',
            'max_applicant'=>'required',
            'location'=>'required'
        ]);
        // handle file upload
        if($request->hasFile('company_logo')){
            // get filename to upload
            $filenameWithExt =$request->file('company_logo')->getClientOriginalName();
            // get just filename
            $Filename =pathinfo($filenameWithExt,PATHINFO_FILENAME);
            // GET JUST EXTENT
            $exten =$request->file('company_logo')->getClientOriginalExtension();

            // fileToSore
            $fileNameToStore = $Filename.'_'.time().'.'.$exten;
            $path=$request->file('company_logo')->storeAs('logo_image', $fileNameToStore);

        }else{
            $fileNameToStore ='noimage.jpeg';
        }
        // create post
        $company=new Company;
        $company->title=$request->input('title');
        $company->body=$request->input('body');
        $company->company_name=$request->input('company_name');
        $company->company_logo = $fileNameToStore;
        $company->max_applicant=$request->input('max_applicant');
        $company->location=$request->input('location');
        $company->user_id =auth()->user()->id;
        $company->save();
        return redirect('/companies')->with('success','Company Registered');
    
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
        //
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
    public function company_form()
    {
        return view('companies.form');
    }
}
