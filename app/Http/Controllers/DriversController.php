<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DriversController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       return view('layouts.drivers.apply');
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
        if ($request->input('submit') != null ){

            $file = $request->file('file');
    
            // File Details
            $filename = $file->getClientOriginalName();
            $extension = $file->getClientOriginalExtension();
            $tempPath = $file->getRealPath();
            $fileSize = $file->getSize();
            $mimeType = $file->getMimeType();
    
            // Valid File Extensions
            $valid_extension = array("pdf","txt");
    
            // 2MB in Bytes
            $maxFileSize = 4999;
    
            // Check file extension
            if(in_array(strtolower($extension),$valid_extension)){
    
              // Check file size
              if($fileSize <= $maxFileSize){
    
                 // File upload location
                 $location = 'certs';
    
                 // Upload file
                 $file->move($location,$filename);
    
                 Session::flash('message','Upload Successful.');
              }else{
                 Session::flash('message','File too large. File must be less than 2MB.');
              }
    
            }else{
               Session::flash('message','Invalid File Extension.');
            }
        }
        return redirect()->action('DriversController@index');
            
    
      $fname = $request->input('fname');
      $lname = $request->input('lname');
      $idno  = $request->input('idno');
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
    public function renew()
    {
        return view('layouts.drivers.renew');
    }
    public function fine()
    {
        return view('layouts.drivers.fines');
    }
}
