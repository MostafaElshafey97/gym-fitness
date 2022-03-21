<?php

namespace App\Http\Controllers;

use App\Mmuscle;
use Illuminate\Http\Request;
use DB;
class MmuscleController extends Controller
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
    public function musclelist(Request $request){

 
        $states = DB::table("muscles")->where("id_muscle_group",$request->cat_id)->orderBy('name_muscle')->pluck("name_muscle");
     
      return response()->json($states);

 
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Mmuscle  $mmuscle
     * @return \Illuminate\Http\Response
     */
    public function show(Mmuscle $mmuscle)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Mmuscle  $mmuscle
     * @return \Illuminate\Http\Response
     */
    public function edit(Mmuscle $mmuscle)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Mmuscle  $mmuscle
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mmuscle $mmuscle)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Mmuscle  $mmuscle
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mmuscle $mmuscle)
    {
        //
    }
}
