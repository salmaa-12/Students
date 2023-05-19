<?php

namespace App\Http\Controllers;

use App\Models\Second;
use Illuminate\Http\Request;

class SecondController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $second =  Second::all();
        // $posts = Post::paginate(4);
        return view('second.index')->with('second', $second);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    //  public function create()
    // {
    //     // return view('second.create');
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
            'subject_name' => 'required' 
        ]);

        $second = new Second;
        $second->subject_name = $request->subject_name;
        $second->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $second= Second::findOrFail($id);
        return view('second.show')->with('second' , $second);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function edit($id)
    // {
    //     $second = Second::findOrFail($id);
    //     return view('second.edit')->with('second' , $second);
    // }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function update(Request $request, $id)
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
        $second = Second::findOrFail($id);
        $second->delete();
        return redirect('/seconds')->with('delete', 'Delete Subject');
    }
}
