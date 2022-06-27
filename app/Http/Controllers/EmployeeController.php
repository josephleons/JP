<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return interface for store info
        // return view('employee.create');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('employee.create');
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
        // dd($request->all());
        $this->validate($request,[
            'index'=>'required',
            'firstname'=>'required',
            'middlename'=>'required',
            'lastname'=>'required',
            'email'=>'required',
            'mobile'=>'required',
            'physical'=>'required',
            'gender'=>'required',
            'nida'=>'required',
            'region'=>'required',
            'district'=>'required',
            'ward'=>'required',
            'photo'=>'image|nullable|max:1999',
            'birth'=>'image|nullable|max:1999',
            'cv'=>'image|nullable|max:1999',
            'letter'=>'image|nullable|max:1999',
            'other'=>'image|nullable|max:1999',
                      
        ]);
        
        // dd($request->all());
        // handle file to upload
        if($request->hasFile('photo')){
            // get filename to upload
            $filenameWithExt =$request->file('photo')->getClientOriginalName();
            // get just filename
            $Filename =pathinfo($filenameWithExt,PATHINFO_FILENAME);
            // GET JUST EXTENT
            $exten =$request->file('photo')->getClientOriginalExtension();

            // fileToSore
            $fileNameToStore = $Filename.'_'.time().'.'.$exten;
            $path=$request->file('photo')->storeAs('logImage', $fileNameToStore);

        }else{
            $fileNameToStore ='noimage.jpeg';
        }
        // create posty
         $employee = new Employee;
         $employee->index=$request->input('index');
         $employee->firstname=$request->input('firstname');
         $employee->middlename=$request->input('middlename');
         $employee->lastname=$request->input('lastname');
         $employee->email=$request->input('email');
         $employee->mobile=$request->input('mobile');
         $employee->physical=$request->input('physical');
         $employee->gender=$request->input('gender');
         $employee->nida=$request->input('nida');
         $employee->region=$request->input('region');
         $employee->district=$request->input('district');
         $employee->ward=$request->input('ward');
         $employee->photo=$request->input('photo');
         $employee->birth=$request->input('birth');
         $employee->birth=$request->input('letter');
         $employee->cv=$request->input('cv');
         $employee->other=$request->input('other');
         $employee->save();

        return redirect('/applicant')->with('success','information success saved');
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
}
