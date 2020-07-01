<?php

namespace App\Http\Controllers;
use App\ASAnnounse;
use Illuminate\Http\Request;
use DB;


class ASAnnounsesController extends Controller
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
        $admins = DB::select('select * from admins');
        $chat = ASAnnounse::all();
        return view('announses.asannounse')->with('admins', $admins)->with('chat',$chat);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'message' => 'required',
        ]);
        $product = new ASAnnounse($request->input()) ;
     
         
        $product->save() ;

    return redirect('/asannounse/create')->with('completed', 'Vehicle has been saved!');
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
        $chat = ASAnnounse::findOrFail($id);
        $chat->delete();

        return redirect('/asannounse/create')->with('completed', 'message has been deleted');
    }
}
