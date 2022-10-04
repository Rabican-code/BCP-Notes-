<?php

namespace App\Http\Controllers;

use App\Models\notes;
use Illuminate\Http\Request;
use DB;
class notesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $subject = $request->input('subject');
        $topic = $request->input('topic');
        $notes = $request->input('notes');
        $data=array( 'subject'=>$subject,'topic'=>$topic,"notes"=>$notes);
        DB::table('notes')->insert($data);
        $request->session()->flash('msg','Record inserted successfully.');
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param      /**\App\Models\notes  $notes
     * @return \Illuminate\Http\Response
     */
    public function show( Request $request)
    {
        $search = $request['search'] ?? "";
        if($search != "") {
            $data = notes::where('subject','LIKE',"$search%")->orwhere('topic','LIKE',"$search%")->get();
        } else {
            $data = notes::all();
        }
        $res = compact('data','search');
        return view('show')->with($res);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\notes  $notes
     * @return \Illuminate\Http\Response
     */
    public function edit(notes $notes,$id)
    {
        $data = notes::find($id);
        return view('edit',['data'=>$data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\notes  $notes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, notes $notes)
    {
        $data = notes::find($request->get('id'));
        $data->subject = $request->get('subject');
        $data->topic = $request->get('topic');
        $data->notes = $request->get('notes');
        $data->save();
        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\notes  $notes
     * @return \Illuminate\Http\Response
     */
    public function destroy(notes $notes)
    {

    }

    public function accounts()
    {

        $data = notes::where('subject','LIKE','accounts')->get();
        $res = compact('data');
        return view('show')->with($res);

    }


    public function bom()
    {

        $data = notes::where('subject','LIKE','bom')->get();
        $res = compact('data');
        return view('show')->with($res);

    }

    public function economics()
    {

        $data = notes::where('subject','LIKE','economics')->get();
        $res = compact('data');
        return view('show')->with($res);

    }

    public function statics()
    {

        $data = notes::where('subject','LIKE','statics')->get();
        $res = compact('data');
        return view('show')->with($res);

    }

    public function english()
    {

        $data = notes::where('subject','LIKE','english')->get();
        $res = compact('data');
        return view('show')->with($res);

    }

    public function computer()
    {

        $data = notes::where('subject','LIKE','computer')->get();
        $res = compact('data');
        return view('show')->with($res);

    }
}
