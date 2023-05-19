<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Abutton;
use Illuminate\Http\Request;
use Illuminate\Validation\Validator;

class AbuttonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $add =  Abutton::all();
        return view('add.index')->with('add', $add);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function create()
    // {
    //     return view('add.create');
    // }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request ,[
            'subject_name' => 'required',
            'body' => 'required'
        ]);
        
        $add = new Abutton;
        $add->subject_name = $request->subject_name;
        $add->body = $request->body;
        $add->save();


        // $rules = [
		// 	'subject_name' => 'required',
        //     'body' => 'required'
		// ];
		// $validator = Validator::make($request->all(),$rules);
		// if ($validator->fails()) {
		// 	return redirect('insert')
		// 	->withInput()
		// 	->withErrors($validator);
		// }
		// else{
        //     $data = $request->input();
		// 	try{
		// 		$add = new Abutton;
        //         $add->subject_name = $request->subject_name;
        //         $add->body = $request->body;
        //         $add->save();
		// 		return redirect('insert')->with('status',"Insert successfully");
		// 	}
		// 	catch(Exception $e){
		// 		return redirect('insert')->with('failed',"operation failed");
		// 	}
		// }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $add= Abutton::findOrFail($id);
        return view('add.show')->with('add' , $add);
        // echo 'd';
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function edit($id)
    // {
    //     //
    // }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    //// public function update(Request $request, $id)
    // {
    //     //
    // }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $add = Abutton::findOrFail($id);
        $add->delete();
        return redirect('/add')->with('delete', 'Delete Subject');
    }
}
